<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $movies = Movie::all();

        //$movies = Movie::where('vote', '>=', 8)->get();

        /*$movies = Movie::where('vote', '>=', 9)
            ->orderBy('title', 'asc')
            ->limit(2)
            ->get();
        */

        return view('home', compact('movies'));
    }
}
