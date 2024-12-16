@include('landing.layout.auth')
<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gurdeep singh osahan">
    <meta name="author" content="Gurdeep singh osahan">
    <meta name="msapplication-navbutton-color" content="#01ABFE">

    <title>CLOCKER</title>
    @vite('resources/js/app.js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- logo title --}}
    <link rel="icon" type="image/png" href="{{ asset('assets_landing/images/CLOCKER.png') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets_landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="{{ asset('assets_landing/vendor/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Material Design Icons -->
    <link href="{{ asset('assets_landing/vendor/icons/css/materialdesignicons.min.css') }}" media="all"
        rel="stylesheet" type="text/css">
    <!-- Slick -->
    <link href="{{ asset('assets_landing/vendor/slick-master/slick/slick.css') }}" rel="stylesheet" type="text/css">
    <!-- Lightgallery -->
    <link href="{{ asset('assets_landing/vendor/lightgallery-master/dist/css/lightgallery.min.css') }}"
        rel="stylesheet">
    <!-- Select2 CSS -->
    <link href="{{ asset('assets_landing/vendor/select2/css/select2-bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets_landing/vendor/select2/css/select2.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets_landing/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_landing/css/landing.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_landing/css/home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    {{-- <link rel="stylesheet" href="{{ asset('assets_landing/css/dark.css') }}"> --}}

    <style>
        @media (max-width: 575.98px) {
            body {
                overflow-x: hidden;
            }

            .row {
                margin-right: unset !important;
                margin-left: unset !important;
            }

            .col-lg-5 p {
                margin-left: unset !important;
            }

            [data-bs-toggle="collapse-closest"] {
                cursor: pointer;
            }

            .sm-none {
                display: none !important;
            }

            .none-sm {
                display: none !important;
            }

            .text-sm-left {
                text-align: left !important;
            }

            .mb-sm-none {
                margin-bottom: unset !important;
            }

            .mb-sm-1 {
                margin-bottom: 1rem !important;
            }

            .pl-sm-1 {
                padding-left: 1rem !important;
            }

            .sm-pl-2 {
                padding-left: 2rem !important;
            }

            .sm-mb-none {
                margin-bottom: unset !important;
            }

            .sm-ml-none {
                margin-left: unset !important;
            }

            .sm-mt-none {
                margin-top: unset !important;
            }

            .sm-mr-none {
                margin-right: unset !important;
            }

            .sm-mb-auto {
                margin-bottom: auto !important;
            }

            .sm-ml-auto {
                margin-left: auto !important;
            }

            .sm-mt-auto {
                margin-top: auto !important;
            }

            .sm-mr-auto {
                margin-right: auto !important;
            }

            .navbar-nav {
                margin-left: unset;
                margin-right: unset;
            }

            .collapsed {
                position: fixed;
                left: 0;
                bottom: 0;
                max-width: 100%;
                overflow: hidden;
            }

            .collapsed>.navbar-nav {
                margin-left: unset;
                margin-right: unset;
                display: unset;
                width: 100%;
            }

            html:has(.collapsed) body {
                overflow: hidden;
            }

            .footer-list {
                margin-bottom: unset;
            }

            .collapse-sm {
                margin-bottom: 36px;
            }

            .sm-mr-auto {
                margin-right: auto !important;
            }
        }
    </style>

    @yield('style')
    @stack('links')
</head>

<body>
    @include('landing.layout.navbar')

    @yield('content')
    @stack('contents')




    @if (request()->routeIs(['register', 'login', 'onboard']))
        @include('landing.layout.footer')
    @endif

    <script src="{{ asset('assets_landing/vendor/jquery/jquery.min.js') }}"></script>
    {{-- <script src="{{ asset('assets_landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}
    <script src="{{ asset('assets_landing/vendor/slick-master/slick/slick.js') }}"></script>
    <script src="{{ asset('assets_landing/vendor/lightgallery-master/dist/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('assets_landing/vendor/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets_landing/js/custom.js') }}"></script>
    <script src="{{ asset('assets_landing/js/landing.js') }}"></script>
    @yield('script')
    @stack('scripts')
</body>

</html>
