<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmonie Hellemmes-Lille</title>
    <link rel="icon" href="{{ asset('Img/blason-no-bg.jpeg') }}" type="image/jpeg">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-gray-800">
    <header class="bg-gray-900 text-white">
        <div class="w-full h-64 overflow-hidden">
            <img src="{{ asset('Img/mairie-hellemmes.jpg') }}" alt="Image Header" class="w-full h-full object-cover">
        </div>
        <div class="text-center py-6">
            <h1 class="text-3xl md:text-5xl font-bold">Harmonie<br>de Hellemmes-Lille</h1>
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
            <div class="text-center max-w-4xl mx-auto">
                <h2 class="text-2xl font-semibold mb-4">À propos de l'Harmonie</h2>
        
                <p class="text-lg leading-relaxed">
                    L'Harmonie d'Hellemmes est une institution musicale emblématique de notre ville, célébrant en 2008 son 
                    <strong>150ᵉ anniversaire</strong>.
                </p>
        
                <br>
        
                <p class="text-lg leading-relaxed">
                    Fondée en <strong>1858</strong>, l'harmonie a traversé les époques, reflétant l'évolution culturelle et sociale d'Hellemmes.
                </p>
        
                <p class="text-lg leading-relaxed">
                    Depuis ses débuts, elle s'est imposée comme un acteur majeur de la vie musicale locale.
                </p>
        
                <br>
        
                <p class="text-lg leading-relaxed">
                    Nos missions incluent la transmission musicale, l'animation culturelle et l'excellence artistique. Nous offrons aux jeunes et aux adultes l'opportunité d'apprendre et de pratiquer la musique en ensemble. L'harmonie participe activement aux événements locaux et œuvre pour le développement de la culture musicale à Hellemmes et dans la région.
                </p>
            </div>
        </section>
        
    
        <section class="mb-12 bg-blue-50 dark:bg-blue-900 dark:text-blue-100 p-6 rounded-xl shadow-md">
            <h2 class="text-2xl font-semibold mb-4">📅 Informations</h2>
            <ul class="list-disc list-inside text-lg space-y-1">
                <li><strong>Prochain concert :</strong> 15 décembre 2024</li>
                <li><strong>Lieu :</strong> Salle des fêtes d’Hellemmes</li>
                <li><strong>Heure :</strong> 20h00</li>
            </ul>
        </section>
        
        <section class="mb-12 bg-yellow-50 dark:bg-yellow-800 dark:text-yellow-100 p-6 rounded-xl shadow-md">
            <h2 class="text-2xl font-semibold mb-4">🎵 Une aventure musicale et humaine</h2>
            <p class="text-lg leading-relaxed">
                L’Harmonie d’Hellemmes est bien plus qu’un simple orchestre. C’est un lieu de rencontre entre passionnés, un creuset de liens intergénérationnels et un symbole de la vie culturelle locale.
            </p>
            <br>
            <p class="text-lg leading-relaxed">
                Rejoindre l’harmonie, c’est participer à un projet collectif, s’investir dans des moments musicaux forts et contribuer à la richesse culturelle de notre ville.
            </p>
        </section>
        
    
        <section class="bg-gray-100 p-6 rounded-xl shadow-md">
            <h2 class="text-2xl font-semibold mb-4 text-center">L'Harmonie Recrute</h2>
            <p class="text-lg text-center">
                Vous êtes musicien amateur et possédez le niveau nécessaire pour jouer en harmonie ?<br><br>
                Rejoignez-nous chaque vendredi soir à 19h30 pour les répétitions,<br>
                à l'école de musique de Hellemmes.<br>
                Adresse : 1A Rue François Marceau, 59260 Lille
            </p>
        </section>
    </main>
    


    <footer class="bg-gray-900 text-white text-center py-6 mt-10 space-y-2">
        <p>&copy; 2025 Harmonie de Hellemmes. Tous droits réservés. Pierre Plé</p>
        <p>
            <a href="{{ route('mentions') }}" class="text-sm text-blue-400 hover:underline">
                Mentions légales
            </a>
        </p>
    </footer>
    
</body>
</html>
