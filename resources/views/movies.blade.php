@extends('layouts.main')

@section('content')

    <li>Movies</li>
    <br>
    @foreach ($movies as $movie)
        <div>
            <div>Film name: {{ $movie->title }}</div>
            <div>Release date: {{ $movie->date }}</div>
            <div>Vote: {{ $movie->vote }}</div>
            <div>Nationality: {{ $movie->nationality }}</div>
            <hr>
        </div>
    @endforeach

@endsection

