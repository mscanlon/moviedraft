@extends('app')

@section('content')
<h1>My Drafts</h1>
@foreach ($drafts as $draft)
    <div class="draft">
        <a href="{{ url('draft', $draft->pivot->draft_id) }}"><h2>{{ $draft->name }}</h2></a>
    </div>
@endforeach
<p><a href="{{ url('draft','create') }}"><button type="button" class="btn btn-primary">Create a New Draft</button></a></p>
@endsection