<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusiciensController extends Controller
{
    public function index()
    {
        $musiciens = [
            ['name' => 'Jean Dupont', 'instrument' => 'Clarinette', 'photo' => 'jean.jpg'],
            ['name' => 'Marie Curie', 'instrument' => 'Flûte', 'photo' => 'marie.jpg'],
            ['name' => 'Paul Martin', 'instrument' => 'Trombone', 'photo' => 'paul.jpg'],
        ];

        return view('musiciens', compact('musiciens'));
    }
}
