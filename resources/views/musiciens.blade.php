<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Musiciens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/musiciens.css', 'resources/js/musiciens.js'])
</head>

<body>

    <section class="musiciens-container-info">
        <div class="musiciens-info">
            <h2>Informations pour les Musiciens :</h2>
            <ul>
                <li><strong>Date et heure du prochain concert :</strong> </li>
                <li><strong>Date et heure de la répétition générale :</strong> </li> 
                <li><strong>Tenue pour le prochain concert :</strong> </li>
            </ul>
        </div>
        
        <div class="musiciens-anniversaire">
            <p>
                Le prochain anniversaire dans l'harmonie est :
                @if ($prochainAnniversaire)
                  <strong>  {{ $prochainAnniversaire->prenom }} </strong> <br>
                    le <strong> {{ $prochainAnniversaire->date_anniversaire->format('d/m/Y') }} </strong>
                @else
                    Aucun anniversaire prochainement.
                @endif
            </p>
        </div>
    </section>
    

    <section>
        
            <h1 class="text-center trombi">Liste des Musiciens</h1> <br>
            <div class="container trombi">
    <br>
            @foreach ($musiciens as $instrument => $musiciensGroupe)
                <div class="instrument-group">
                    <!-- Titre pour chaque groupe d'instruments -->
                    <h2 class="text-center">{{ $instrument }}</h2>
                    <div class="row">
                        @foreach ($musiciensGroupe as $musicien)
                            <div class="col-trombi">
                                <div class="card musicien-card">
                                    @if ($musicien->photos->isNotEmpty())
                                    <img src="{{ route('photos.private', basename($musicien->photos->first()->path)) }}" alt="{{ $musicien->prenom }} {{ $musicien->nom }}" class="card-img-top">
                                @else
                                    <img src="{{ asset('images/default.jpg') }}" alt="Photo par défaut" class="card-img-top">
                                @endif                                
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $musicien->prenom }} {{ $musicien->nom }}</h5>
                                        <p class="card-text">Instrument : {{ $musicien->libelle_instrument }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <hr> <!-- Séparation entre les groupes -->
                </div>
            @endforeach
        </div>
    </section>
    
    



    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Déconnexion</button>
    </form>
    


</body>

</html>
