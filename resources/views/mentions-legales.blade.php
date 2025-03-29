<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mentions légales - Harmonie de Hellemmes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
</head>
<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-white">

    <main class="max-w-4xl mx-auto px-6 py-10 space-y-10">

        {{-- Titre encart jaune --}}
        <section class="bg-yellow-300 dark:bg-yellow-800 dark:text-yellow-100 p-6 rounded-lg shadow text-center">
            <h1 class="text-3xl font-bold">Mentions légales</h1>
        </section>
    
        {{-- Contenu encart bleu --}}
        <section class="bg-blue-100 dark:bg-blue-800 dark:text-blue-100 p-6 rounded-lg shadow space-y-6">
    
            <div class="space-y-4">
                <h2 class="text-xl font-semibold border-b border-blue-300 pb-1">Éditeur du site</h2>
                <p><strong>Nom :</strong> Harmonie de Hellemmes</p>
                <p><strong>Responsable de la publication :</strong> Pierre Plé</p>
                <p><strong>Adresse :</strong> 1A Rue François Marceau, 59260 Lille</p>
                <p><strong>Email :</strong> contact@harmonie-hellemmes.fr</p>
            </div>
    
            <div class="space-y-4">
                <h2 class="text-xl font-semibold border-b border-blue-300 pb-1">Hébergement</h2>
                <p>Ce site est hébergé par l’association elle-même ou via un hébergeur tiers (à préciser).</p>
            </div>
    
            <div class="space-y-4">
                <h2 class="text-xl font-semibold border-b border-blue-300 pb-1">Propriété intellectuelle</h2>
                <p>Les contenus présents sur ce site (textes, images, documents) sont la propriété de l’Harmonie de Hellemmes sauf mention contraire.</p>
                <p>Toute reproduction ou diffusion est interdite sans autorisation écrite préalable.</p>
            </div>
    
            <div class="space-y-4">
                <h2 class="text-xl font-semibold border-b border-blue-300 pb-1">Données personnelles</h2>
                <p>Les informations collectées sont destinées à un usage strictement interne (gestion des membres, inscriptions...).</p>
                <p>Conformément à la loi Informatique et Libertés et au RGPD, vous pouvez exercer vos droits d’accès, de rectification ou de suppression à tout moment à l’adresse suivante :</p>
                <p><strong>contact@harmonie-hellemmes.fr</strong></p>
            </div>
    
            <div class="space-y-4">
                <h2 class="text-xl font-semibold border-b border-blue-300 pb-1">Cookies</h2>
                <p>Ce site utilise uniquement des cookies fonctionnels nécessaires au bon fonctionnement (authentification, session).</p>
            </div>
    
            <div class="space-y-4">
                <h2 class="text-xl font-semibold border-b border-blue-300 pb-1">Limitation de responsabilité</h2>
                <p>Les informations publiées sur ce site sont fournies à titre indicatif. L’Harmonie ne peut être tenue responsable en cas d’erreur ou d’omission.</p>
            </div>
        </section>
    
        <div class="text-center">
            <a href="{{ url('/') }}" class="inline-block mt-6 text-blue-600 dark:text-yellow-300 hover:underline font-semibold">
                &larr; Retour à l'accueil
            </a>
        </div>
    </main>
    
    

</body>
</html>
