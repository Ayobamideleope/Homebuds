<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="theme-color" content="#097bed">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - Homebuds</title>
    <link rel="icon" href="{{asset('images/favicon.fw.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('images/favicon.fw.png')}}">
    <!-- Styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway">
    <link href="{{ mix('css/vendor.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">


    <nav class="navbar navbar--top expand">
        <a class="navbar-brand col-sm-4 col-md-5" href="#">
            <img src="{{ asset('images/favicon.fw.png') }}" class="img-fluid navbar-brand__img"
                 alt="Hombuds logo">
            <span class="navbar-brand__txt d-none d-md-block">Homebuds</span>
        </a>

        <div class="col-sm-7 col-md-6 col-lg-5 offset-1 d-flex align-items-center justify-content-end">

            {{-- Show Sign Up/Login or User Icon and name--}}
            @if (Auth::guest())
                <a class="btn btn-primary d-none d-md-inline-block" href="#usersForm"
                   role="button">Register/Login</a>
            @else
                <div class="dropdown open d-none d-md-inline-block">
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
                @if(Auth::guest())
                    <li class="nav-item d-md-none">
                        <a class="nav-link text-link" href="{{ url('/register')
                        }}">Register/Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>

    @yield('content')

    <nav class="navbar navbar--btm animated fadeInUpBig">
        <div class="navbar--btm__item">
            <a class="btn btn-primary d-none d-md-block" href="{{ route('products.create') }}"
               role="button">Post free Ad</a>
            {{--<button type="button"--}}
                    {{--class="btn btn-primary navbar--btm__toggle"><i class="fa fa-angle-right d-md-none" aria-hidden="true"></i>--}}
            {{--</button>--}}

        </div>
        <a href="#" class="to-top btn btn-primary"><i class="fa fa-caret-up"  title="Back to top" data-title="Back to top" aria-hidden="true" data-toggle="tooltip"></i></a>
        <div class="navbar--btm__item">
            {{--<button type="button"--}}
                    {{--class="btn btn-primary navbar--btm__toggle"><i class="fa fa-angle-left--}}
                    {{--d-md-none"--}}
                                               {{--aria-hidden="true"></i>--}}
            {{--</button>--}}
            <a class="btn btn-primary d-none d-md-block" href="{{ route('products.create') }}"
               role="button">Get notified of Ads around you</a>

        </div>
    </nav>


    <section class="section--footer">
        <div class="footer-content">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <ul class="footer-menu">
                        <p class="section-title">GET TO KNOW US</p>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/careers">Careers</a></li>
                        <li><a href="/apps">Mobile Apps</a></li>
                        <li><a href="/reachus">Contact Us </a></li>
                        <li><a href="/pressrelease">Press</a></li>
                        <li><a href="/contentpolicies">Content Policies</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <ul class="footer-menu">
                        <p class="section-title">DISCOVER</p>
                        <li><a href="https://blog.homebuds.ng">Our Blog</a></li>
                        <li><a href="/how-to-find-businesses">Find Businesses</a></li>
                        <li><a href="/marketplace">Marketplace</a></li>
                        <li><a href="/faq-payment">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <ul class="footer-menu">
                        <p class="section-title">HOMEBUDS FOR BUSINESSES</p>
                        <li><a href="/registerbusiness}">Register your Business</a></li>
                        <li><a href="/business">Claim your Business</a></li>
                        <li><a href="/advertise">Advertise with us</a></li>
                        <li><a href="/advertise">Sell with us</a></li>
                        <li><a href="/business">Business Blog</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="contact-box">
                        <div class="social-connect">
                            <p class="section-title">CONNECT WITH US</p>
                            <ul class="social-links-list">
                                <li>
                                    <a class="social-icon" href="https://www.facebook
                                    .com/homebudsnigeria">
                                        <i class="fa fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="social-icon" href="https://twitter
                                    .com/homebudsnigeria">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="social-icon" href="https://plus.google
                                    .com/+homebudsnigeria">
                                        <i class="fa fa-google-plus-circle"></i>
                                    </a>
                               </li>
                                <li>
                                    <a class="social-icon" href="https://www.linkedin
                                    .com/company/homebuds">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="social-icon" href="https://www.youtube
                                    .com/homebudsnigeria">
                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p class="section-title">BE IN THE KNOW</p>
                            <p class="subscribe-text">Get up-to-date information on deals, products, and businesses around you from our weekly newsletter. You can unsubscribe at anytime.<br></p>

                            <form class="form form-inline">
                                <div class="input-group">
                                    <input type="email" name="subscribe-email-footer" id="" class="form-control" placeholder="Your email address" aria-describedby="subscribe-email-footer-help">
                                    <span class="input-group-btn"><button type="submit" class="btn btn-primary"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
</span>
                                </div>

                            </form>
                        </div>

                    </div>

                    <div class="country-select-wrapper mg-top-md">
                        <p class="section-title">Countries</p>
                        <ul class="footer-menu">
                            <li><img src="{{ asset('images/flag-nigeria.jpg') }}"> &nbsp;<a
                                        href="/">Nigeria</a></li>
                            <li><img src="{{ asset('images/flag-ghana.jpg') }}"> &nbsp;<a
                                        href="/ghana">Ghana</a></li>
                            <br>
                            <br>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="browse-category container">
                    <div class="bordered row justify-content-around">
                        <p class="section-title">BROWSE HOMEBUDS: </p>
                        <ul class="footer-menu row justify-content-around">
                            <li class="col"><a href="/nigeria/browsebycategories">Categories</a>,
                            </li>
                            <li class="col"><a href="/nigeria/browsebyproducts">Products</a>, </li>
                            <li class="col"><a href="/nigeria/browsebyservices">Services</a>, </li>
                            <li class="col"><a href="/nigeria/browsebybussiness">Businesses</a>
                            </li>
                        </ul>
                    </div>
            </div>
            <!-- <div class="copyright-info text-center muted">
                <a href="/privacypolicy">Privacy Policy</a> · <a href="/terms">Terms and Conditions</a> · <a href="https://m.vconnect.com/">Mobile Site</a>
                <p>Copyright © 2010 - 2017 Homebuds Global Services Limited</p>
            </div> -->
        </div>
        <div class="footer-copyright">&copy; Homebuds 2017</div>
    </section>

</div>

<!-- Scripts -->
<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/tether.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
