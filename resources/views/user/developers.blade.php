@extends('layouts.app')

@section('title', 'Developers')

@section('content')
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <div class="card">
        <div class="table-responsive">
    <table id="personDataTable" class="table table-bordered table-striped">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Website</th>
        </tr>
    </table>
        </div>
    </div>
@section('extra-script')
    {{Html::script('js/components/API_test.js')}}
@endsection
@endsection
