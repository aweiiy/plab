@extends('layouts.admin')

@section('title', 'Genres')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ url('/admin/genres/'.$genre->id.'/edit') }}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit genre</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td>ID</td>
                        <td>Title</td>
                    </tr>
                    <tr>
                        <td>{{ $genre->id }}</td>
                        <td>{{ $genre->title }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
