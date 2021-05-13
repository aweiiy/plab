@extends('layouts.app')

@section('title', 'Games')

@section('content')


    <div class="row justify-content-center">
        <div class="col-lg-12">
            <table class="table table-image table-hover">
                <thead>
                <tr>
                    <th scope="col">Games list</th>
                    <th scope="col">Title</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Rating</th>
                </tr>
                </thead>
                <tbody>
                @foreach($games as $item)
                <tr class="clickable" onclick="window.location='{{ url('/games/'.$item->id) }}'">
                    <td class="w-25">
                        <img src="{{ asset('images/'.$item['image']) }}" class="img-fluid img-thumbnail" >
                    </td>
                    <td>{{ $item->title }}</td>
                    <td>{{$item->genre->title}}</td>
                    <td>{{ $item->rating }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection


