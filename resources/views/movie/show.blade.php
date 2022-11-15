<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$movie->primaryTitle}}</title>
</head>
<body>

    <style>
        body {
            background-color: rgb(200,200,210) !important;
            font-family: Arial;
        }

        .movie {
            background-color: white;
            text-align: center;
            margin: 3% 15%;
            padding: 24px;
            border-radius: 24px;
        }

        img {
            border-radius: 16px;
        }

    </style>

    <div class="page">
        <div class="movie">
            <img src="{{$movie->poster}}"/>
            <h1>{{$movie->primaryTitle}}</h1>
            <p class="year">Date de sortie : {{$movie->startYear}}</p>
            <p>Durée : {{$movie->runtimeMinutes}} minutes</p>
            <p>{{$movie->plot}}</p>
            <p>{{$movie->averageRating}}/10 - {{$movie->numVotes}} avis</p>
        </div>
    </div>
</body>
</html>
