@extends('layouts.base')

@section('PageTitle', 'Home Page')

@section('content')
<h1 id="head-title">Movie Database</h1>

<div class="container flex">
    @foreach($movies as $key => $movie)
        <div class="card">
            <ul>
                <li>Titolo: {{$movie->title}}</li>
                <li>Titolo originale: {{$movie->original_title}}</li>
                <li>Lingua originale: {{$movie->nationality}}</li>
                <li>Data di uscita: {{$movie->date}}</li>
                <li>Valutazione: {{$movie->vote}}</li>
            </ul>
        </div>
    @endforeach
</div>


@endsection