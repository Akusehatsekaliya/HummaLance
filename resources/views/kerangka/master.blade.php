<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="" type="image/png">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite('resources/js/app.js')

    @yield('head')

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

    <style>
        .custom-card {
            position: fixed;
            bottom: 25px;
            right: 25px;
            width: 100%;
            max-width: 290px;
            height: 70px;
            background: #353535;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: left;
            backdrop-filter: blur(10px);
            transition: 0.5s ease-in-out;
            z-index: 9999;
        }

        .custom-card:hover {
            cursor: pointer;
            transform: scale(1.05);
        }

        .custom-img {
            width: 50px;
            height: 50px;
            margin-left: 10px;
            border-radius: 10px;
        }

        .custom-card:hover>.img {
            transition: 0.5s ease-in-out;
            background: linear-gradient(#9198e5, #712020);
        }

        .custom-textBox {
            width: calc(100% - 90px);
            margin-left: 10px;
            color: white;
            font-family: 'Poppins' sans-serif;
        }

        .custom-textContent {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .custom-span {
            font-size: 10px;
        }

        .custom-h1 {
            font-size: 16px;
            font-weight: bold;
        }

        .custom-p {
            font-size: 12px;
            font-weight: lighter;
        }
    </style>
    <script>
        function toReact() {
            location.href = location.pathname.replace("admin", "react/admin");
        }
    </script>
</head>

<body>
    <div class="custom-card" onclick="toReact()">
        <div class="custom-img">
            <img src="https://react.dev/favicon-32x32.png" alt="" style="width: 100%;">
        </div>
        <div class="custom-textBox">
            <div class="custom-textContent">
                <p class="custom-h1" style="padding-top: 15px;height: 20px;">Admin Versi React</p>
            </div>
            <p class="custom-p">Click aku untuk berpindah ke halaman admin versi react!</p>
            <div>
            </div>
        </div>
    </div>
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
