@extends('layouts.admin')

@section('title', 'Games')

@section('content')
    <div class="card">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">
                @if(isset($game))
                    Edit existing game
                @else
                    Create new game
                @endif
            </h6>
        </div>
        <div class="card-body">

            @if(isset($game))
                {!! Form::model($game, ['url' => ['admin/games', $game->id], 'method' => 'patch', 'enctype'=>'multipart/form-data']) !!}
            @else
                {!! Form::open(['url' => 'admin/games', 'method' => 'store', 'enctype'=>'multipart/form-data']) !!}
            @endif

            <div class="form-group">
                {!! Form::label('title', 'Title: ', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-6">
                    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('genre_id', 'Genre: ', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-6">
                    {!! Form::select('genre_id', $genres, null, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
            </div>
                <div class="form-group">
                    {!! Form::label('rating', 'Rating: ', ['class' => 'col-sm-3']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('rating', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <div class="custom-file">
                        {!! Form::file('image', ['class' => 'form-control']) !!}
                    </div>
                    @if(isset($game->image))
                        <img src="{{url('images/'.$game->image)}}" height="100" class="mt-2">
                    @endif
                    {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-3">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
                </div>
            </div>
            {!! Form::close() !!}
                @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
        </div>
    </div>
@endsection
