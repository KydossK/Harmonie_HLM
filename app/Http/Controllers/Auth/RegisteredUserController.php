<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Musicien;
use App\Models\Pupitre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;

class RegisteredUserController extends Controller
{
    public function create()
    {
        // On récupère tous les pupitres pour alimenter la liste déroulante
        $pupitres = Pupitre::all();
        return view('auth.register', compact('pupitres'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'pupitre_id' => ['required', 'exists:pupitres,id'],
            'photo' => ['nullable', 'image', 'max:2048'],
        ]);

        // Création de l'utilisateur Laravel
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Création du musicien lié
        $musicien = Musicien::create([
            'prenom' => $request->name,
            'nom' => '', // Tu peux demander le nom dans le formulaire si nécessaire
            'email' => $request->email,
            'mot_de_passe' => $user->password, // ou autre champ sécurisé si nécessaire
            'pupitre_id' => $request->pupitre_id,
        ]);

        // Gestion de la photo
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos', 'private');
            $musicien->photos()->create(['path' => $path]);
        }

        // Connexion automatique
        event(new Registered($user));
        Auth::login($user);

        return redirect()->route('musiciens')->with('success', 'Votre inscription a été validée ! Bienvenue !');
    }
}
