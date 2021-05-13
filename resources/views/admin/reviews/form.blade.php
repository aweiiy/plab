@extends('layouts.admin')

@section('title', 'Reviews')

@section('content')
    <div class="card">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">
                @if(isset($review))
                    Edit existing review
                @else
                    Create new review
                @endif
            </h6>
        </div>
        <div class="card-body">

            {{-- Form::model ir Form::open metodai automatiškai prideda prie formos CSRF žetoną, todėl atskirai jo aprašyti nereikia --}}
            @if(isset($review))
                {{-- Eamo įrašo redagavimo forma --}}
                {!! Form::model($review, ['url' => ['admin/reviews', $review->id], 'method' => 'patch']) !!}
            @else
                {{-- Naujo įrašo įvedimo forma; metodo nereikia nurodyti, nes pagal nutylėjimą jis yra 'post' --}}
                {!! Form::open(['url' => 'admin/reviews']) !!}
            @endif

            <div class="form-group">
                {!! Form::label('user_id', 'User ID: ', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-6">
                    {!! Form::text('user_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
                {!! Form::label('game_id', 'Game ID: ', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-6">
                    {!! Form::text('game_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
                {!! Form::label('rating', 'Rating: ', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-6">
                    {!! Form::text('rating', null, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
                {!! Form::label('title', 'Title: ', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-6">
                    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
                {!! Form::label('review', 'Review: ', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-6">
                    {!! Form::text('review', null, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
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
