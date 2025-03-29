<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Musiciens</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body 
    x-data="{ dark: localStorage.getItem('theme') === 'dark' }"
    x-init="
        if (dark) document.documentElement.classList.add('dark');
        else document.documentElement.classList.remove('dark');
    "
    class="bg-white text-gray-800 dark:bg-gray-900 dark:text-gray-100"
>

    {{-- ✅ Message de succès avec animation --}}
    @if (session('success'))
        <div 
            x-data="{ show: true }" 
            x-init="setTimeout(() => show = false, 5000)" 
            x-show="show" 
            x-transition
            class="max-w-3xl mx-auto mt-6 mb-4 p-4 rounded-lg bg-green-100 border border-green-300 text-green-800 shadow-md">
            <div class="flex items-center justify-between">
                <p class="text-sm font-medium flex items-center gap-2">
                    ✅ {{ session('success') }}
                </p>
                <button @click="show = false"
                        class="text-green-700 hover:text-green-900 text-sm font-semibold">&times;</button>
            </div>
        </div>
    @endif

{{-- ✅ Section principale --}}
<section class="max-w-5xl mx-auto px-4 py-8 space-y-10">

    {{-- ✅ Conteneur bleu principal (englobe toutes les infos utiles) --}}
    <div class="bg-blue-350 dark:bg-blue-900 dark:text-blue-100 p-6 rounded-lg shadow space-y-6">

        {{-- ✅ Bloc informations + boutons à droite --}}
        <div>
            <div class="flex justify-between items-start mb-4">
                <h2 class="text-2xl font-semibold">Informations pour les Musiciens :</h2>

                <div class="flex flex-col items-end space-y-2">
                    {{-- 🔴 Bouton de déconnexion --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="text-sm bg-red-600 hover:bg-red-700 text-white font-semibold py-1 px-3 rounded">
                            Déconnexion
                        </button>
                    </form>
                 

                    {{-- 🌗 Bouton mode sombre / clair --}}
                    <button
                    @click="
                        dark = !dark;
                        localStorage.setItem('theme', dark ? 'dark' : 'light');
                        dark ? document.documentElement.classList.add('dark') : document.documentElement.classList.remove('dark');
                    "
                    class="text-sm bg-gray-700 hover:bg-gray-600 dark:bg-gray-200 dark:hover:bg-gray-300 text-gray-200 dark:text-gray-800 font-semibold py-1 px-3 rounded transition"

                    x-text="dark ? '🌞 Mode clair' : '🌙 Mode sombre'">
                    </button>
                </div>
            </div>

{{-- 📢 Annonces et Alertes rapides --}}
<section class="relative max-w-4xl mx-auto my-8 p-6 pt-24 bg-red-50 dark:bg-yellow-800 dark:text-yellow-100 rounded-lg shadow">

    {{-- ✅ Frise répétée en haut --}}
    <div class="absolute top-0 left-0 w-full h-16 bg-repeat-x bg-top bg-contain z-0"
     style="background-image: url('{{ asset('Img/frise-horizontale.png') }}');">
    </div>


    {{-- ✅ Contenu principal (au-dessus de la frise) --}}
    <div class="relative z-10">
        <h2 class="text-2xl font-bold mb-4 flex items-center gap-2">
            📢 Annonces et Alertes rapides
        </h2>

        {{-- Zone d'affichage des annonces (modifiable via admin) --}}
        <div class="space-y-4">

            {{-- Annonce 1 --}}
            <div class="p-4 bg-white dark:bg-gray-800 rounded shadow-sm">
                <h3 class="text-lg font-semibold dark:text-white">Prochain Concert 
                    <span class="emoji-music inline-block">🎶</span></h3>
                <p class="text-gray-700 dark:text-gray-200">
                    Samedi 15 mai à 20h00 à la salle des fêtes de Hellemmes-Lille.
                </p>
            </div>

            {{-- Annonce 2 --}}
            <div class="p-4 bg-white dark:bg-gray-800 rounded shadow-sm">
                <h3 class="text-lg font-semibold dark:text-white">Répétition générale 📅</h3>
                <p class="text-gray-700 dark:text-gray-200">
                    Vendredi 14 mai à 19h30 précises au local habituel.
                </p>
            </div>

            {{-- Annonce 3 --}}
            <div class="p-4 bg-white dark:bg-gray-800 rounded shadow-sm">
                <h3 class="text-lg font-semibold dark:text-white">Tenue Concert 👔</h3>
                <p class="text-gray-700 dark:text-gray-200">
                    Chemise blanche, pantalon noir, chaussures noires.
                </p>
            </div>

            {{-- Information importante --}}
            <div class="p-4 bg-white dark:bg-gray-800 rounded shadow-sm">
                <h3 class="text-lg font-semibold dark:text-white">⚠️ Information importante :</h3>
                <p class="text-gray-700 dark:text-gray-200">
                    La répétition du 7 mai est annulée exceptionnellement.
                </p>
            </div>
        </div>

        {{-- Bouton admin --}}
        <div class="mt-4 text-right">
            <button class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded">
                Modifier les annonces
            </button>
        </div>
    </div>
    
</section>




{{-- 🎼 Espace d'échange de partitions et 📝 Liste inscrits aux défilés --}}
<section class="max-w-5xl mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        {{-- 🎼 Espace d'échange de partitions (à gauche) --}}
        <div class="bg-blue-100 dark:bg-yellow-800 dark:text-blue-100 p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-4">🎼 Espace d'échange de partitions</h2>
            <p class="text-sm">
                Retrouvez ici les dernières partitions partagées par les musiciens. Partitions Uniquement. Merci 
            </p>

            <ul class="mt-3 space-y-2">
                @foreach($partitions as $partition)
                    <li>🎶 <a href="{{ route('partition.telecharger', $partition->id) }}" class="underline">
                        {{ $partition->titre }}
                    </a></li>
                @endforeach
            
                @if($partitions->isEmpty())
                    <li class="italic text-gray-600 dark:text-gray-300">Aucune partition partagée pour le moment.</li>
                @endif
            </ul>
            

            <div class="mt-4 text-right">
                <button class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-3 rounded">
                    Voir toutes les partitions
                </button>
            </div>
            {{-- 📤 Formulaire d'upload de partitions --}}
<div class="mt-6 bg-gray-100 dark:bg-gray-800 p-4 rounded-lg shadow">
    <h3 class="text-lg font-semibold dark:text-white mb-2">Ajouter une nouvelle partition :</h3>

    {{-- Afficher message d'erreur --}}
    @if ($errors->any())
        <div class="mb-4 text-sm text-red-600 dark:text-red-400">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Formulaire d'envoi --}}
    <form action="{{ route('partitions.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="text" name="titre" placeholder="Titre de la partition" required
                class="w-full rounded border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 dark:text-white shadow-sm p-2">
        </div>

        <div class="mb-3">
            <input type="file" name="partition" required accept=".pdf,.jpg,.jpeg,.png"
                class="w-full rounded border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 dark:text-white shadow-sm p-2">
            <small class="text-xs text-gray-500 dark:text-gray-400">Formats acceptés : PDF, JPG, PNG (max. 3 Mo)</small>
        </div>

        <button type="submit"
            class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
            📤 Envoyer la partition
        </button>
    </form>
    </div>
</div>



 {{-- 🎺 Prochains Défilés --}}
<div class="bg-yellow-100 dark:bg-yellow-800 dark:text-yellow-100 p-6 rounded-lg shadow">
    <h3 class="text-xl font-bold flex items-center gap-2 mb-4">🎺 Inscriptions aux prochains défilés</h3>

    @if ($defiles->count() > 0)
        {{-- 🎖️ Défilé principal --}}
        @php $defile = $defiles[0]; @endphp
        <div class="mb-4">
            <p class="text-lg font-semibold">📣 {{ $defile->titre }}</p>
            <p class="text-sm">📅 {{ $defile->date->format('d/m/Y H:i') }}</p>
            <p class="text-sm">👥 {{ $defile->users_count }} inscrit(s)</p>

            @auth
                <form method="POST" action="{{ route('defiles.inscription', $defile->id) }}">
                    @csrf
                    <button type="submit" class="mt-2 px-3 py-1 bg-green-600 hover:bg-green-700 text-white rounded text-sm">
                        Je m'inscris
                    </button>
                </form>
            @endauth
        </div>

        {{-- 🪶 Deux défilés suivants --}}
        @foreach ($defiles->skip(1)->take(2) as $defile)
            <div class="mb-3">
                <p class="font-semibold">{{ $defile->titre }}</p>
                <p class="text-sm">📅 {{ $defile->date->format('d/m/Y H:i') }} — 👥 {{ $defile->users_count }} inscrit(s)</p>

                @auth
                    <form method="POST" action="{{ route('defiles.inscription', $defile->id) }}">
                        @csrf
                        <button type="submit" class="mt-1 px-3 py-1 bg-green-600 hover:bg-green-700 text-white rounded text-sm">
                            Je m'inscris
                        </button>
                    </form>
                @endauth
            </div>
        @endforeach

        {{-- Voir tout --}}
        <div class="text-right mt-4">
            <a href="{{ route('defiles.index') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-3 rounded">
                Voir toute la liste
            </a>
        </div>
    @else
        <p>Aucun défilé à venir pour l’instant.</p>
    @endif
</div>




                {{-- Prochain anniversaire --}}
        </div>
        <div class="mt-6 bg-yellow-300 dark:bg-yellow-800 dark:text-yellow-100 p-6 rounded-lg shadow">
            <p class="text-lg">
                Le prochain anniversaire dans l'harmonie est :<br>
                @if ($prochainAnniversaire)
                    <strong>{{ $prochainAnniversaire->prenom }}</strong><br>
                    le <strong>{{ $prochainAnniversaire->date_anniversaire->format('d/m/Y') }}</strong>
                @else
                    Aucun anniversaire prochainement.
                @endif
            </p>
        </div>
    </div>
    </section>


{{-- 🎼 Grille des musiciens --}}
<section class="max-w-6xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-10">Liste des Musiciens</h1>

    @foreach ($musiciens as $pupitre => $musiciens)
        <div class="mb-12">
            {{-- 🏷️ Nom du pupitre --}}
            <h2 class="text-2xl font-semibold text-center mb-6">{{ $pupitre }}</h2>

            {{-- 🧱 Grille des musiciens du pupitre --}}
            <div class="max-w-3xl mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach ($musiciens as $musicien)
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                            @if ($musicien->photos->isNotEmpty())
                                <img src="{{ route('photos.private', basename($musicien->photos->first()->path)) }}"
                                    alt="{{ $musicien->prenom }} {{ $musicien->nom }}"
                                    class="w-full h-32 object-cover">
                            @else
                                <img src="{{ asset('images/default.jpg') }}" alt="Photo par défaut"
                                    class="w-full h-32 object-cover">
                            @endif
                            <div class="p-4">
                                <h5 class="text-lg font-semibold dark:text-white">
                                    {{ $musicien->prenom }} {{ $musicien->nom }}
                                </h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
</section>

    

    @if (session('success'))
        <div class="max-w-3xl mx-auto mt-6 mb-4 p-4 bg-green-100 border border-green-300 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

</body>
<script>
    document.documentElement.classList.add('dark');
</script>

</html>
