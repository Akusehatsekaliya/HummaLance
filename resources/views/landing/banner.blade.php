<style>
    .custom-title {
        line-height: 1.50px;
        margin-top: 14px;
        margin-bottom: 50px;
        margin-left: 12px;
    }
</style>
<section class="py-5 homepage-search-block bg-landing position-relative" style="z-index: -1;">
    <div class="container">
        <div class="row justify-content-center d-flex align-items-center">
            <div class="col-lg-7">
                <div class="row" style="margin-right: 12rem; margin-left: unset">
                    <x-svg>{{ asset('assets/svg/landing/banner/Start Work Today.svg') }}</x-svg>
                    <h6 class="custom-title mb-4 text-shadow text-white font-weight-normal">
                        Start Work Today
                    </h6>
                </div>
                <div class="homepage-search-title">
                    <h2 class="mb-3 text-shadow text-white font-weight-bold">{!! __("landing.banner.headline") !!}</h2>
                    <h6 class="mb-5 text-shadow text-white font-weight-normal">{!! __("landing.banner.description") !!}</h6>
                </div>
                <div class="homepage-search-form">
                    <div class="form-row" style="margin-left: -24px">
                        <ul class="navbar-nav align-items-center mr-auto d-flex">
                            <li class="nav-item d-flex align-items-center">
                                <a href="#" class="btn btn-outline-login1 text-center"
                                    style="font-size: 1rem; font-weight: bold;">
                                    Get Started
                                    <x-svg>{{ asset('assets/svg/landing/banner/getStarted.svg') }}</x-svg>
                                </a>

                                <a href="#" class="btn btn-outline-landing1 text-center ml-3"
                                    style="font-size: 1rem; font-weight: bold;">
                                    Learn More
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="margin-top: -30px; margin-bottom: -80px;">
                <img class="img-fluid" src="{{ asset('assets_landing/images/landingbanner.svg') }}" alt='' />
            </div>
        </div>
    </div>
</section>
