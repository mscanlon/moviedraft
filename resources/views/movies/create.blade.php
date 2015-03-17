@extends('app')

@section('content')
    <h1>Add a Movie</h1>
    <form role="form" method="POST" action="/movies/search" class="form-inline">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label class="sr-only" for="exampleInputAmount">Search for Movie</label>
            <div class="input-group">
                <input type="text" class="form-control" id="search" name="search" placeholder="Search for Movie">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

@endsection