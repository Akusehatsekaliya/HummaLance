<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    {{-- logo title --}}
    <link rel="icon" type="image/png" href="{{ asset('assets_landing/images/CLOCKER.png') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets_landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome-->
    <link href="{{ asset('assets_landing/vendor/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Material Design Icons -->
    <link href="{{ asset('assets_landing/vendor/icons/css/materialdesignicons.min.css') }}" media="all"
        rel="stylesheet" type="text/css">

    <link href="{{ asset('assets_landing/css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_landing/css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        label {
            font-weight: 500;
        }
    </style>
    @yield('style')
</head>

<body>
    <section>
        <div class="container">
            <div class="row justify-content-center d-flex">
                <div class="col-lg-11 py-4">
                    <div class="justify-content-between d-flex">
                        <x-svg>{{ asset('assets/svg/landing/logo-login.svg') }}</x-svg>
                        <p class="text-landing mb-0">{{ __('register.join_as_a_freelancer') }} <span
                                class="text-body-2">or</span>
                            {{ __('register.join_as_a_company') }}</p>
                    </div>
                    <hr class="custom-hr">

                </div>

                @yield('content')

            </div>
        </div>
    </section>
    @yield('script')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
