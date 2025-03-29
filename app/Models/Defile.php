<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Defile extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'date',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
