@extends('layouts.base')

@section('PageTitle', 'Home Page')

@section('content')
<h1 id="head-title">Movie Database</h1>

<div class="container flex">
    @foreach($movies as $key => $movie)
        <div class="card">
            <ul>
                <li><span>Titolo:</span> {{$movie->title}}</li>
                <li><span>Titolo originale:</span> {{$movie->original_title}}</li>
                <li><span>Lingua originale:</span> {{$movie->nationality}}</li>
                <li><span>Data di uscita:</span> {{$movie->date}}</li>
                <li><span>Valutazione:</span> {{$movie->vote}}</li>
            </ul>
        </div>
    @endforeach
</div>


@endsection