@extends('layouts.app')


@section('content')
    <div class="card">
        <div class="card-header">
            @role('admin') <a href="{{ url('/admin/games/'.$game->id.'/edit') }}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit game</a>@endrole
        </div>
        <section class="bg-position-center bg-repeat-0 pt-600 pb-5 py-md-10" style="height: 600px;background-size: cover; background-image: url({{url('images/'.$game->image)}});">

        </section>
        <div></div>
    </div>
    <section class="container pt-2 pt-md-5 bg-gray-light">
        <h2 class="text-center mb-5" style="font-size: 200%">{{ $game->title }}</h2>
        <div>
            <p style="font-size: 20px;">Genre: {{$game->genre->title}}</p>
            <p style="color: #00cc00; font-size: 40px;" >RATING: {{ $game->rating }}</p>
        </div>
        <br>
    </section>
    @auth
    <section class="container pt-2 pt-md-5 bg-black">
        <h2 class="text-center mb-5" style="font-size: 200%">Reviews</h2>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td>User</td>
                        <td>Rating</td>
                        <td>In short</td>
                        <td>Review</td>
                    </tr>
                    @foreach($reviews as $review)
                        @if($game->id == $review->game_id)
                            @foreach($users as $user)
                                @if($user->id == $review->user_id)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$review->rating}}</td>
                                        <td>{{$review->title}}</td>
                                        <td>{{$review->review}}</td>
                                        @auth
                                            @if($auth->id == $user->id)
                                               <td >{!! Form::open(['method'=>'DELETE', 'url' => ['games', $review->id], 'style' => 'display:inline']) !!}
                                                   {!! Form::button('<i class="fas fa-trash-alt"></i> Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit']) !!}
                                                   {!! Form::close() !!}</td>
                                                @endif
                                        @endauth
                                    </tr>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col text-center"><a href="{{ url('/games/'.$game->id.'/edit') }}" class="btn btn-primary"><i class="fas fa-edit"></i> Write a review</a></div>
    </section>
    @endauth
    @guest
            <p style=" text-align: center; font-size: large"><a href="{{ route('login') }}">Log in to see reviews</a></p>
    @endguest

@endsection
