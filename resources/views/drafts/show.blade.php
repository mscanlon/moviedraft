@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>{{ $draft->name }}</h1>
            <p>Bid Allowance: {{ $draft->total_bid }}
            <br>Created on: {{ $draft->created_at }}
            </p>
            <p>
                <a href="/draft/{{ $draft->id }}/edit" class="btn btn-default">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                Settings
                </a>
                <a href="/draft/{{ $draft->id }}/players" class="btn btn-default">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    Players
                </a>
                <a href="/draft/{{ $draft->id }}/movies" class="btn btn-default">
                    <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                    Movies
                </a>
            </p>
        </div>

        <div class="col-md-6">
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Money</th>
                    <th>Total Bids</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $standings as $item )
                    <tr>
                        <th scope="row">{{ $item->name }}</th>
                        <td>{{ $item->money }}</td>
                        <td>{{ $item->bid }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <h2>Movies</h2>
    <table class="table">
    <thead>
    <tr>
        <th>Title</th>
        <th>Money</th>
        <th>Owner</th>
        <th>Bid</th>
    </tr>
    </thead>
    <tbody>
    @foreach( $board as $item )
        <tr>
            <th scope="row">{{ $item->name }}</th>
            <td>{{ $item->money }}</td>
            <td>{{ $item->userName }}</td>
            <td>{{ $item->bid }}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
@endsection