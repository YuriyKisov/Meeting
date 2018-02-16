<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/twbs-bootstrap-2c2ac33/dist/css/bootstrap.css') }}" />

        <title>Clocout</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styleabout.css') }}" rel="stylesheet">
        <link href="{{ asset('css/sendonmail.css') }}" rel="stylesheet">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

    <style>
        body {
            background-color: lightblue;
        }
        div.customer_reviews{
            float: left;
            width: 100% !important;
            height: 50%;
        }
        #my_slider {
            width:100%;
            height:500px;
            overflow: hidden;
            position:relative;
            list-style: none outside none;
            padding:0;
            margin:0;
        }
        #my_slider li {
            top: 0px;
            left: 0px;
            display:none;
            height: 100%;
        }
        #my_slider li img{
            width: 100%;
            height: 100%;
        }
        #my_slider li:first-child {
            display:block;
        }
        .events {
            width: 100% !important;
        }
        .events .row {
            width: 100%;
        }
        .events .row .category {
            display: inline-block;
            width: 49%;
            padding: 50px;
            /*height: 150px;*/
            box-sizing: border-box;
        }
        .events .row .category div {
            display:block;
            width: 400px;
            height:400px;
            margin: 0 auto;
            box-sizing: border-box;
            border-radius: 50%;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .events .row .category .outdoor {
              background-image: url("{{ asset('images/outdoor.jpg') }}");
          }
        .events .row .category .sport {
            background-image: url("{{ asset('images/sport.jpg') }}");
        }
        .events .row .category .party {
            background-image: url("{{ asset('images/party.jpg') }}");
        }
        .events .row .category .picnic {
            background-image: url("{{ asset('images/picnic.jpg') }}");
        }
        .events .row .category .shopping {
            background-image: url("{{ asset('images/shopping.jpg') }}");
        }
        .events .row .category .lunch {
            background-image: url("{{ asset('images/lunch.jpg') }}");
        }
        .events .row .category .dinner {
            background-image: url("{{ asset('images/dinner.jpg') }}");
        }
        .events .row .category .technology {
            background-image: url("{{ asset('images/technology.jpg') }}");
        }
        .events .row .category .festival {
            background-image: url("{{ asset('images/festival.jpg') }}");
        }
        .events .row .category .enterteinment {
            background-image: url("{{ asset('images/enterteinment.jpg') }}");
        }
        .events .row .category .practise {
            background-image: url("{{ asset('images/practice.jpg') }}");
        }
        .events .row .category .business {
            background-image: url("{{ asset('images/business.jpg') }}");
        }
        .events .row .category .culture {
            background-image: url("{{ asset('images/culture.jpg') }}");
        }
        .events .row .category .others {
            background-image: url("{{ asset('images/others.jpg') }}");
        }
        .events .row .category a {
            display: block;
            font-size: 30px;
            font-family: "Helvetica Neue", sans-serif;
            color: black;
            line-height: 50px;
            text-align: center;
            margin-top: 30px;
        }
        .events .row .category a:hover {
            color: orange;
            text-decoration: none;
        }
        @media (max-width: 1000px) {
            #app .navbar .container .navbar-collapse {
                border: none;
                background-color: black;
                opacity: 0.6;
            }

            #app .navbar .container .navbar-collapse .navbar-nav li a {
                color: white;
                line-height: 35px;
            }

            #app .navbar .container .navbar-collapse .navbar-nav li a:hover {
                color: orange;
                line-height: 35px;
            }

            #app .navbar .container .navbar-collapse .navbar-nav li:hover {
                background-color: grey;
                opacity: 1.0;
            }

            .events .row .category div {
                width: 150px;
                height: 150px;
            }

            .events .row .category a {
                font-size: 20px;
                margin-top: 15px;
            }

            .events .row .category {
                padding: 20px;
            }
        }
    </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
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
                                <a class="navbar-brand" href="{{ url('/') }}" >
                                    <img src="{{ asset('images/eng120x120.png') }}" width="35px" height="35px" alt="CloCout">
                                </a>
                            </div>

                            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                                <!-- Left Side Of Navbar -->
                                <ul class="nav navbar-nav navbar-right">

                                </ul>

                                <!-- Right Side Of Navbar -->
                                <ul class="nav navbar-nav">
                                    @guest
                                        <li><a href="{{ url('/home') }}">Home</a></li>
                                        <li><a href="{{ url('/home') }}">Recent Events</a></li>
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
                                            <li><a href="{{ url('/home') }}">Recent Events</a></li>
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
                </div>
            @endif
                {{--<div class="container-fluid">--}}
                    {{--<div class="container-fluid video">--}}
                        {{--<video width="100%" height="400" autoplay="autoplay" loop="loop" poster='{{ asset('images/eng120x120.png') }}'>--}}
                            {{--<source src="{{ asset('videos/Chinese.mp4') }}" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>--}}
                    {{--</div>--}}
                </div>





    <div class="customer_reviews">
        <ul id="my_slider">

            <li>
                <img src='{{ asset('images/anastasia-petrova-193818.jpg') }}'>
              
            </li>

            <li>
                <img src='{{ asset('images/arol-vinolas-133503.jpg') }}'>

            </li>

            <li>
                <img src='{{ asset('images/bambi-corro-278210.jpg') }}'>

            </li>
            
            <li>
                <img src='{{ asset('images/gene-taylor-373301.jpg') }}'>

            </li>
            
            <li>
                <img src='{{ asset('images/glen-jackson-242973.jpg') }}'>

            </li>
            <li>
                <img src='{{ asset('images/kalen-emsley-94118.jpg') }}'>

            </li>
            <li>
                <img src='{{ asset('images/raj-eiamworakul-475040.jpg') }}'>

            </li>
            <li>
                <img src='{{ asset('images/steve-long-402409.jpg') }}'>

            </li>

        </ul>
    </div>
    <div class="container-fluid events">
        <div class="row">
            <div class=".col-xs-6 .col-sm-6 .col-md-6 category">
                <div class="outdoor"></div>
                <a href="{{ url('/Events') }}">Outdoor Organize |  Attend</a>

            </div>
            <div class=".col-xs-6 .col-sm-6 .col-md-6 category">
                <div class="sport"></div>
                <a href="{{ url('/Events') }}">Sport Organize |  Attend</a>
            </div>
        </div>
            <div class="row">
                <div class=".col-xs-6 .col-sm-6 .col-md-6 category ">
                    <div class="party"></div>
                    <a href="{{ url('/Events') }}">Party Organize |  Attend</a>
                </div>
                <div class=".col-xs-6 .col-sm-6 .col-md-6 category">
                    <div class="picnic"></div>
                    <a href="{{ url('/Events') }}">Picnic Organize |  Attend</a>
                </div>
            </div>
        <div class="row">
            <div class=".col-xs-6 .col-sm-6 .col-md-6 category">
                <div class="shopping"></div>
                <a href="{{ url('/Events') }}">Shopping Organize |  Attend</a>
            </div>
            <div class=".col-xs-6 .col-sm-6 .col-md-6 category">
                <div class="lunch"></div>
                <a href="{{ url('/Events') }}">Lunch Organize |  Attend</a>
            </div>
        </div>

        <div class="row">
            <div class=".col-xs-6 .col-sm-6 .col-md-6 category">
                <div class="dinner"></div>
                <a href="{{ url('/Events') }}">Dinner Organize |  Attend</a>
            </div>
            <div class=".col-xs-6 .col-sm-6 .col-md-6 category">
                <div class="technology"></div>
                <a href="{{ url('/Events') }}">IT Technology Organize |  Attend</a>
            </div>
        </div>
        <div class="row">
            <div class=".col-xs-6 .col-sm-6 .col-md-6 category">
                <div class="festival"></div>
                <a href="{{ url('/Events') }}">Festival Organize |  Attend</a>
            </div>
            <div class=".col-xs-6 .col-sm-6 .col-md-6 category">
                <div class="enterteinment"></div>
                <a href="{{ url('/Events') }}">Enterteinment Organize |  Attend</a>
            </div>
        </div>
        <div class="row">
            <div class=".col-xs-6 .col-sm-6 .col-md-6 category">
                <div class="practise"></div>
                <a href="{{ url('/Events') }}">Practice Organize |  Attend</a>
            </div>
            <div class=".col-xs-6 .col-sm-6 .col-md-6 category">
                <div class="business"></div>
                <a href="{{ url('/Events') }}">Business Organize |  Attend</a>
            </div>
        </div>
        <div class="row">
            <div class=".col-xs-6 .col-sm-6 .col-md-6 category">
                <div class="culture"></div>
                <a href="{{ url('/Events') }}">Culture Organize |  Attend</a>
            </div>
            <div class=".col-xs-6 .col-sm-6 .col-md-6 category">
                <div class="others"></div>
                <a href="{{ url('/Events') }}">Others Organize |  Attend</a>
            </div>
        </div>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>

<script>
    (function($){
        $.fn.MySlider = function(interval) {
            var slides;
            var cnt;
            var amount;
            var i;

            function run() {
                // hiding previous image and showing next
                $(slides[i]).fadeOut();
                i++;
                if (i >= amount) i = 0;
                $(slides[i]).fadeIn();

                // updating counter
                cnt.text(i+1+' / '+amount);

                // loop
                setTimeout(run, interval);
            }

            slides = $('#my_slider').children();
            cnt = $('#counter');
            amount = slides.length;
            i=0;

            // updating counter
            cnt.text(i+1+' / '+amount);

            setTimeout(run, interval);
        };
    })(jQuery);

    // custom initialization
    jQuery(window).load(function() {
        $('.smart_gallery').MySlider(3000);
    });
</script>


    </body>
</html>
