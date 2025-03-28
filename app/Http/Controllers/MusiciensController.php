<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Carbon\Carbon; // Importez Carbon pour les manipulations de dates
use App\Models\Musicien; // Importez le modèle Musicien
use App\Models\Partition; //Importation des partitions partagées 

class MusiciensController extends Controller
{
    public function index()
{
  // Charger les musiciens groupés par instrument
$groupes = Musicien::with('photos')->get()->groupBy('libelle_instrument');

// Mélanger l’ordre des pupitres tout en conservant les noms
$musiciens = collect($groupes->keys())
    ->shuffle()
    ->mapWithKeys(function ($key) use ($groupes) {
        return [$key => $groupes[$key]];
    });

    

    // Calcul du prochain anniversaire
    $today = Carbon::today(); // Date d'aujourd'hui
    $prochainAnniversaire = Musicien::select('prenom', 'date_anniversaire')
        ->get()
        ->map(function ($musicien) use ($today) {
            // Calculer la prochaine date d'anniversaire
            $anniversaire = Carbon::parse($musicien->date_anniversaire)->setYear($today->year);

            // Si l'anniversaire est déjà passé cette année, utiliser l'année prochaine
            if ($anniversaire->lessThan($today)) {
                $anniversaire->addYear();
            }

            // Ajouter la date calculée comme propriété
            $musicien->prochaine_date_anniversaire = $anniversaire;

            return $musicien;
        })
        ->sortBy('prochaine_date_anniversaire') // Trier par la prochaine date
        ->first(); // Prendre le premier (le plus proche)

    // Charger les partitions pour l'espace d'échange
    $partitions = Partition::latest()->get();

    // Retourner la vue avec les données (ajout partitions)
    return view('musiciens', compact('musiciens', 'prochainAnniversaire', 'partitions'));
}
    
}