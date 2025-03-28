<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musicien extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'date_anniversaire',
        'adresse',
        'email',
        'telephone',
        'instrument_prete',
        'libelle_instrument',
        'role',
        'mot_de_passe',
        'pupitre',
    ];

    // Cast automatique de date_anniversaire en Carbon
    protected $casts = [
        'date_anniversaire' => 'date',
    ];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
