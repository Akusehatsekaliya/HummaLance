<style>
    .custom-title {
        line-height: 1.50px;
        margin-top: 14px;
        margin-bottom: 50px;
        margin-left: 12px;
    }
</style>
<section class="py-5 homepage-search-block bg-landing position-relative" style="padding-bottom: unset !important; overflow-y: hidden;">
    <div class="container my-5" style="margin-top: unset !important;">
        <div class="row justify-content-center d-flex align-items-center">
            <div class="col-lg-7" style="border: 1px solid;">
                <div class="row" style="margin-right: 12rem; margin-left: unset">
                    <x-svg>{{ asset('assets/svg/landing/banner/Start Work Today.svg') }}</x-svg>
                    <h6 class="custom-title mb-4 text-shadow text-white font-weight-normal">
                        <x-language>banner.Start Work Today</x-language>
                    </h6>
                </div>
                <div class="homepage-search-title">
                    <h2 class="mb-3 text-shadow text-white font-weight-bold"><x-language>banner.headline</x-language></h2>
                    <h6 class="mb-5 text-shadow text-white font-weight-normal"><x-language>banner.description</x-language></h6>
                </div>
                <div class="homepage-search-form">
                    <div class="form-row" style="margin-left: -24px">
                        <ul class="navbar-nav align-items-center mr-auto d-flex">
                            <li class="nav-item d-flex align-items-center">
                                <a href="#" class="btn btn-outline-login1 text-center"
                                    style="font-size: 1rem; font-weight: bold;">
                                    
                                    <x-language>banner.get_started</x-language>
                                    <x-svg>{{ asset('assets/svg/landing/banner/getStarted.svg') }}</x-svg>
                                </a>

                                <a href="#" class="btn btn-outline-landing1 text-center ml-3"
                                    style="font-size: 1rem; font-weight: bold;">
                                    <x-language>banner.learn_more</x-language>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="margin-top: -30px; margin-bottom: -80px;">
                <img class="img-fluid" src="{{ asset('assets_landing/images/landingbanner.svg') }}" alt='' loading="lazy"/>
            </div>
        </div>
    </div>
</section>
