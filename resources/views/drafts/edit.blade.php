@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Draft Settings: {{ $draft->name }}</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="/draft/{{$draft->id}}">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Draft Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ $draft->name }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Bid Allowance</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="total_bid" value="{{ $draft->total_bid }}">
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Update Draft</button>

                                <a class="btn btn-link" href="/draft/{{ $draft->id }}">Cancel</a>

                            </div>
                        </div>
                    </form>


                    <form class="form-horizontal" role="form" method="POST" action="/draft/{{$draft->id}}">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <button type="submit" class="btn btn-danger">Delete Draft</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection