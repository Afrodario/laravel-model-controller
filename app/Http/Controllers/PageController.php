<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $movies = Movie::all()
            ->sortBy('title');
        

        //$movies = Movie::where('vote', '>=', 8)->get();

        /*$movies = Movie::where('vote', '>=', 9)
            ->orderBy('title', 'asc')
            ->limit(2)
            ->get();
        */

        /*
        $movie = new Movie();
        $movie->title = 'V per Vendetta';
        $movie->original_title = 'V for Vendetta';
        $movie->nationality = 'american';
        $movie->date = null;
        $movie->vote = 9;
        $movie->save();
        */

        return view('home', compact('movies'));
    }
}
