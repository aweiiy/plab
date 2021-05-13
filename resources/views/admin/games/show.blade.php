@extends('layouts.admin')

@section('title', 'Games')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ url('/admin/games/'.$game->id.'/edit') }}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit game</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td>ID</td>
                        <td>{{ $game->id }}</td>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td>{{ $game->title }}</td>
                    </tr>
                    <tr>
                        <td>Genre</td>
                        <td>{{ $game->genre->title }}</td>
                    </tr>
                    <tr>
                        <td>Rating</td>
                        <td>{{ $game->rating }}</td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td><img src="{{url('images/'.$game->image)}}"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
