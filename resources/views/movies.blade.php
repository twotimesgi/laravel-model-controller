<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body {
            font-family: 'Nunito', sans-serif;
        }

        h1 {
            text-align: center;
            margin: 50px;
        }

        .card h2{
            font-size: 1.3rem;
            text-align: center;
            margin-top: 30px;
        }

        .container {
            width: 80%;
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            justify-content: center;
            margin: 0 auto;
        }

        .card {
            width: 200px;
            border-radius: 30px;
            background: #e0e0e0;
            box-shadow: 15px 15px 30px #bebebe,
                -15px -15px 30px #ffffff;
            position: relative;
            padding: 20px;
        }

        .vote {
            position: absolute;
            top: -5px;
            right: 30px;
            width: 60px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #1f1f1f;
            border-radius: 2rem;
            color: white;
        }

        .vote i{
            font-size: 0.8rem;
        }

        .card ul{
            list-style: none;
            margin-top: 20px;
            text-align: center;
        }
    </style>
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
                <li>Nationality: {{ date("Y", strtotime($movie->date)) }}</li>
            </ul>
        </div>
        @endforeach
    </main>
</body>

</html>