@extends('app')

@section('content')
<p>
    <a href="/draft/{{ $draft->id }}" class="btn btn-link"><- Back to Draft Board</a>
</p>
<h2>{{ $draft->name }} Players</h2>

<p>
    <a href="/draft/{{ $draft->id }}/quit" class="btn btn-danger"> Quit Draft</a>
</p>

@foreach ($users as $user)
    <div>
        <h3>{{ $user->name }}</h3>
    </div>
@endforeach


<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Add a Player</h3>
    </div>
    <div class="panel-body">
        @include('partials.formErrors')
        <form class="form-horizontal" role="form" method="POST" action="/draft/{{ $draft->id }}/players">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label class="control-label">email</label>
                <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
</div>

@endsection