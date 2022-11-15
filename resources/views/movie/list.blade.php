<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste de films</title>
</head>
<body>
    <style>

        body {
            background-color: rgb(200,200,210) !important;
        }

        .list {
            margin: 32px 5%;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 24px;
        }

        .movie {
            background-color: gray;
            padding: 16px;
            border-radius: 32px;
            display: flex;
            flex-flow: column;
            justify-content: space-between;
        }

        a {
            text-decoration: none;
            transition: all 300ms ease;
        }

        a:hover {
            transform: scale(1.05);
        }

        .movie img {
            border-radius: 16px 16px 0 0;
        }

        .movie p {
            color: white;
            font-weight: bold;
            font-family: Arial;
            text-align: center
        }

        .movie .title {
            font-size: 20px;
        }

        .pagination {
            display: flex;
            justify-content: center;
        }

        .pagination a {
            margin: 16px;
            background-color: red;
            color: white;
            padding: 8px;
            border-radius: 6px;
            font-size: 24px;
            font-family: Arial;
            text-decoration: none;
        }

    </style>

    <div class="page">
        <div class="pagination">
            @if ($page != 0)
                <a href="{{$movies->appends(['order_by' => 'startYear'])->previousPageUrl()}}">< Page précédente</a>
            @endif
            <a href="{{$movies->appends(request()->query())->nextPageUrl()}}">Page suivante ></a>
        </div>

        <div class="list">
            @foreach ($movies as $movie)
                <a class="movie" href="/movie/{{ $movie->id }}">
                    <img src="{{$movie->poster}}"/> 
                    <div>
                        <p class="title">{{$movie->primaryTitle}}</p>
                        <p class="date">{{$movie->startYear}}</p>
                        <p class="note">Note : {{ $movie->averageRating }}/10</p>
                        <p class="genre">Genre : {{ $movie->genre }}</p>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="pagination">
            @if ($page != 0)
                <a href="{{$movies->appends(['order_by' => 'startYear'])->previousPageUrl()}}">< Page précédente</a>
            @endif
            <a href="{{$movies->appends(request()->query())->nextPageUrl()}}">Page suivante ></a>
        </div>
    </div>
</body>
</html>