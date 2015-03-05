@extends('app')

@section('content')
<h1>My Drafts</h1>
@foreach ($drafts as $draft)
    <div class="draft">
        <a href="{{ url('draft', $draft->pivot->draft_id) }}"><h2>{{ $draft->name }}</h2></a>
    </div>
@endforeach
@endsection