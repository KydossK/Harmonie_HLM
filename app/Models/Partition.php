<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partition extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'fichier',
        'user_id',
    ];
}
