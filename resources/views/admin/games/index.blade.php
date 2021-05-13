@extends('layouts.admin')

@section('title', 'Games')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ url('admin/games/create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add game</a>
        </div>
        <div class="card-body">
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            @endif

            <div class="table-responsive">
                <table id="games" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Rating</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($games as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->genre->title }}</td>
                            <td>{{ $item->rating }}</td>
                            <td>
                                <a href="{{ url('admin/games/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                <a href="{{ url('admin/games/'.$item->id) }}" class="btn btn-success btn-sm"><i class="fas fa-eye"></i> View</a>
                                {!! Form::open(['method'=>'DELETE', 'url' => ['admin/games', $item->id], 'style' => 'display:inline']) !!}
                                {!! Form::button('<i class="fas fa-trash-alt"></i> Delete', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @section('extra-script')
                    {{Html::script('js/components/games.js')}}
                @endsection
            </div>
        </div>
    </div>
@endsection
