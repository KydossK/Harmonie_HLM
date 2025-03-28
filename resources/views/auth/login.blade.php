<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">
        <h1 class="text-2xl font-bold text-center mb-6">Connexion à l'espace musiciens</h1>

        @if ($errors->any())
            <div class="mb-4 text-red-600">
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="block font-medium text-sm">Adresse e-mail</label>
                <input type="email" name="email" id="email" required autofocus
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div>
                <label for="password" class="block font-medium text-sm">Mot de passe</label>
                <input type="password" name="password" id="password" required
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="mr-2">
                    Se souvenir de moi
                </label>
            </div>

            <div>
                <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                    Se connecter
                </button>
            </div>
        </form>

        <div class="text-center mt-6 space-y-2">
            <a href="/" class="text-blue-500 hover:underline text-sm">&larr; Retour à l'accueil</a><br>
            <a href="{{ route('register') }}" class="text-blue-500 hover:underline text-sm">Créer un compte</a>
        </div>
        
    </div>

</body>
</html>
