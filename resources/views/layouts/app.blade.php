<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Clocout') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleabout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/privacy.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sendonmail.css') }}" rel="stylesheet">
    <style>
        .navbar-fixed-bottom .navbar-inner .container-fluid {
            height: 70px;
        }
    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/eng120x120.png') }}" width="35px" height="35px" alt="CloCout">
                        {{--{{ config('app.name', 'Clocout') }}--}}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">

                    </ul>

                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        @guest
                            <li><a href="{{ url('/home') }}">Home</a></li>
                            {{--<li><a href="{{ url('/home') }}">Recent Events</a></li>--}}
                            <li><a href="{{ url('/about') }}">About Us</a></li>
                            <li><a href="{{ url('/privacy') }}">Privacy</a></li>
                            <li><a href="{{ url('/contactUs') }}">Contact Us</a></li>
                            <li><a href="login.php">Install app</a></li>
                            <li><a href="{{ url('/welcomeJap') }}">中文</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                                <li><a href="{{ url('/home') }}">Home</a></li>
                                {{--<li><a href="{{ url('/home') }}">Recent Events</a></li>--}}
                                <li><a href="{{ url('/about') }}">About Us</a></li>
                                <li><a href="{{ url('/privacy') }}">Privacy</a></li>
                                <li><a href="{{ url('/contactUs') }}">Contact Us</a></li>
                                <li><a href="login.php">Install app</a></li>
                                <li><a href="{{ url('/welcomeJap') }}">中文</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
