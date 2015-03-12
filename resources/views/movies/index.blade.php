@extends('app')

@section('content')
    <h1>Movies</h1>
    @foreach ($movies as $movie)
        <div class="movie">
            <a href="{{ url('movies', $movie->id) }}"><h2>{{ $movie->name }}</h2></a>
            <p>{{ $movie->earnings }}</p>
        </div>    
    @endforeach
@endsection