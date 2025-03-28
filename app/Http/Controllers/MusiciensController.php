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
        // Charger les musiciens groupés par PUPITRE
        $groupes = Musicien::with('photos')->get()->groupBy('pupitre');
        
        // Ordre scénique personnalisé des pupitres
        $ordrePupitres = [
            'Flûte',
            'Hautbois',
            'Clarinette',
            'Saxophone',
            'Cor',
            'Trompette',
            'Trombone',
            'Tuba',
            'Percussions',
            'Autre',
        ];

        
       // Mélanger l'ordre des pupitres de manière aléatoire
       shuffle($ordrePupitres);

       // Réorganiser les groupes selon l'ordre mélangé
       $musiciens = collect($ordrePupitres)
           ->filter(fn($p) => $groupes->has($p)) // Garde que les pupitres présents dans les données
           ->mapWithKeys(function ($pupitre) use ($groupes) {
               return [$pupitre => $groupes[$pupitre]];
           });
    
        // Calcul du prochain anniversaire
        $today = Carbon::today();
        $prochainAnniversaire = Musicien::select('prenom', 'date_anniversaire')
            ->get()
            ->map(function ($musicien) use ($today) {
                $anniversaire = Carbon::parse($musicien->date_anniversaire)->setYear($today->year);
                if ($anniversaire->lessThan($today)) {
                    $anniversaire->addYear();
                }
                $musicien->prochaine_date_anniversaire = $anniversaire;
                return $musicien;
            })
            ->sortBy('prochaine_date_anniversaire')
            ->first();
    
        // Charger les partitions pour l'espace d'échange
        $partitions = Partition::latest()->get();
    
        // Retourner la vue avec les données
        return view('musiciens', compact('musiciens', 'prochainAnniversaire', 'partitions'));
    }
    
}