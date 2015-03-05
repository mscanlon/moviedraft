@extends('app')

@section('content')
    <h1>{{ $movie->name }}</h1>
    <p>{{ $movie->money }}</p>
@endsection