<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        $movies = Movie::all();

        dump($movies);

        return view('home');
    }
}
