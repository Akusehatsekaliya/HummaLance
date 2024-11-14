<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="" type="image/png">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('style')

    @include('include.style')
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
