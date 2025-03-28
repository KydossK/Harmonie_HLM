<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmonie Municipale</title>
    <link rel="icon" href="{{ asset('Img/blason-no-bg.jpeg') }}" type="image/jpeg">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-gray-800">
    <header class="bg-gray-900 text-white">
        <div class="w-full h-64 overflow-hidden">
            <img src="{{ asset('Img/mairie-hellemmes.jpg') }}" alt="Image Header" class="w-full h-full object-cover">
        </div>
        <div class="text-center py-6">
            <h1 class="text-3xl md:text-5xl font-bold">Harmonie Municipale<br>de Hellemmes-Lille</h1>
        </div>
        <nav class="bg-gray-800 py-4">
            <ul class="flex justify-center gap-6 text-lg md:text-xl">
                <li>
                    <a href="/" class="flex items-center gap-2 text-white hover:text-blue-400">
                        <img src="{{ asset('Img/ico/choir_1.png') }}" alt="Accueil" class="h-8">
                        <span>Accueil Visiteurs</span>
                    </a>
                </li>
                <li>
                    <a href="/musiciens" class="flex items-center gap-2 text-white hover:text-blue-400">
                        <img src="{{ asset('Img/ico/freedom_3.png') }}" alt="Musiciens" class="h-8">
                        <span>Page Musiciens</span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="px-6 py-10 max-w-4xl mx-auto">
        <section class="mb-12">
            <h2 class="text-2xl font-semibold mb-4">À propos de l'Harmonie Municipale</h2>
            <p class="text-lg">L'harmonie municipale regroupe des passionnés de musique qui se retrouvent pour partager leur art. Découvrez nos événements, nos projets et bien plus encore !</p>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-semibold mb-4">Informations</h2>
            <ul class="list-disc list-inside text-lg space-y-1">
                <li>Prochain concert : 15 décembre 2024</li>
                <li>Lieu : Salle des fêtes</li>
                <li>Heure : 20h00</li>
            </ul>
        </section>

        <section class="bg-gray-100 p-6 rounded-xl shadow-md">
            <h2 class="text-2xl font-semibold mb-4 text-center">L'Harmonie Recrute</h2>
            <p class="text-lg text-center">
                Vous êtes musicien amateur et possédez le niveau nécessaire pour jouer en harmonie municipale ?<br><br>
                Rejoignez-nous chaque vendredi soir à 19h30 pour les répétitions,<br>
                à l'école de musique de Hellemmes.<br>
                Adresse : 1A Rue François Marceau, 59260 Lille
            </p>
        </section>
    </main>

    <footer class="bg-gray-900 text-white text-center py-6 mt-10">
        <p>&copy; 2024 Harmonie Municipale de Hellemmes. Tous droits réservés. Pierre Plé</p>
    </footer>
</body>
</html>
