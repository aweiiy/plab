<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="games, store, cheap">
    <meta name="description" content="In this game store you can buy various games.">
    <meta name="author" content="">
    <title>{{ config('app.name', 'plab') }}</title>

    <!-- Favicon -->
    <link href="" rel="shortcut icon">
    <!-- Bootstrap -->
    <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('bower_components/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body class="body-wrapper">

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img alt="{{ config('app.name', 'plab') }}" src="{{ asset('img/logo.png') }}" height="100">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}"><i class="fas fa-home"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/games') }}">All games</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/genres') }}">Genres</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/developers') }}">Developers</a>
                            </li>
                        </ul></div>
                    <div>
                    <ul class="navbar-nav ml-auto mt-10">
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link login-button" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link login-button" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                            @role('admin')
                            <li class="nav-item">
                                <a class="nav-link login-button" href="/admin">Admin panel</a>
                            </li>
                            @endrole
                                <li class="nav-item">
                                    <a class="nav-link login-button" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        </ul>
                                    </div>
                            @endguest

                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h1>@yield('title')</h1>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @yield('content')
            </div>
        </div>
    </div>
</section>

<div>
    @include('layouts.footer')
</div>

<!-- JavaScripts -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('bower_components/fontawesome/js/all.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
@yield('extra-script')

</body>

</html>
