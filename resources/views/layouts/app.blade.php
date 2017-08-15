<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{--<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Bootstrap 3 --> --}}


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="theme-color" content="#28347c">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - Homebuds</title>
    <link rel="icon" href="{{asset('images/homebuds-logo.jpg')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('images/homebuds-logo.jpg')}}">
    <!-- Styles -->
    <link {{--rel="preload" as="font"--}}rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway">
    <link href="{{ mix('css/vendor.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">


    <nav class="navbar navbar--top expand">
        <a class="navbar-brand col-sm-4 col-md-5" href="#">
            <img src="{{ asset('images/homebuds-logo.jpg') }}" class="img-fluid navbar-brand__img"
                 alt="Hombuds logo">
            <span class="navbar-brand__txt hidden-sm-down">Homebuds</span>
        </a>

        <div class="col-sm-7 col-md-6 col-lg-5 offset-1 d-flex align-items-center justify-content-end">

            {{-- Show Sign Up/Login or User Icon and name--}}
            @if (Auth::guest())
                <a class="btn btn-primary" href="#usersForm"
                   role="button">Register/Login</a>
            @else
                <div class="dropdown open">
                    <a class="btn btn-secondary dropdown-toggle" type="button" id="userMenuDropdownLink"
                       data-toggle="dropdown"
                       aria-haspopup="true"
                       aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="UserMenuDropdownLink">
                        {{-- TODO: Change to users link--}}
                        <a class="dropdown-item" href="#">Update Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
                <a class="btn navbar-text" href="#usersForm"
                   role="button">{{ Auth::user()->name }} <span class="caret"></span></a>
            @endif

            {{-- Site Navigation toggle button and Menu--}}
            <div class="nav-toggler" aria-label="Toggle Site Navigation">
                <div class="nav-toggler__open">
                    <div class="menu-icon">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>
                <div class="nav-toggler__mask"></div>
                <div class="nav-toggler__close">&#9587;</div>
            </div>


        </div>

        <div id="siteNavCont">
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-link" href="{{ url('/') }}">Home<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-link" href="{{ route('products.index') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-link" href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-link" href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <nav class="navbar navbar--btm animated fadeInUpBig">
        <div class="navbar--btm__item">
            <a class="btn btn-primary" href="{{ route('products.create') }}"
               role="button">Post free Ad</a>
        </div>
        <a href="#" class="to-top btn btn-primary"><i class="fa fa-caret-up"  title="Back to top" data-title="Back to top" aria-hidden="true" data-toggle="tooltip"></i></a>
        <div class="navbar--btm__item">
            <a class="btn btn-primary" href="{{ route('products.create') }}"
               role="button">Get notified of Ads around you</a>
        </div>
    </nav>


</div>

<!-- Scripts -->
<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/tether.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
