@extends('app')

@section('content')
    <h1>Movies</h1>
    @foreach ($movies as $movie)
        <div class="movie">
            <a href="{{ url('movies', $movie->id) }}"><h2>{{ $movie->name }}</h2></a>
            <p>{{ $movie->tomatoes_id }}</p>
        </div>    
    @endforeach
@endsection