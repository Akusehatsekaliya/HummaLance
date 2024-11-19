@include('components.alert')
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gurdeep singh osahan">
    <meta name="author" content="Gurdeep singh osahan">
    <base href="{{ asset('storage') }}/">
    <title>CLOCKER</title>
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

    <style>
      .preloader {
        width: 100%;
        height: 100%;
        top: 0;
        position: fixed;
        z-index: 99999;
        background: #fff;
      }

      .lds-ripple {
        display: inline-block;
        position: relative;
        width: 40px;
        position: absolute;
        top: calc(50% - 3.5px);
        left: 0;
        right: 0;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>
    <div class="container"></div>
    <div class="preloader" style="display: none;">
      {{-- <img src="https://pkl.hummatech.com/preloader.png" style="width:150px" alt="loader" class="lds-ripple"> --}}
      <div class="lds-ripple">

      </div>
    </div>
    <style>
      .preloader {
        width: 100%;
        height: 100%;
        top: 0;
        position: fixed;
        z-index: 99999;
        background: #fff;
      }

      .lds-ring {
        /* change color here */
        color: #1c4c5b
      }

      .lds-ring,
      .lds-ring div {
        box-sizing: border-box;
      }

      .lds-ring {
        display: inline-block;
        width: 80px;
        height: 80px;
        position: absolute;
        top: calc(50% - 3.5px);
        left: 0;
        right: 0;
        margin: 0 auto;
      }

      .lds-ring .clock {
        box-sizing: border-box;
        display: block;
        position: absolute;
        width: 64px;
        height: 64px;
        margin: 8px;
        border: 8px solid currentColor;
        border-radius: 50%;
        /* animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite; */
        border-color: transparent currentColor currentColor currentColor;
      }

      .minute-hand,
      .hour-hand {
        width: 100px;
        height: 50px;
        display: flex;
        position: absolute;
        top: 25%;
        left: 50%;
        transform-origin: left;
        animation: hour-hand 5s linear infinite;
      }

      .hour-hand {
        left: 42.5px;
        transform: rotate(240deg);
      }

      .minute-hand {
        left: 40px;
        transform: rotate(300deg);
        animation-delay: 0.8s;
      }

      .minute-hand:before,
      .hour-hand:before {
        flex-grow: 0.5;
        content: "";
        background: currentColor;
        width: 15px;
        clip-path: polygon(0% 40%, 75% 40%, 75% 30%, 100% 47.5%, 75% 65%, 75% 55%, 0% 55%);
      }


      @keyframes hour-hand {
        0% {
          transform: rotate(0deg);
        }

        100% {
          transform: rotate(360deg);
        }
      }
    </style>
    <div class="preloader" style="display: block;">
      <div class="lds-ring">
        <div class="clock"></div>
        <div class="hour-hand"></div>
        <div class="minute-hand"></div>
        {{-- <div class="arrow-1"></div> --}}
      </div>
    </div>


    <script src="{{ asset('assets_landing/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script src="{{ asset('assets_landing/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets_landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_landing/js/jqBootstrapValidation.html') }}"></script>
    <script src="{{ asset('assets_landing/js/contact_me.html') }}"></script>
    <script src="{{ asset('assets_landing/vendor/slick-master/slick/slick.js') }}" charset="utf-8"></script>
    <script src="{{ asset('assets_landing/vendor/lightgallery-master/dist/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('assets_landing/vendor/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets_landing/js/custom.js') }}"></script>
    <script src="{{ asset('assets_landing/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
      data-cf-settings="643b16316ea0a7fbc48d654c-|49" defer></script>
  </body>
</html>
