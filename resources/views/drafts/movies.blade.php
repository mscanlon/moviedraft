@extends('app')

@section('content')
    <p>
        <a href="/draft/{{ $draft->id }}" class="btn btn-link"><- Back to Draft Board</a>
    </p>
    <div class="row">
        <div class="col-md-6">
           <h2>Movies in Draft</h2>
            <table class="table">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $moviesInDraft as $movie )
                    <tr>
                        <th scope="row">{{ $movie->name }}</th>
                        <td><a href="/draft/{{ $draft->id }}/removeMovie/{{ $movie->id }}" class="btn btn-xs btn-danger">Remove</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-6">
            <h2>Add Movies</h2>
            <form class="form-horizontal" role="form" method="POST" action="/draft/{{ $draft->id }}/movies">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <p><button type="submit" class="btn btn-primary"><- Add Movie(s)</button></p>
                <table class="table">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Title</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $movies as $movie )
                        <tr>
                            <th scope="row">
                                <input type="checkbox" name="movies[]" value="{{ $movie->id }}">
                            </th>
                            <td>{{ $movie->name }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <p><button type="submit" class="btn btn-primary"><- Add Movie(s)</button></p>
            </form>
        </div>
    </div>


@endsection