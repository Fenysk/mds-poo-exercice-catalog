<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste de genres</title>
</head>
<body>

    <style>

        

        body * {
            font-family: Arial;
            text-decoration: none;
        }

        nav {
            margin: 0 10%;
            display: flex;
        }

        nav a {
            margin: 0 16px;
            padding: 6px;
            border-radius: 4px;
            background-color: orange;
            color: black;
        }

        ul {
            display: flex;
            flex-flow: row wrap;
            margin-top: 5%;
        }

        li {
            list-style-type: none;
            margin: 16px;
        }

        li a {
            background-color: green;
            color: white;
            padding: 12px;
            border-radius: 6px;
        }

    </style>

    <div>
        <h1>Liste des genres</h1>
    
        <nav>
            <a href="/movies">Accueil</a>
            <a href="/movies?order_by=startYear&order=asc">Trier par années</a>
            <a href="/movies?order_by=averageRating&order=desc">Trier par notes</a>
            <a href="/movie/random">Film aléatoire</a>
            <a href="/genres">Tous les genres</a>
        </nav>

        <ul>
            @foreach ( $genres as $genre )
                <li>
                    <a href='/movies?genre={{ $genre->label }}'>
                        {{ $genre->label }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>