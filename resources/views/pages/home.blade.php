@extends('layouts.app')

@section('title', 'PLAB')

@section('content')

    <section class="bg-position-top-center bg-repeat-0 pt-5 pb-5 py-md-10" style="background-image: url('/img/mainpageback.png');">
        <div class="container pt-4 mb-3 mb-lg-0">
            <div class="row">
                <div>
                    <h5 class="text-light fw-normal">New game reviewing site - PLAB</h5>
                    <h1 style="color: white">Review games like never before</h1>
                    <div class="d-flex align-items-center mb-5"><a class="btn btn-primary me-grid-gutter" href="/games"><i class="ci-cart fs-lg me-2"></i>Browse games</a></div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section>
        <div>
        <div class="container pt-4 mb-3 mb-lg-0" style="text-align: center">
            <p style="font-size: 20px">Browse the latest game reviews</p>
        </div>
        </div>
    </section>
@endsection

@section('layouts.footer')
