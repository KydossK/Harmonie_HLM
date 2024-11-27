<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmonie Municipale</title>
    @vite(['resources/css/home.css', 'resources/js/home.js'])
</head>


<body>
    <header class="header">
        <h1>Harmonie Municipale <br> de Hellemmes-Lille</h1>
        <nav>
            <ul class="nav">
                <li><a href="/">Accueil Visiteurs</a></li>
                <li><a href="/musiciens">Page Musiciens</a></li>
            </ul>
        </nav>
    </header>


    <main class="content">
        <section class="intro">
            <h2>À propos de l'Harmonie Municipale</h2>
            <p>L'harmonie municipale regroupe des passionnés de musique qui se retrouvent pour partager leur art. Découvrez nos événements, nos projets et bien plus encore !</p>
        </section>

        <section class="infos">
            <h2>Informations</h2>
            <ul>
                <li>Prochain concert : 15 décembre 2024</li>
                <li>Lieu : Salle des fêtes</li>
                <li>Heure : 20h00</li>
            </ul>
        </section>

        <section class="recruitment">
            <div class="container">
                <h2 class="recruitment-title">L'Harmonie Recrute</h2>
                <p>
                    Vous êtes musicien amateur et possédez le niveau nécessaire pour jouer en harmonie municipale ? <br>
                    <br>
                    Rejoignez-nous chaque vendredi soir à 19h30 pour les répétitions,<br> à l'école de musique de Hellemmes. Adresse : 1A Rue François Marceau, 59260 Lille
                </p>
            </div>
        </section>
    </main>


    <footer class="footer">
        <p>&copy; 2024 Harmonie Municipale de Hellemes. Tous droits réservés. Pierre Plé</p>
    </footer>
</body>
</html>
