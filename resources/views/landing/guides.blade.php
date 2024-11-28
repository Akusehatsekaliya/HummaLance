@extends('landing.layout.app')
@section('content')
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


@include('landing.footer')
@endsection
