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


    
    <div class="container mt-5">
        <h1 class="text-center mb-4">Liste des Musiciens</h1>
        <div class="row">
            @foreach ($musiciens as $musicien)
                <div class="col-md-4">
                    <div class="card musicien-card">
                        <img src="{{ asset('images/' . $musicien['photo']) }}" alt="{{ $musicien['name'] }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $musicien['name'] }}</h5>
                            <p class="card-text">Instrument : {{ $musicien['instrument'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Déconnexion</button>
    </form>
    


</body>

</html>
