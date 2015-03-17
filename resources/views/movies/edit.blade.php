@extends('app')

@section('content')
    <h1>Edit Movie: {{ $movie->name }}</h1>
    <form role="form" method="POST" action="/movies/{{$movie->id}}">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $movie->name }}">
        </div>
        <div class="form-group">
            <label for="name">Earnings</label>
            <input type="text" class="form-control" id="earnings" name="earnings" value="{{ $movie->earnings }}">
        </div>
        <div class="form-group">
            <label for="name">Release Date:</label>
            <input type="text" class="form-control" id="release_date" name="release_date" value="{{ $movie->release_date }}">
        </div>
        <div class="form-group">
            <label for="name">Rating:</label>
            <input type="text" class="form-control" id="rating" name="rating" value="{{ $movie->rating }}">
        </div>
        <div class="form-group">
            <label for="name">Summary</label>
            <textarea class="form-control" id="synopsis" name="synopsis" rows="4" >{{ $movie->synopsis }}</textarea>
        </div>
        <div class="form-group">
            <label for="name">Rotten Tomatoes ID:</label>
            <input type="text" class="form-control" id="tomatoes_id" name="tomatoes_id" value="{{ $movie->tomatoes_id }}">
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Update Movie">
            <a href="/movies/{{ $movie->id }}" class="btn btn-link">Cancel</a>
        </div>



    </form>
@endsection