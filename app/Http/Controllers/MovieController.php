<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show($id) {
        $movie = Movie::find($id);

        return view('movie.show', ['movie' => $movie]);
    }

    public function list(Request $request) {
        $page = $request->query('page');
        $orderBy = $request->query('order_by');
        $order = $request->query('order', 'asc');
        $genre = $request->query('genre');

        $query_movie = Movie::query();
    
        if ($orderBy == "startYear" || $orderBy == "primaryTitle" || $orderBy == "averageRating") {
            $query_movie->orderBy($orderBy, $order);
        }
        
        if ($genre) {
            $query_movie->whereHas('genres', function(Builder $query) use ($genre) {    
                $query->where('label', $genre);
            });
        }
        
        $movies = $query_movie->paginate(20);

        return view('movie.list', [
            'movies' => $movies,
            'page' => $page,
            'orderBy' => $orderBy,
            'order' => $order,
            'genre' => $genre
        ]);
    }

    public function random() {
        $movie = Movie::inRandomOrder()->first();

        return view('movie.show', ['movie' => $movie]);
    }
    
}
