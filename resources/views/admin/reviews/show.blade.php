@extends('layouts.admin')

@section('title', 'Reviews')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ url('/admin/reviews/'.$review->id.'/edit') }}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit review</a>
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
                        <td>{{ $review->id }}</td>
                        <td>{{ $review->title }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
