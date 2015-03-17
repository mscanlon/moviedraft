@extends('app')

@section('content')
<h1>Search: {{ $searchTerm }}</h1>
    @foreach( $results['movies'] as $movie )
        <p>{{ $movie['title']  }}</p>
    @endforeach
@endsection