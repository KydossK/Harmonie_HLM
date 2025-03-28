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
    x-data="{ dark: false }"
    x-init="dark = localStorage.getItem('theme') === 'dark'; if (dark) document.documentElement.classList.add('dark')"
    class="bg-white text-gray-800 dark:bg-gray-900 dark:text-gray-100">

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

        {{-- ✅ Bloc informations + boutons à droite --}}
        <div class="bg-blue-350 dark:bg-blue-900 dark:text-blue-100 p-6 rounded-lg shadow">
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
                        @click="dark = !dark; dark ? document.documentElement.classList.add('dark') : document.documentElement.classList.remove('dark'); localStorage.setItem('theme', dark ? 'dark' : 'light')"
                        class="text-sm bg-gray-200 hover:bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 text-gray-800 dark:text-gray-200 font-semibold py-1 px-3 rounded transition"
                        x-text="dark ? '🌞 Mode clair' : '🌙 Mode sombre'">
                    </button>
                </div>
            </div>

{{-- 📢 Annonces et Alertes rapides --}}
<section class="max-w-4xl mx-auto my-8 p-6 bg-red-50 dark:bg-yellow-800 dark:text-yellow-100 rounded-lg shadow">

    <h2 class="text-2xl font-bold mb-4 flex items-center gap-2">
        📢 Annonces et Alertes rapides
    </h2>

    {{-- Zone d'affichage des annonces (modifiable via admin) --}}
    <div class="space-y-4">

        {{-- Annonce exemple 1 --}}
        <div class="p-4 bg-white dark:bg-gray-800 rounded shadow-sm">
            <h3 class="text-lg font-semibold dark:text-white">Prochain Concert <span class="emoji-music inline-block">🎶</span> </h3>
            <p class="text-gray-700 dark:text-gray-200">Samedi 15 mai à 20h00 à la salle des fêtes de Hellemmes-Lille.</p>
        </div>

        {{-- Annonce exemple 2 --}}
        <div class="p-4 bg-white dark:bg-gray-800 rounded shadow-sm">
            <h3 class="text-lg font-semibold dark:text-white">Répétition générale 📅</h3>
            <p class="text-gray-700 dark:text-gray-200">Vendredi 14 mai à 19h30 précises au local habituel.</p>
        </div>

        {{-- Annonce exemple 3 --}}
        <div class="p-4 bg-white dark:bg-gray-800 rounded shadow-sm">
            <h3 class="text-lg font-semibold dark:text-white">Tenue Concert 👔</h3>
            <p class="text-gray-700 dark:text-gray-200">Chemise blanche, pantalon noir, chaussures noires.</p>
        </div>

        {{-- Informations diverses / Alertes --}}
        <div class="p-4 bg-white dark:bg-gray-800 rounded shadow-sm">
            <h3 class="text-lg font-semibold dark:text-white">⚠️ Information importante :</h3>
            <p class="text-gray-700 dark:text-gray-200">La répétition du 7 mai est annulée exceptionnellement.</p>
        </div>

    </div>

    {{-- Bouton pour gérer/modifier les annonces (option admin) --}}
    <div class="mt-4 text-right">
        <button class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded">
            Modifier les annonces
        </button>
    </div>
</section>

            
        </div>

        <div class="bg-yellow-300 dark:bg-yellow-800 dark:text-yellow-100 p-6 rounded-lg shadow">
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
    </section>

    <section class="max-w-6xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-10">Liste des Musiciens</h1>
    
        @foreach ($musiciens as $instrument => $musiciensGroupe)
            <div class="mb-12">
                <h2 class="text-2xl font-semibold text-center mb-6">{{ $instrument }}</h2>
    
                {{-- Grille des musiciens--}}
                <div class="max-w-3xl mx-auto">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        @foreach ($musiciensGroupe as $musicien)
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                                @if ($musicien->photos->isNotEmpty())
                                    <img src="{{ route('photos.private', basename($musicien->photos->first()->path)) }}"
                                        alt="{{ $musicien->prenom }} {{ $musicien->nom }}" class="w-full h-32 object-cover">
                                @else
                                    <img src="{{ asset('images/default.jpg') }}" alt="Photo par défaut"
                                        class="w-full h-32 object-cover">
                                @endif
                                <div class="p-4">
                                    <h5 class="text-lg font-semibold dark:text-white">
                                        {{ $musicien->prenom }} {{ $musicien->nom }}
                                    </h5>
                                    <p class="text-sm text-gray-600 dark:text-gray-300">
                                        Instrument : {{ $musicien->libelle_instrument }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
    
                <hr class="my-10 border-gray-300 dark:border-gray-700">
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
