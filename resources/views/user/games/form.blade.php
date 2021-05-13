@extends('layouts.app')

@section('title', 'Reviews')

@section('content')
    @if (Auth::check())
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
                {!! Form::model($review, ['url' => ['games/'.$game->id, $review->id], 'method' => 'patch']) !!}

            @endif
            <div class="form-group">
                {!! Form::open(['url' => 'games/'.$game->id]) !!}
                {{ Form::hidden('user_id', $auth->id) }}
                {{ Form::hidden('game_id', $game->id) }}
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
                    {!! Form::submit('Send', ['class' => 'btn btn-primary form-control']) !!}
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
    @endif
    @guest
    <div class="h-100 row align-items-center">
        <div class="col">
           <p style=" text-align: center; font-size: large">You are not logged in!</p>
            <p style=" text-align: center; font-size: large"><a href="{{ route('login') }}">Log in to write a review</a></p>
        </div>
    </div>
    @endguest
@endsection
