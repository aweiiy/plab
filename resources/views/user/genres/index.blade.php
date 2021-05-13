@extends('layouts.app')

@section('title', 'Genres')

@section('content')
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Genre</th>
            </tr>
            </thead>
            <tbody>
            @foreach($genres as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

