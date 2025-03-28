<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;

class RegisteredUserController extends Controller
{
    /**
     * Affiche le formulaire d'inscription.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Enregistre un nouvel utilisateur.*/
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'pupitre' => 'required|string|in:Flûte,Hautbois,Clarinette,Saxophone,Cor,Trompette,Trombone,Tuba,Percussions,Autre', // Validation du pupitre
            'photo' => ['nullable', 'image', 'max:2048'], // max ~2Mo
        ]);
    
        // Si l'utilisateur a envoyé une photo, on la stocke
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'private');
        }
    
        // Création de l'utilisateur avec le pupitre choisi
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'pupitre' => $request->pupitre, // On enregistre le pupitre choisi
        ]);
    
        // Si une photo a été envoyée, on crée l'entrée liée dans la table photos
        if ($photoPath) {
            $user->photos()->create(['path' => $photoPath]);
        }
    
        // Connexion automatique après inscription
        event(new Registered($user));
        Auth::login($user);
    
        // Redirection vers la page des musiciens après l'inscription
        return redirect()->route('musiciens')->with('success', 'Votre inscription a été validée ! Bienvenue !');
    }
}