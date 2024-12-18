<style>
    .custom-title {
        line-height: 1.50px;
        margin-top: 14px;
        margin-bottom: 50px;
        margin-left: 12px;
    }
</style>
<section class="py-5 homepage-search-block bg-landing position-relative"
    style="padding-bottom: unset !important; overflow-y: hidden;">
    <div class="container my-5" style="margin-top: unset !important;">
        <div class="row justify-content-center d-flex align-items-center">
            <div class="col-lg-7" style="">
                <div class="row" style="margin-left: unset">
                    <div style="padding: unset;">
                        <x-svg>{{ asset('assets/svg/landing/banner/Start Work Today.svg') }}</x-svg>
                    </div>
                    <div style="padding: unset;">
                        <h6 class="custom-title mb-4 text-shadow text-white font-weight-normal text-nowrap">
                            <x-language>banner.Start Work Today</x-language>
                        </h6>
                    </div>
                </div>
                <div class="homepage-search-title">
                    <h2 class="text-sm-left mb-3 text-shadow text-white font-weight-bold"><x-language>banner.headline</x-language>
                    </h2>
                    <h6 class="mb-4 text-shadow text-white font-weight-normal">
                        <x-language>banner.description</x-language></h6>
                </div>
                {{-- <div class="homepage-search-form">
                    <div class="form-row row">
                        <a href="#" class="btn btn-outline-login1 text-center"
                            style="font-size: 1rem; font-weight: bold;">

                            <x-language>banner.get_started</x-language>
                            <x-svg>{{ asset('assets/svg/landing/banner/getStarted.svg') }}</x-svg>
                        </a>

                        <a href="#" class="btn btn-outline-landing1 text-center ml-3"
                            style="font-size: 1rem; font-weight: bold;">
                            <x-language>banner.learn_more</x-language>
                        </a>

                    </div>
                </div> --}}
                <div class="homepage-search-form">
                    <div class="form-row row">
                            <a href="#" class="btn btn-outline-login1 text-center " style="font-size: 1rem; font-weight: bold;">
                                Get Started
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.7166 13.0602C20.9975 12.7789 21.1553 12.3977 21.1553 12.0002C21.1553 11.6027 20.9975 11.2214 20.7166 10.9402L15.0606 5.28116C14.7792 4.99976 14.3975 4.84167 13.9996 4.84167C13.6016 4.84167 13.22 4.99976 12.9386 5.28116C12.6572 5.56255 12.4991 5.9442 12.4991 6.34216C12.4991 6.74011 12.6572 7.12176 12.9386 7.40315L16.0346 10.5002L4.49959 10.5002C4.10177 10.5002 3.72024 10.6582 3.43893 10.9395C3.15763 11.2208 2.99959 11.6023 2.99959 12.0002C2.99959 12.398 3.15763 12.7795 3.43893 13.0608C3.72024 13.3421 4.10177 13.5002 4.49959 13.5002L16.0346 13.5002L12.9386 16.5962C12.7993 16.7355 12.6887 16.9009 12.6133 17.0829C12.5379 17.265 12.4991 17.4601 12.4991 17.6572C12.4991 17.8542 12.5379 18.0493 12.6133 18.2314C12.6887 18.4134 12.7993 18.5788 12.9386 18.7182C13.0779 18.8575 13.2433 18.968 13.4254 19.0434C13.6074 19.1188 13.8025 19.1576 13.9996 19.1576C14.1966 19.1576 14.3918 19.1188 14.5738 19.0434C14.7558 18.968 14.9213 18.8575 15.0606 18.7182L20.7166 13.0602Z" fill="#01ABFE"></path>
                                </svg>
                            </a>
                            <a href="#" class="btn btn-outline-landing1 text-center ml-3" style="font-size: 1rem; font-weight: bold;">
                                Learn More
                            </a>
                    </div>
                </div>

            </div>
            <div class="none-sm col-lg-4" style="margin-top: -30px; margin-bottom: -80px;">
                <img class="img-fluid" src="{{ asset('assets_landing/images/landingbanner.svg') }}" alt=''
                    loading="lazy" />
            </div>
        </div>
    </div>
</section>
