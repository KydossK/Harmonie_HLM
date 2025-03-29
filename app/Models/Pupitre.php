<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pupitre extends Model
{
    use HasFactory;

    protected $fillable = ['nom'];

    public function musiciens()
    {
        return $this->hasMany(Musicien::class);
    }
}
