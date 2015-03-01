@extends('app')

@section('content')
<div class="container">
    <h1>Movies</h1>
    @foreach ($movies as $movie)
        <div class="movie">
            <a href="{{ url('movies', $movie->id) }}"><h2>{{ $movie->name }}</h2></a>
            <p>{{ $movie->money }}</p>
        </div>    
    @endforeach
</div>
@endsection