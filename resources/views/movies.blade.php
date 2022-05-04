<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
        
</head>

<body>
    <header>
        <h1>Movies</h1>
    </header>
    <main class="container">
        @foreach ($data as $movie)
        <div class="card">
            <div class="vote">
                {{ $movie->vote }} <i class="fa-solid fa-star"></i>
            </div>
            <h2>{{ $movie->original_title }}</h2>
            <ul>
                <li>Release date: {{ date("Y", strtotime($movie->date)) }}</li>
                <li>Nationality: {{ ucwords($movie->nationality) }}</li>
            </ul>
        </div>
        @endforeach
    </main>
</body>

</html>