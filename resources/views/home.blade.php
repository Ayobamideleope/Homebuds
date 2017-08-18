@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section id="welcome-slides" class="mg-btm-no">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-content">
                        <h1 class="header">Just Contact Us</h1>
                        <p class="lead">Are you in need of a service? No need to worry</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-content">
                        <h1 class="header">Just sit back and enjoy while we do the connection for
                            you</h1>
                    </div>
                </div>
            </div>
            {{--<div class="swiper-pagination"></div>--}}
            {{--<div class="swiper-button-next"></div>--}}
            {{--<div class="swiper-button-prev"></div>--}}
        </div>
        <div class="welcome-slides-overlay">
            <form action="#" class="form form-inline">
                <div class="form-group row">
                    <label for="search__name" class="d-none">Business Name</label>
                    <input type="search"
                           class="form-control form-control-lg col-sm-6" name="search__name"
                           id="search__name"
                           placeholder="Search Business">
                    <label for="search__state" class="d-none">State or location</label>
                    <select class="custom-select form-control form-control-lg col"
                            name="search__state"
                            id="search__state">
                        <option selected>Select State</option>
                        <option value="">Lagos</option>
                        <option value="">Abuja</option>
                        <option value="">Oyo</option>
                        <option value="">Kwara</option>
                    </select>
                    <button type="submit" class="btn btn-primary btn-lg col">Search</button>
                </div>
            </form>

        </div>
    </section>

    <section class="container-fluid .d-flex section-category-popular">
        <div class="card-row--popular">
            <div class="card">
                <div class="card-img-cont">
                    <img class="card-img-top" alt=" image"
                         src="{{ asset('images/cat/welder-cutting-metal.jpeg') }}">
                    <div class="card-overlay">
                        <div class="card-overlay-item" data-toggle="tooltip" data-placement="left"
                             title="Search Products in Category"><i class="fa fa-search"
                                                                    aria-hidden="true"></i>
                        </div>
                        <div class="card-overlay-item" data-toggle="tooltip" data-placement="right"
                             title="Add Product to Category"><span>&#9547;</span></div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Welders</h4>
                    </div>
                </div>
                <div class="card-footer">
                    <small>3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <div class="card-img-cont">
                    <img class="card-img-top" alt=" image"
                         src="{{ asset('images/cat/black-and-white-pro-camera.jpeg') }}">
                    <div class="card-overlay">
                        <div class="card-overlay-item" data-toggle="tooltip" data-placement="left"
                             title="Search Products in Category"><i class="fa fa-search"
                                                                    aria-hidden="true"></i>
                        </div>
                        <div class="card-overlay-item" data-toggle="tooltip" data-placement="right"
                             title="Add Product to Category"><span>&#9547;</span></div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Photographers</h4>
                    </div>
                </div>
                <div class="card-footer">
                    <small>4 mins ago</small>
                </div>
            </div>
            <div class="card">
                <div class="card-img-cont">
                    <img class="card-img-top" alt=" image"
                         src="{{ asset('images/cat/wood-joiner-marking-wood.jpeg') }}">
                    <div class="card-overlay">
                        <div class="card-overlay-item" data-toggle="tooltip" data-placement="left"
                             title="Search Products in Category"><i class="fa fa-search"
                                                                    aria-hidden="true"></i>
                        </div>
                        <div class="card-overlay-item" data-toggle="tooltip" data-placement="right"
                             title="Add Product to Category"><span>&#9547;</span></div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Carpenters</h4>
                    </div>
                </div>
                <div class="card-footer">
                    <small>5 mins ago</small>
                </div>
            </div>
            <div class="card">
                <div class="card-img-cont">
                    <img class="card-img-top" alt=" image"
                         src="{{ asset('images/cat/cat-mech.jpg') }}">
                    <div class="card-overlay">
                        <div class="card-overlay-item" data-toggle="tooltip" data-placement="left"
                             title="Search Products in Category"><i class="fa fa-search"
                                                                    aria-hidden="true"></i>
                        </div>
                        <div class="card-overlay-item" data-toggle="tooltip" data-placement="right"
                             title="Add Product to Category"><span>&#9547;</span></div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Mechanics</h4>
                    </div>
                </div>
                <div class="card-footer">
                    <small>5 mins ago</small>
                </div>
            </div>
            <div class="card">
                <div class="card-img-cont">
                    <img class="card-img-top" alt=" image"
                         src="{{ asset('images/cat/cat-make-up.jpeg') }}">
                    <div class="card-overlay">
                        <div class="card-overlay-item" data-toggle="tooltip" data-placement="left"
                             title="Search Products in Category"><i class="fa fa-search"
                                                                    aria-hidden="true"></i>
                        </div>
                        <div class="card-overlay-item" data-toggle="tooltip" data-placement="right"
                             title="Add Product to Category"><span>&#9547;</span></div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Make Up</h4>
                    </div>
                </div>
                <div class="card-footer">
                    <small>6 mins ago</small>
                </div>
            </div>
            <a class="card-more">
                <i class="fa fa-ellipsis-h fa-lg text-center text-primary card-more-icon"
                   aria-hidden="true"></i>
                    <h5 class="card-more-title">More</h5>
                <div class="card-more-footer">
                    <small></small>
                </div>
            </a>
        </div>
    </section>

    <section id="expand-business-teaser">
        <div class="container-fluid">
            <div class="row sib-mg-no">
                <div class="col-lg-5 col-md-4 bg-img"></div>
                <div class="col-lg-7 col-md-8 content bg-img-rs pd-all-xl">
                    <h1 class="sib-mg-md h">Do you want to expand your work?</h1>
                    <p class="lead sib-mg-md">Are you a business owner, or a worker in a company?
                        You can extend and
                        expand your
                        business by registering it under our ads</p>
                    <a href="#section__register" class="btn btn-default btn-lg sib-mg-md">Post your
                        ad
                        for free</a>

                </div>
            </div>
            <div class="row sib-mg-no pd-top-sm pd-btm-sm expand-business-teaser-details">
                {{--<div class="col-sm-6">--}}
                {{--<h4>Large Business Reach</h4>--}}
                {{--<ul class="fa-ul ul-dot">--}}
                {{--<li><i class="fa fa-li fa-dot-circle-o" aria-hidden="true"></i>We have thousand of users--}}
                {{--and other business who uses our website--}}
                {{--</li>--}}
                {{--<li><i class="fa fa-li fa-dot-circle-o" aria-hidden="true"></i>We are fast growing</li>--}}
                {{--<li><i class="fa fa-li fa-dot-circle-o" aria-hidden="true"></i>We cover the whole nation--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                {{--<div class="col-sm-6">--}}
                {{--<h4>Costs you nothing</h4>--}}
                {{--<ul class="fa-ul ul-dot">--}}
                {{--<li><i class="fa fa-li fa-dot-circle-o" aria-hidden="true"></i><strong>It's totally--}}
                {{--free</strong>&mdash;no hidden charges--}}
                {{--</li>--}}
                {{--<li><i class="fa fa-li fa-dot-circle-o" aria-hidden="true"></i><strong>Easy to set--}}
                {{--up</strong>: No need of long queue office registrations.--}}
                {{--Neither, do you need to hire an expert to set it up for you.--}}
                {{--</li>--}}
                {{--<li><i class="fa fa-li fa-dot-circle-o" aria-hidden="true"></i><strong>We've got you--}}
                {{--covered</strong>: If you need any help our chat is here.--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                <div class="col-md-4">
                    <div class="media--teaser">
                        <i class="fa fa-user-circle media--teaser__img"
                           aria-hidden="true"></i>
                        <div class="media--teaser__txt">
                            <h3 class="h">Register an account</h3>
                            <p>It's easy. Just click the register button or go to the
                                register section below and fill the form according to the
                                specified instruction.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media--teaser">
                        <i class="fa fa-black-tie media--teaser__img"
                           aria-hidden="true"></i>
                        <div class="media--teaser__txt">
                            <h3 class="h">Post free Ad</h3>
                            <p>Log into your account and post free Ads. People who are
                                interested in your posted services can contact you at
                                anytime.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media--teaser">
                        <i class="fa fa-file-text-o media--teaser__img"
                           aria-hidden="true"></i>
                        <div class="media--teaser__txt">
                            <h3 class="h">Boost Account</h3>
                            <p>Boost your account for as low as One Thousand Naira to have
                                your services listed on the homebuds front page.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="products__category">

        <h2 class="section__title mg-top-xxl mg-btm-lg">Ads by Category</h2>

        <ul class="nav justify-content-center products__category__nav">
            <li class="nav-item">
                <a class="nav-link text-link active" href="#" data-filter="all">All</a>
            </li>
            @foreach($cat_keys as $cat_key)
                <li class="nav-item">
                    <a class="nav-link text-link" href="#"
                       data-filter=".{{ $cat_key }}">{{ $cat_key }}</a>
                </li>
            @endforeach
        </ul>

        <div class="container mg-top-md mg-btm-xl ">
            <div class="card-row">
                @foreach($categories as $category)
                    @foreach($category as $sub_cat)
                        <div class="card mix {{ $cat_keys[$loop->index] }}">
                            <div class="card-img-cont">
                                <img class="card-img-top" alt=" {{ $cat_keys[$loop->index] }} image"
                                     src="{{ asset('images/cat/wood-joiner-marking-wood.jpeg') }}">
                                <div class="card-overlay">
                                    <div class="card-overlay-item" data-toggle="tooltip"
                                         data-placement="left"
                                         title="Search Products in Category"><i class="fa fa-search"
                                                                                aria-hidden="true"></i>
                                    </div>
                                    <div class="card-overlay-item" data-toggle="tooltip"
                                         data-placement="right"
                                         title="Add Product to Category"><span>&#9547;</span></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">{{ $sub_cat }}</h4>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small>Last Updated 3min ago</small>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>


    </section>

    <section class="products--latest">

        <h2 class="section__title mg-top-xxl mg-btm-lg">Latest Products</h2>

        <div class="container  mg-btm-lg">
            <div class="media-cont">
                @foreach($ads as $advert)
                    <div class="media">
                        <img class="media-img col-sm-4" alt="{{ $advert['name'] }} image"
                             src="{{ asset('images/cat/wood-joiner-marking-wood.jpeg') }}">
                        <div class="media-content col-sm-8">
                            <a class="media-content-title" href="#">{{ $advert['name'] }}</a>
                            <p class="media-content-desc">{{ $advert['description'] }}</p>
                            <div class="media-content-info">
                                <a href="#"
                                   class="text-link info-item">{{ $advert['category'] }}</a>
                                <a href="#" class="text-link info-item"><i class="fa fa-map-marker"
                                                                           aria-hidden="true"></i>
                                    {{ $advert['location'] }}</a>
                            </div>
                            <div class="media-content-footer">
                                <small>{{ $advert['date'] }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>

    <section id="section__register" class="pd-top-xl pd-btm-xl">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-lg-push-4 col-md-push-5 content pd-rt-sm">
                    <h1 class="sib-mg-md h">Just a few moment to sign up</h1>
                    <p class="lead sib-mg-md">Either you are a business owner or not, signing up is
                        the beginning of
                        your journey to enjoy the benefits of <strong>Homebuds</strong>.</p>
                    <p class="lead sib-mg-md">The process is not strenuous at all. We only need your
                        information to keep
                        track and serve you better.</p>
                </div>
                <div class="col-lg-4 col-md-5 col-lg-pull-8 col-md-pull-7 pd-top-sm">
                    <form class="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="sr-only">Full Name</label>
                            <input id="name" type="text" class="form-control" name="name"
                                   value="{{ old('name') }}"
                                   placeholder="Full Name" required>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="sr-only">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email"
                                   value="{{ old('email') }}"
                                   placeholder="Email" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="sr-only">Password</label>
                            <input id="password" type="password" class="form-control"
                                   name="password"
                                   placeholder="Password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="sr-only">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" placeholder="Confirm Password"
                                   required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Sign Up
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



@endsection
{{-- End content section --}}