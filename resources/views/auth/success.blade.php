@extends('auth.layout.app')
@section('style')
@endsection

@section('content')
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>

    <div class="d-flex flex-column align-items-center">
        <dotlottie-player src="https://lottie.host/950b3cac-9df8-4f09-a780-a1fcf0b1422a/fc6SiqktAX.lottie"
            background="transparent" speed="1" style="width: 350px; height: 350px" loop autoplay>
        </dotlottie-player>

        <h4 class="text-center text-nowrap mt-3 success-text">
            Your freelancer account has been successfully created
        </h4>

        <style>
            .success-text {
                font-size: 1.8rem;
                color: #000000;
                font-weight: bold;
                /* text-shadow: 0 0 10px #00c6ff; */
                animation: fadeInScale 0.7s ease-out, glowEffect 1.5s infinite alternate;
            }

            @keyframes fadeInScale {
                0% {
                    opacity: 0;
                    transform: scale(0.6);
                }

                60% {
                    opacity: 1;
                    transform: scale(1.05);
                }

                100% {
                    transform: scale(1);
                }
            }
        </style>
    </div>
@endsection
