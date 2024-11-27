<?php

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MusiciensController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/musiciens', [MusiciensController::class, 'index'])->name('musiciens');
});


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');


Route::get('/photos/{filename}', function ($filename) {
    // Vérifiez si l'utilisateur est authentifié
    if (!auth()->check()) {
        abort(403); // Interdit si non connecté
    }

    // Tente de localiser le fichier avec .jpg ou .jpeg
    $possiblePaths = [
        storage_path('app/private/photos/' . $filename),
        storage_path('app/private/photos/' . pathinfo($filename, PATHINFO_FILENAME) . '.jpg'),
        storage_path('app/private/photos/' . pathinfo($filename, PATHINFO_FILENAME) . '.jpeg'),
    ];

    foreach ($possiblePaths as $path) {
        if (file_exists($path)) {
            return response()->file($path); // Retourne le fichier valide
        }
    }

    // Fichier non trouvé
    abort(404);
})->name('photos.private');