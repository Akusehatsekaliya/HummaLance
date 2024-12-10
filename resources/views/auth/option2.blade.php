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

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            max-width: 1200px;
            padding: 20px;
        }

        .left-section {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .right-section {
            flex: 1;
            padding: 20px;
        }

        .right-section h1 {
            font-size: 24px;
            color: #333;
        }

        .right-section ul {
            list-style: none;
            padding: 0;
        }

        .right-section ul li {
            font-size: 18px;
            color: #333;
            margin: 10px 0;
            display: flex;
            align-items: center;
        }

        .right-section ul li i {
            margin-right: 10px;
        }

        .right-section .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #00AAFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .header {
            position: absolute;
            top: 20px;
            left: 20px;
            display: flex;
            align-items: center;
        }

        .header img {
            height: 40px;
            margin-right: 10px;
        }

        .header .links {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .header .links a {
            color: #FF0000;
            text-decoration: none;
            margin-left: 20px;
        }

        .image-container {
            width: 300px;
            height: 400px;
            background-color: #D9D9D9;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-container img {
            width: 100%;
            height: auto;
            border-radius: 20px;
        }

        li {
            padding: 8px 0;
        }

        li {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        li svg,
        li img {
            width: 24px;
            height: 24px;
        }

        .text-landing {
            margin-right: -88px;
            margin-top: -13px;
        }

        .custom-hr {
            border: none;
            height: 0.8px;
            width: 159.6%;
            background-color: #000;
            /* margin: 20px 0; */
            margin-left: -287px;
        }
    </style>

</head>

<body>
    <section>
        <div class="container">
            <div class="row justify-content-center d-flex">
                <div class="col-lg-10 py-4">
                    <div class="justify-content-between d-flex">
                        <x-svg class="logo-svg">{{ asset('assets/svg/landing/logo-login.svg') }}</x-svg>
                        <p class="text-landing">{{ __('register.join_as_a_freelancer') }} <span
                                class="text-body-2">or</span>
                            {{ __('register.join_as_a_company') }}</p>
                    </div>
                    <hr class="custom-hr">
                </div>
                <div class="left-section">
                    <div class="image-container">
                        <img alt="Illustration of a person working on a laptop" height="400"
                            src="{{ asset('assets_landing/images/adventure.png') }}" />
                    </div>
                </div>
                <div class="right-section">
                    <h1 style="font-weight: bold;">
                        Hey rifaldi, Are you ready for your big
                        <span>
                            adventure
                        </span>
                        in CLOCKER?
                    </h1>
                    <ul>
                        <li>
                            <x-svg class="vector-icon">{{ asset('assets/svg/login/user.svg') }}</x-svg>
                            Complete Your Freelancer Account
                        </li>
                        <li>
                            <x-svg class="vector-icon">{{ asset('assets/svg/login/envelope.svg') }}</x-svg>
                            Apply for open roles or list services for clients to buy
                        </li>
                        <li>
                            <x-svg class="vector-icon">{{ asset('assets/svg/login/network.svg') }}</x-svg>
                            Apply for open roles or list services for clients to buy
                        </li>
                        <li>
                            <x-svg class="vector-icon">{{ asset('assets/svg/login/shield.svg') }}</x-svg>
                            Get paid safely and know we're here to help
                        </li>
                    </ul>

                    <a class="btn" href="#" style="font-weight: bold; font-size: 14px;">
                        Get Started
                        <svg width="19" height="24" viewBox="0 0 19 24" style="margin-left: 8px" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1459_649)">
                                <path
                                    d="M17.7166 13.0598C17.9975 12.7785 18.1553 12.3973 18.1553 11.9998C18.1553 11.6023 17.9975 11.221 17.7166 10.9398L12.0606 5.28079C11.7792 4.99939 11.3975 4.84131 10.9996 4.84131C10.6016 4.84131 10.22 4.99939 9.93859 5.28079C9.6572 5.56218 9.49911 5.94384 9.49911 6.34179C9.49911 6.73974 9.6572 7.12139 9.93859 7.40279L13.0346 10.4998L1.49959 10.4998C1.10177 10.4998 0.720239 10.6578 0.438934 10.9391C0.157629 11.2204 -0.000406561 11.602 -0.000406578 11.9998C-0.000406596 12.3976 0.157629 12.7791 0.438934 13.0604C0.720239 13.3418 1.10177 13.4998 1.49959 13.4998L13.0346 13.4998L9.93859 16.5958C9.79926 16.7351 9.68874 16.9005 9.61333 17.0826C9.53792 17.2646 9.49911 17.4597 9.49911 17.6568C9.49911 17.8538 9.53792 18.049 9.61333 18.231C9.68874 18.413 9.79926 18.5785 9.93859 18.7178C10.0779 18.8571 10.2433 18.9676 10.4254 19.0431C10.6074 19.1185 10.8025 19.1573 10.9996 19.1573C11.1966 19.1573 11.3918 19.1185 11.5738 19.0431C11.7558 18.9676 11.9213 18.8571 12.0606 18.7178L17.7166 13.0598Z"
                                    fill="white" /> </g>
                            <defs>
                                <clipPath id="clip0_1459_649">
                                    <rect width="24" height="19" fill="white"
                                        transform="translate(19) rotate(90)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
