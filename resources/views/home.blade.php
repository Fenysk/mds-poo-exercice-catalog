<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->    
    <style>

        body {
            background-color: rgb(200,200,210) !important;
            font-family: Arial;
        }

        .container {
            margin: 5%;
        }

        .wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 24px;
        }

        div {
            background-color: gray;
            padding: 16px;
            border-radius: 32px;
            display: flex;
            flex-flow: column;
            justify-content: space-between;
        }

        img {
            border-radius: 16px;
        }

        div p {
            color: white;
            font-weight: bold;
            font-family: Arial;
            text-align: center
        }

        h1 {
            color: white;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>{{ config('app.name') }}</h1>

        <div class="wrapper">
            @foreach ($movies as $movie)
            <div>
                <a href="/movie/{{ $movie->id }}">
                    <img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
