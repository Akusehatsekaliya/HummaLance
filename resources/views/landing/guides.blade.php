@extends('landing.layout.app')
@section('content')
    <style>
        .title1 {
            font-weight: bold;
            margin-top: 5px;
        }
    </style>
    <section class="py-5 homepage-search-block bg-landing bg-guides position-relative">
        <div class="container">
            <div class="row py-lg-5 justify-content-center d-flex align-items-center">
                <div class="homepage mt-3 text-center">
                    <h3 class="text-white font-weight-bold">Guides</h3>
                    <p class="text-white">
                        About Us
                        <x-svg>{{ asset('assets/svg/icons-12/chevron-double-right.svg') }}</x-svg>
                        <a href="#" style="color: rgb(255, 255, 255); text-decoration: none;">Guides</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 mb-5 mt-5">
        <div class="container">
            <div class="svg-container4">
                <x-svg>{{ asset('assets/svg/landing/guides.svg') }}</x-svg>
            </div>
            <div class="fitur-text">
                <h5 class="text-landing">
                    <x-svg>{{ asset('assets/svg/landing/about/stats/logo-blue.svg') }}</x-svg>
                    <span class="mr-1"></span>
                    Learn How To Use Clocker With Us
                </h5>
                <h2>Guides For <span class="text-landing">You</span></h2>
            </div>
            <div class="row-fitur1">
                <div class="fitur-item">
                    <div class="card-fitur-item3">
                        <div class="main-fitur">
                            <x-svg>{{ asset('assets/svg/landing/about/main-fitur/Self Development.svg') }}</x-svg>

                            <h5>Self Development</h5>
                            <p>By joining clocker you can develop yourself further in your work and hone your
                                skills.</p>
                        </div>
                    </div>
                </div>
                <div class="fitur-item">
                    <div class="card-fitur-item3">
                        <div class="main-fitur">
                            <x-svg>{{ asset('assets/svg/landing/about/main-fitur/Time Management.svg') }}</x-svg>

                            <h5>Time Management</h5>
                            <p>in clocker you can manage your time more efficiently with various working hours from
                                many vacancies</p>
                        </div>
                    </div>
                </div>
                <div class="fitur-item">
                    <div class="card-fitur-item3">
                        <div class="main-fitur">
                            <x-svg>{{ asset('assets/svg/landing/about/main-fitur/Career Growth.svg') }}</x-svg>

                            <h5>Career Growth</h5>
                            <p>At clocker you can grow your career more rapidly for your future</p>
                        </div>
                    </div>
                </div>
                <div class="fitur-item">
                    <div class="card-fitur-item3">
                        <div class="main-fitur">
                            <x-svg>{{ asset('assets/svg/landing/about/main-fitur/Global Networking.svg') }}</x-svg>

                            <h5>Global Networking</h5>
                            <p>Connect with clients and other professionals worldwide, opening doors to long-term
                                partnerships.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="py-5 bg-landing10">
        <div class="container">
            <div class="row py-lg-5 justify-content-center d-flex">
                <div class="col-lg-6 mr-5">
                    <div class="card-guides-grid" style="z-index:1; position:absolute; margin-top:-61px;">
                        <div class="card-guides-item">
                            <x-svg>{{ asset('assets/svg/landing/about/card-about-item/Easy To Use.svg') }}</x-svg>

                            <h5 class="title1">Easy To Use</h5>
                            <span class="font-italic">By joining clocker you can develop yourself further in </span>
                        </div>

                        <div class="card-guides-item">
                            <x-svg>{{ asset('assets/svg/landing/about/card-about-item/Varied work.svg') }}</x-svg>

                            <h5 class="title1">Varied work</h5>
                            <span class="font-italic">By joining clocker you can develop yourself further in </span>
                        </div>

                        <div class="card-guides-item">
                            <x-svg>{{ asset('assets/svg/landing/about/card-about-item/Diverse companies.svg') }}</x-svg>

                            <h5 class="title1">Diverse companies</h5>
                            <span class="font-italic">By joining clocker you can develop yourself further in </span>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 text-white">
                    <h2 class="font-weight-bold">This is why you need to use a clocker</h2>
                    <p style="font-size: 20px; font-weight:300;">At Clocker you can find many job vacancies with the working
                        hours and skills you want</p>
                    <a href="#" class="btn btn-outline-landing1 text-center"
                        style="font-size: 14px; font-weight: bold;">
                        Try Clocker Now
                        <x-svg>{{ asset('assets/svg/icons-24/icon-next.svg') }}</x-svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4">
        <div class="container">
            <div class="fitur-text">
                <h5 class="text-landing">
                    <x-svg>{{ asset('assets/svg/landing/about/stats/logo-blue.svg') }}</x-svg>
                    <span class="mr-1"></span>
                    Learn How To Use Clocker With Us
                </h5>
                <h2>Guides For <span class="text-landing">You</span></h2>
            </div>
            <div class="row-fitur1">
                <div class="fitur-item">
                    <div class="card-fitur-item3">
                        <div class="main-fitur">
                            <x-svg>{{ asset('assets/svg/landing/about/main-fitur/Self Development.svg') }}</x-svg>

                            <h5>Self Development</h5>
                            <p>By joining clocker you can develop yourself further in your work and hone your
                                skills.</p>
                        </div>
                    </div>
                </div>
                <div class="fitur-item">
                    <div class="card-fitur-item3">
                        <div class="main-fitur">
                            <x-svg>{{ asset('assets/svg/landing/about/main-fitur/Time Management.svg') }}</x-svg>

                            <h5>Time Management</h5>
                            <p>in clocker you can manage your time more efficiently with various working hours from
                                many vacancies</p>
                        </div>
                    </div>
                </div>
                <div class="fitur-item">
                    <div class="card-fitur-item3">
                        <div class="main-fitur">
                            <x-svg>{{ asset('assets/svg/landing/about/main-fitur/Career Growth.svg') }}</x-svg>

                            <h5>Career Growth</h5>
                            <p>At clocker you can grow your career more rapidly for your future</p>
                        </div>
                    </div>
                </div>
                <div class="fitur-item">
                    <div class="card-fitur-item3">
                        <div class="main-fitur">
                            <x-svg>{{ asset('assets/svg/landing/about/main-fitur/Global Networking.svg') }}</x-svg>

                            <h5>Global Networking</h5>
                            <p>Connect with clients and other professionals worldwide, opening doors to long-term
                                partnerships.</p>
                        </div>
                    </div>
                </div>
                <div class="fitur-item">
                    <div class="card-fitur-item3">
                        <div class="main-fitur">
                            <x-svg>{{ asset('assets/svg/landing/about/main-fitur/Self Development.svg') }}</x-svg>

                            <h5>Self Development</h5>
                            <p>By joining clocker you can develop yourself further in your work and hone your
                                skills.</p>
                        </div>
                    </div>
                </div>
                <div class="fitur-item">
                    <div class="card-fitur-item3">
                        <div class="main-fitur">
                            <x-svg>{{ asset('assets/svg/landing/about/main-fitur/Time Management.svg') }}</x-svg>

                            <h5>Time Management</h5>
                            <p>in clocker you can manage your time more efficiently with various working hours from
                                many vacancies</p>
                        </div>
                    </div>
                </div>
                <div class="fitur-item">
                    <div class="card-fitur-item3">
                        <div class="main-fitur">
                            <x-svg>{{ asset('assets/svg/landing/about/main-fitur/Career Growth.svg') }}</x-svg>

                            <h5>Career Growth</h5>
                            <p>At clocker you can grow your career more rapidly for your future</p>
                        </div>
                    </div>
                </div>
                <div class="fitur-item">
                    <div class="card-fitur-item3">
                        <div class="main-fitur">
                            <x-svg>{{ asset('assets/svg/landing/about/main-fitur/Global Networking.svg') }}</x-svg>

                            <h5>Global Networking</h5>
                            <p>Connect with clients and other professionals worldwide, opening doors to long-term
                                partnerships.</p>
                        </div>
                    </div>
                </div>
                <div class="fitur-item">
                    <div class="card-fitur-item3">
                        <div class="main-fitur">
                            <x-svg>{{ asset('assets/svg/landing/about/main-fitur/Self Development.svg') }}</x-svg>

                            <h5>Self Development</h5>
                            <p>By joining clocker you can develop yourself further in your work and hone your
                                skills.</p>
                        </div>
                    </div>
                </div>
                <div class="fitur-item">
                    <div class="card-fitur-item3">
                        <div class="main-fitur">
                            <x-svg>{{ asset('assets/svg/landing/about/main-fitur/Time Management.svg') }}</x-svg>

                            <h5>Time Management</h5>
                            <p>in clocker you can manage your time more efficiently with various working hours from
                                many vacancies</p>
                        </div>
                    </div>
                </div>
                <div class="fitur-item">
                    <div class="card-fitur-item3">
                        <div class="main-fitur">
                            <x-svg>{{ asset('assets/svg/landing/about/main-fitur/Career Growth.svg') }}</x-svg>

                            <h5>Career Growth</h5>
                            <p>At clocker you can grow your career more rapidly for your future</p>
                        </div>
                    </div>
                </div>
                <div class="fitur-item">
                    <div class="card-fitur-item3 ">
                        <div class="main-fitur">
                            <x-svg>{{ asset('assets/svg/landing/about/main-fitur/Global Networking.svg') }}</x-svg>

                            <h5>Global Networking</h5>
                            <p>Connect with clients and other professionals worldwide, opening doors to long-term
                                partnerships.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="bg-landing11" style="margin-top: 190px; height: 444px;">
        <div class="container">
            <div class="row py-lg-5 justify-content-between align-items-center">
                <!-- Kolom untuk teks -->
                <div class="col-lg-5 text-white">
                    <div style="margin-top: 0px; height: auto;"> <!-- Bungkus teks agar gambar terpisah -->
                        <h2 class="font-weight-bold" style="margin-bottom: 20px;">This is why you need to use a clocker</h2>
                        <p style="font-size: 20px; font-weight: 300;">
                            At Clocker you can find many job vacancies with the working hours and skills you want
                        </p>
                    </div>
                </div>

                <!-- Kolom untuk gambar -->
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class="card-about-grid" style="z-index: 1; margin-top: -281px;">
                        <img src="{{ asset('assets_landing/images/guides.png') }}" alt="" width="615" height="590" style="margin-top: 0px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('landing.footer')
@endsection
