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
            max-width: 1200px;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 20px 0;
        }

        .header img {
            height: 50px;
        }

        .header a {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
        }

        .content {
            /* text-align: center; */
            margin-top: 50px;
        }

        .content h1 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 10px;
            margin-left: 45px;

        }

        .content p {
            font-size: 16px;
            color: #6c757d;
            margin-bottom: 40px;
        }

        .options {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-left: 12px;
        }

        .option {
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 20px;
            width: 347px;
            box-sizing: border-box;
            text-align: left;
            margin: 10px;
            position: relative;
            margin-left: 35px;

        }

        .option input {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .option i {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .option h3 {
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .option p {
            font-size: 14px;
            color: #6c757d;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 20px 0;
            margin-top: 50px;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
        }

        .footer button {
            background-color: transparent;
            border: 4px solid #f0f0f0;
            border-radius: 10px;
            padding: 8px 25px;
            font-size: 16px;
            cursor: pointer;
            color: #007bff;
        }

        /* .footer button:hover {
            background-color: #f0f0f0;
        } */


        .custom-hr {
            border: none;
            height: 0.8px;
            width: 159.6%;
            background-color: #000;
            /* margin: 20px 0; */
            margin-left: -287px;
        }

        .shift-right {
            margin-left: 45px;
        }

        .move-up {
            position: relative;
            top: -15px;
            margin: 0;
            margin-left: 45px;
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
                        <p style="margin-top: -12px; margin-right: -100px;" class="text-landing">
                            {{ __('register.join_as_a_freelancer') }} <span class="text-body-2">or</span>
                            {{ __('register.join_as_a_company') }}</p>
                    </div>
                    <hr class="custom-hr">
                </div>
                <div class="content">
                    <div>
                        <h6 class="move-up">Freelancer</h6>
                    </div>
                    <h1>
                        Some questions that might help you: first, have you ever had experience as a freelancer?
                    </h1>

                    <p class="shift-right">
                        This will let us know and can help you further in starting your career journey as a freelancer,
                        we will not tell your answer to anyone including clients and potential companies.
                    </p>

                    <div class="options">
                        <div class="option">
                            <input name="experience" type="radio" />
                            <x-svg class="vector-icon">{{ asset('assets/svg/login/freelancing.svg') }}</x-svg>

                            </i>
                            <h3 style="font-weight: bold;">
                                I'm new to freelancing
                            </h3>
                            <p class="mb-0">
                                This option will let us know if you are new to the world of freelancing.
                            </p>
                        </div>
                        <div class="option">
                            <input name="experience" type="radio" />
                            <x-svg class="vector-icon">{{ asset('assets/svg/login/experience.svg') }}</x-svg>

                            </i>
                            <h3 style="font-weight: bold;">
                                I have experience as a freelancer
                            </h3>
                            <p class="mb-0">
                                With this option we will know if you are a freelancer who has experience.
                            </p>
                        </div>
                        <div class="option">
                            <input name="experience" type="radio" />
                            <x-svg class="vector-icon">{{ asset('assets/svg/login/expert.svg') }}</x-svg>

                            </i>
                            <h3 style="font-weight: bold;">
                                I am an expert in freelancer
                            </h3>
                            <p class="mb-0">
                                By choosing this option we will know that you are an experienced expert in the world of
                                freelancing.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <button style="margin-left: 45px;">
                        Back
                    </button>
                    <a href="#" style="margin-left: 775px; margin-top: 17px;">
                        Skip if you are a job seeker
                    </a>
                    <button class="custom-button" style="background-color: #00AAFF; color: white;">
                        Next
                    </button>

                </div>
            </div>
        </div>
    </section>
</body>

</html>
