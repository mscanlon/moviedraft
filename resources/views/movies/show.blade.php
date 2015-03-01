@extends('app')

@section('content')
<div class="container">
    <h1>{{ $movie->name }}</h1>
    <p>{{ $movie->money }}</p>
</div>
@endsection