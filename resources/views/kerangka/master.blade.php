<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="" type="image/png">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('style')
    @stack('style')

    @include('include.style')
    <style>
        @media (min-width: 1025px) {
            #notification {
                right: -79px !important;
                top: 58px !important;
            }
        }

        @media (min-width: 990px) and (max-width: 1024px) {
            #notification {
                right: -64px !important;
                top: 58px !important;
            }
        }

        @media (max-width: 989px) {
            #notification {
                right: -64px !important;
                top: 58px !important;
            }
        }
    </style>
</head>

<body>
    <div id="app">

        @include('include.sidebar')
        @include('include.navbar')

        <div id="main">
            {{-- <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header> --}}

            {{-- <div class="page-heading">
                <h3></h3>
            </div> --}}
            @yield('content')

            @include('include.footer')
        </div>
    </div>

    @include('include.script')
    @yield('script')
</body>

</html>
