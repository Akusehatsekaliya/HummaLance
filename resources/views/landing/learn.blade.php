@extends('landing.layout.app')
@section('content')
    <style>
        .navbar-nav {
            display: flex;
            flex-wrap: nowrap;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
            margin-left: 5px;
        }

        .nav-item {
            margin-right: 6px;
        }
    </style>
    <section class="py-5 homepage-search-block bg-landing bg-learn position-relative">
        <div class="container">
            <div class="row py-lg-5 justify-content-center d-flex align-items-center">
                <div class="homepage mt-3 text-center">
                    <h3 class="text-white font-weight-bold">Learn</h3>
                    <p class="text-white">
                        Guides
                        <x-svg>{{ asset('assets/svg/icons-12/chevron-double-right.svg') }}</x-svg>
                        <a href="#" style="color: rgb(255, 255, 255); text-decoration: none;">Learn</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg navbar-light bg-white osahan-nav-mid1 px-0 border-top shadow-sm">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Graphic & Design</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('about') }}">Programing & Tech</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Video & Animation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Music & Audio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Writing & Translation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Photography</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Finance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logo Design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Show More <i class="fas fa-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5 mb-5 mt-5">
        <div class="container">
            <div class="fitur-text">
                <h5 class="text-landing"
                    style="white-space: nowrap; display: inline-block; text-align: left; overflow: hidden; margin-left: -30px;">
                    <x-svg>{{ asset('assets/svg/landing/about/stats/logo-blue.svg') }}</x-svg>
                    <span class="mr-1"></span>
                    Come Learn How To Become a Freelancer From Experienced Freelancers
                </h5>
                <h2>Course For <span class="text-landing">You</span></h2>
            </div>
        </div>

        <div class="freelance-projects bg-white py-5">
            <div class="container">
                <div class="row" style="row-gap: 2rem;">
                    <div class="col-3">
                        <div class="freelancer2">
                            <div class="img-wrapper2">
                                <img src="{{ asset('assets_landing/images/BackgroundHome.png') }}"
                                    alt="Freelancer Background">
                            </div>
                            <div class="freelancer2-footer">
                                <img src="images/user/s7.png">
                                <h5>Clocker</h5>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold;"></p>
                                <p class="badge3"
                                    style="text-align: left; padding-left: 9px; font-weight: bold; margin-right: 20px; margin-top: -50px; padding: 3.5px 10px; font-size: 10px; font-weight: bold;">
                                    Experienced Freelancer
                                </p>
                            </div>

                            <p
                                style="text-align: left; padding-left: 10px; font-weight: 500; margin-top: -12px; max-width: 269px;">
                                I Will
                                Here are some tips for those of you who want to start freelancing</p>
                            <div class="content-info" style="padding-left: 10px;">
                                <div class="rating-wrapper">
                                    <span class="gig-rating text-body-2">
                                        <p style="text-align: left; font-weight: bold;">From $20</p>

                                    </span>
                                </div>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold; margin-top: -16px;">10
                                    year in freelancing</p>
                                <button class="btn btn-success2 buy-course-btn" type="submit">
                                    Buy Course
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="freelancer2">
                            <div class="img-wrapper2">
                                <img src="{{ asset('assets_landing/images/BackgroundHome.png') }}"
                                    alt="Freelancer Background">
                            </div>
                            <div class="freelancer2-footer">
                                <img src="images/user/s7.png">
                                <h5>Clocker</h5>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold;"></p>
                                <p class="badge3"
                                    style="text-align: left; padding-left: 9px; font-weight: bold; margin-right: 20px; margin-top: -50px; padding: 3.5px 10px; font-size: 10px; font-weight: bold;">
                                    Experienced Freelancer
                                </p>
                            </div>

                            <p
                                style="text-align: left; padding-left: 10px; font-weight: 500; margin-top: -12px; max-width: 269px;">
                                I Will
                                Here are some tips for those of you who want to start freelancing</p>
                            <div class="content-info" style="padding-left: 10px;">
                                <div class="rating-wrapper">
                                    <span class="gig-rating text-body-2">
                                        <p style="text-align: left; font-weight: bold;">From $20</p>

                                    </span>
                                </div>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold; margin-top: -16px;">10
                                    year in freelancing</p>
                                <button class="btn btn-success2 buy-course-btn" type="submit">
                                    Buy Course
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="freelancer2">
                            <div class="img-wrapper2">
                                <img src="{{ asset('assets_landing/images/BackgroundHome.png') }}"
                                    alt="Freelancer Background">
                            </div>
                            <div class="freelancer2-footer">
                                <img src="images/user/s7.png">
                                <h5>Clocker</h5>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold;"></p>
                                <p class="badge3"
                                    style="text-align: left; padding-left: 9px; font-weight: bold; margin-right: 20px; margin-top: -50px; padding: 3.5px 10px; font-size: 10px; font-weight: bold;">
                                    Experienced Freelancer
                                </p>
                            </div>

                            <p
                                style="text-align: left; padding-left: 10px; font-weight: 500; margin-top: -12px; max-width: 269px;">
                                I Will
                                Here are some tips for those of you who want to start freelancing</p>
                            <div class="content-info" style="padding-left: 10px;">
                                <div class="rating-wrapper">
                                    <span class="gig-rating text-body-2">
                                        <p style="text-align: left; font-weight: bold;">From $20</p>

                                    </span>
                                </div>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold; margin-top: -16px;">10
                                    year in freelancing</p>
                                <button class="btn btn-success2 buy-course-btn" type="submit">
                                    Buy Course
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="freelancer2">
                            <div class="img-wrapper2">
                                <img src="{{ asset('assets_landing/images/BackgroundHome.png') }}"
                                    alt="Freelancer Background">
                            </div>
                            <div class="freelancer2-footer">
                                <img src="images/user/s7.png">
                                <h5>Clocker</h5>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold;"></p>
                                <p class="badge3"
                                    style="text-align: left; padding-left: 9px; font-weight: bold; margin-right: 20px; margin-top: -50px; padding: 3.5px 10px; font-size: 10px; font-weight: bold;">
                                    Experienced Freelancer
                                </p>
                            </div>

                            <p
                                style="text-align: left; padding-left: 10px; font-weight: 500; margin-top: -12px; max-width: 269px;">
                                I Will
                                Here are some tips for those of you who want to start freelancing</p>
                            <div class="content-info" style="padding-left: 10px;">
                                <div class="rating-wrapper">
                                    <span class="gig-rating text-body-2">
                                        <p style="text-align: left; font-weight: bold;">From $20</p>

                                    </span>
                                </div>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold; margin-top: -16px;">10
                                    year in freelancing</p>
                                <button class="btn btn-success2 buy-course-btn" type="submit">
                                    Buy Course
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="freelancer2">
                            <div class="img-wrapper2">
                                <img src="{{ asset('assets_landing/images/BackgroundHome.png') }}"
                                    alt="Freelancer Background">
                            </div>
                            <div class="freelancer2-footer">
                                <img src="images/user/s7.png">
                                <h5>Clocker</h5>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold;"></p>
                                <p class="badge3"
                                    style="text-align: left; padding-left: 9px; font-weight: bold; margin-right: 20px; margin-top: -50px; padding: 3.5px 10px; font-size: 10px; font-weight: bold;">
                                    Experienced Freelancer
                                </p>
                            </div>

                            <p
                                style="text-align: left; padding-left: 10px; font-weight: 500; margin-top: -12px; max-width: 269px;">
                                I Will
                                Here are some tips for those of you who want to start freelancing</p>
                            <div class="content-info" style="padding-left: 10px;">
                                <div class="rating-wrapper">
                                    <span class="gig-rating text-body-2">
                                        <p style="text-align: left; font-weight: bold;">From $20</p>

                                    </span>
                                </div>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold; margin-top: -16px;">10
                                    year in freelancing</p>
                                <button class="btn btn-success2 buy-course-btn" type="submit">
                                    Buy Course
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="freelancer2">
                            <div class="img-wrapper2">
                                <img src="{{ asset('assets_landing/images/BackgroundHome.png') }}"
                                    alt="Freelancer Background">
                            </div>
                            <div class="freelancer2-footer">
                                <img src="images/user/s7.png">
                                <h5>Clocker</h5>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold;"></p>
                                <p class="badge3"
                                    style="text-align: left; padding-left: 9px; font-weight: bold; margin-right: 20px; margin-top: -50px; padding: 3.5px 10px; font-size: 10px; font-weight: bold;">
                                    Experienced Freelancer
                                </p>
                            </div>

                            <p
                                style="text-align: left; padding-left: 10px; font-weight: 500; margin-top: -12px; max-width: 269px;">
                                I Will
                                Here are some tips for those of you who want to start freelancing</p>
                            <div class="content-info" style="padding-left: 10px;">
                                <div class="rating-wrapper">
                                    <span class="gig-rating text-body-2">
                                        <p style="text-align: left; font-weight: bold;">From $20</p>

                                    </span>
                                </div>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold; margin-top: -16px;">10
                                    year in freelancing</p>
                                <button class="btn btn-success2 buy-course-btn" type="submit">
                                    Buy Course
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="freelancer2">
                            <div class="img-wrapper2">
                                <img src="{{ asset('assets_landing/images/BackgroundHome.png') }}"
                                    alt="Freelancer Background">
                            </div>
                            <div class="freelancer2-footer">
                                <img src="images/user/s7.png">
                                <h5>Clocker</h5>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold;"></p>
                                <p class="badge3"
                                    style="text-align: left; padding-left: 9px; font-weight: bold; margin-right: 20px; margin-top: -50px; padding: 3.5px 10px; font-size: 10px; font-weight: bold;">
                                    Experienced Freelancer
                                </p>
                            </div>

                            <p
                                style="text-align: left; padding-left: 10px; font-weight: 500; margin-top: -12px; max-width: 269px;">
                                I Will
                                Here are some tips for those of you who want to start freelancing</p>
                            <div class="content-info" style="padding-left: 10px;">
                                <div class="rating-wrapper">
                                    <span class="gig-rating text-body-2">
                                        <p style="text-align: left; font-weight: bold;">From $20</p>

                                    </span>
                                </div>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold; margin-top: -16px;">10
                                    year in freelancing</p>
                                <button class="btn btn-success2 buy-course-btn" type="submit">
                                    Buy Course
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="freelancer2">
                            <div class="img-wrapper2">
                                <img src="{{ asset('assets_landing/images/BackgroundHome.png') }}"
                                    alt="Freelancer Background">
                            </div>
                            <div class="freelancer2-footer">
                                <img src="images/user/s7.png">
                                <h5>Clocker</h5>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold;"></p>
                                <p class="badge3"
                                    style="text-align: left; padding-left: 9px; font-weight: bold; margin-right: 20px; margin-top: -50px; padding: 3.5px 10px; font-size: 10px; font-weight: bold;">
                                    Experienced Freelancer
                                </p>
                            </div>

                            <p
                                style="text-align: left; padding-left: 10px; font-weight: 500; margin-top: -12px; max-width: 269px;">
                                I Will
                                Here are some tips for those of you who want to start freelancing</p>
                            <div class="content-info" style="padding-left: 10px;">
                                <div class="rating-wrapper">
                                    <span class="gig-rating text-body-2">
                                        <p style="text-align: left; font-weight: bold;">From $20</p>

                                    </span>
                                </div>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold; margin-top: -16px;">10
                                    year in freelancing</p>
                                <button class="btn btn-success2 buy-course-btn" type="submit">
                                    Buy Course
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="freelancer2">
                            <div class="img-wrapper2">
                                <img src="{{ asset('assets_landing/images/BackgroundHome.png') }}"
                                    alt="Freelancer Background">
                            </div>
                            <div class="freelancer2-footer">
                                <img src="images/user/s7.png">
                                <h5>Clocker</h5>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold;"></p>
                                <p class="badge3"
                                    style="text-align: left; padding-left: 9px; font-weight: bold; margin-right: 20px; margin-top: -50px; padding: 3.5px 10px; font-size: 10px; font-weight: bold;">
                                    Experienced Freelancer
                                </p>
                            </div>

                            <p
                                style="text-align: left; padding-left: 10px; font-weight: 500; margin-top: -12px; max-width: 269px;">
                                I Will
                                Here are some tips for those of you who want to start freelancing</p>
                            <div class="content-info" style="padding-left: 10px;">
                                <div class="rating-wrapper">
                                    <span class="gig-rating text-body-2">
                                        <p style="text-align: left; font-weight: bold;">From $20</p>

                                    </span>
                                </div>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold; margin-top: -16px;">10
                                    year in freelancing</p>
                                <button class="btn btn-success2 buy-course-btn" type="submit">
                                    Buy Course
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="freelancer2">
                            <div class="img-wrapper2">
                                <img src="{{ asset('assets_landing/images/BackgroundHome.png') }}"
                                    alt="Freelancer Background">
                            </div>
                            <div class="freelancer2-footer">
                                <img src="images/user/s7.png">
                                <h5>Clocker</h5>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold;"></p>
                                <p class="badge3"
                                    style="text-align: left; padding-left: 9px; font-weight: bold; margin-right: 20px; margin-top: -50px; padding: 3.5px 10px; font-size: 10px; font-weight: bold;">
                                    Experienced Freelancer
                                </p>
                            </div>

                            <p
                                style="text-align: left; padding-left: 10px; font-weight: 500; margin-top: -12px; max-width: 269px;">
                                I Will
                                Here are some tips for those of you who want to start freelancing</p>
                            <div class="content-info" style="padding-left: 10px;">
                                <div class="rating-wrapper">
                                    <span class="gig-rating text-body-2">
                                        <p style="text-align: left; font-weight: bold;">From $20</p>

                                    </span>
                                </div>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold; margin-top: -16px;">10
                                    year in freelancing</p>
                                <button class="btn btn-success2 buy-course-btn" type="submit">
                                    Buy Course
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="freelancer2">
                            <div class="img-wrapper2">
                                <img src="{{ asset('assets_landing/images/BackgroundHome.png') }}"
                                    alt="Freelancer Background">
                            </div>
                            <div class="freelancer2-footer">
                                <img src="images/user/s7.png">
                                <h5>Clocker</h5>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold;"></p>
                                <p class="badge3"
                                    style="text-align: left; padding-left: 9px; font-weight: bold; margin-right: 20px; margin-top: -50px; padding: 3.5px 10px; font-size: 10px; font-weight: bold;">
                                    Experienced Freelancer
                                </p>
                            </div>

                            <p
                                style="text-align: left; padding-left: 10px; font-weight: 500; margin-top: -12px; max-width: 269px;">
                                I Will
                                Here are some tips for those of you who want to start freelancing</p>
                            <div class="content-info" style="padding-left: 10px;">
                                <div class="rating-wrapper">
                                    <span class="gig-rating text-body-2">
                                        <p style="text-align: left; font-weight: bold;">From $20</p>

                                    </span>
                                </div>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold; margin-top: -16px;">10
                                    year in freelancing</p>
                                <button class="btn btn-success2 buy-course-btn" type="submit">
                                    Buy Course
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="freelancer2">
                            <div class="img-wrapper2">
                                <img src="{{ asset('assets_landing/images/BackgroundHome.png') }}"
                                    alt="Freelancer Background">
                            </div>
                            <div class="freelancer2-footer">
                                <img src="images/user/s7.png">
                                <h5>Clocker</h5>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold;"></p>
                                <p class="badge3"
                                    style="text-align: left; padding-left: 9px; font-weight: bold; margin-right: 20px; margin-top: -50px; padding: 3.5px 10px; font-size: 10px; font-weight: bold;">
                                    Experienced Freelancer
                                </p>
                            </div>

                            <p
                                style="text-align: left; padding-left: 10px; font-weight: 500; margin-top: -12px; max-width: 269px;">
                                I Will
                                Here are some tips for those of you who want to start freelancing</p>
                            <div class="content-info" style="padding-left: 10px;">
                                <div class="rating-wrapper">
                                    <span class="gig-rating text-body-2">
                                        <p style="text-align: left; font-weight: bold;">From $20</p>

                                    </span>
                                </div>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <p style="text-align: left; padding-left: 10px; font-weight: bold; margin-top: -16px;">10
                                    year in freelancing</p>
                                <button class="btn btn-success2 buy-course-btn" type="submit">
                                    Buy Course
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('landing.footer')
@endsection
