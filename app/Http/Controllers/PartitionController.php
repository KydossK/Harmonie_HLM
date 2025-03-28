<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Partition;

class PartitionController extends Controller
{
    // Méthode affichage des partitions
    public function index()
    {
        $partitions = Partition::latest()->get();
        return view('musiciens', compact('partitions'));
    }

    // Méthode upload sécurisé des partitions
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:100',
            'partition' => 'required|file|mimes:pdf,jpeg,jpg,png|max:3072',
        ]);

        try {
            $path = $request->file('partition')->store('private/partitions');

            Partition::create([
                'titre' => $request->titre,
                'fichier' => $path,
                'user_id' => Auth::id(),
            ]);

            return back()->with('success', 'Partition partagée avec succès !');

        } catch (\Exception $e) {
            return back()->withErrors(['partition' => 'Échec du partage de la partition. Veuillez réessayer.']);
        }
    }

    // Méthode téléchargement sécurisé des partitions
    public function telecharger($id)
    {
        $partition = Partition::findOrFail($id);
        return Storage::download($partition->fichier);
    }
}
