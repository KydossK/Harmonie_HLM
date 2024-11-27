<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    @vite(['resources/css/login.css', 'resources/js/login.js'])
</head>

<body>
    <a href="{{ route('home') }}" class="btn-custom">Retour à l'accueil</a>
    <div class="container">
        <h1>Connexion</h1>
        @if ($errors->any())
            <div class="error-message">
                {{ $errors->first() }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email">Adresse email :</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Se connecter</button>
        </form>
        <p>
            <a href="#">Mot de passe oublié ?</a>
        </p>
    </div>
</body>


</body>

</html>
