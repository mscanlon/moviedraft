@extends('app')

@section('content')
    <h1>{{ $movie->name }}</h1>
    <p>Earnings: {{ $movie->earnings }}</p>
    <p>Release Date: {{ $movie->release_date }}</p>
    <p>Rating: {{ $movie->rating }}</p>
    <p>Runtime: {{ $movie->runtime }}</p>
    <p>Plot Summary:<br>{{ $movie->synopsis }}</p>
    <p><a href="/movies/{{ $movie->id }}/edit" class="btn btn-primary">Edit Movie</a></p>
@endsection