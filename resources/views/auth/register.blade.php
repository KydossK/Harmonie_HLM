<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">
        <h1 class="text-2xl font-bold text-center mb-6">Créer un compte</h1>

        @if ($errors->any())
            <div class="mb-4 text-red-600 text-sm">
                <p><strong>Oups !</strong> Veuillez corriger les erreurs ci-dessous :</p>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            {{-- Nom --}}
            <div>
                <label for="name" class="block font-medium text-sm">Nom complet</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500">
                @error('name')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Email --}}
            <div>
                <label for="email" class="block font-medium text-sm">Adresse e-mail</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500">
                @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Mot de passe --}}
            <div>
                <label for="password" class="block font-medium text-sm">Mot de passe</label>
                <input type="password" name="password" id="password" required
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500">
                @error('password')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Confirmation --}}
            <div>
                <label for="password_confirmation" class="block font-medium text-sm">Confirmer le mot de passe</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500">
            </div>

            {{-- Bouton --}}
            <div>
                <button type="submit"
                        class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded">
                    S'inscrire
                </button>
            </div>
        </form>

        <div class="text-center mt-6 space-y-2 text-sm">
            <a href="/" class="text-blue-500 hover:underline">&larr; Retour à l'accueil</a><br>
            <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Déjà inscrit ? Se connecter</a>
        </div>
    </div>

</body>
</html>
