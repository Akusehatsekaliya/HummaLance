@include('components.alert')
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gurdeep singh osahan">
    <meta name="author" content="Gurdeep singh osahan">
    <base href="{{ asset('assets_landing') }}/">
    {{-- <base href="{{ asset('storage') }}/"> --}}
    <title>HummaLance</title>
    {{-- logo title --}}
    <link rel="icon" type="image/png" href="{{ asset('assets_landing/images/fav.svg') }}">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('assets_landing/css/test/style.css')}}" />
    <link href="{{ asset('assets_landing/css/test/index.css')}}" rel="stylesheet" />

    @yield('style')
    @stack('links')
  </head>

  <body>
    @yield('login')
    @if (!request()->routeIs(['register', 'login', 'onboard']))
      {{-- navbar 1 --}}
      @include('home.layout.navbar_first')
      {{-- navbar 2 --}}
      @include('home.layout.navbar_end')
    @endif
    {{-- banner --}}
    {{-- @include('landing.banner.index') --}}
    {{-- post_user --}}
    {{-- @include('landing.post_user.index') --}}
    {{-- jobs --}}
    {{-- @include('landing.jobs_user.index') --}}
    {{-- ordered --}}
    {{-- @include('landing.ordered.index') --}}

    @yield('content')
    @stack('contents')

    {{-- <div class="testi-wrap pt-5">
        <div class="container">
            <div class="testimonial">
                <div class="video-modal">
                    <div class="picture-wrapper">
                        <img src="images/1440-haerfest-2x.jpg">
                    </div>
                </div>
                <div class="text-content">
                    <p>"Being a small but growing brand, we have to definitely do a lot more with less. And when you
                        want to create a business bigger than yourself, you’re going to need help. And that’s what Maer
                        does"
                    </p>
                    <span>Tim and Dan Joo, Co-founders</span>
                    <img alt="Company logo" src="images/haerfest-logo.png" loading="lazy">
                </div>
            </div>
        </div>
    </div> --}}

    <!--       guides  -->
    {{-- <div class="guide-wrapper py-5">
        <div class="container">
            <h2>
                Maer
                Guides
                <a href="#" class="float-right">See More guides></a>
            </h2>
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="guide">
                        <img src="{{ asset('landing_asests/images/guide-01.jpg') }}">
                        <div class="content">
                            <h6>Create a Website</h6>
                            <p>Building a stunning website from A to Z</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="guide">
                        <img src="{{ asset('landing_asests/images/guide-02.jpg') }}">
                        <div class="content">
                            <h6>Grow With Digital Marketing</h6>
                            <p>Promoting your business online</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="guide">
                        <img src="{{ asset('landing_assets/images/guide-03.jpg') }}">
                        <div class="content">
                            <h6>Build a Strong Brand</h6>
                            <p>Differentiating yourself from the competition</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}

    @if (!request()->routeIs(['register', 'login', 'onboard']))
      <!-- get started -->
      {{-- <div>
        <div class="get-started">
          <div class="content">
            <h2>Find Freelance Services For Your Business Today</h2>
            <p>We've got you covered for all your business needs</p>
            <a href="#" class="c-btn c-fill-color-btn">Get Started</a>
          </div>
        </div>
      </div> --}}

      {{-- footer --}}
      @include('home.layout.footer')
    @endif

    <script src="{{ asset('assets_landing/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets_landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_landing/vendor/slick-master/slick/slick.js') }}"></script>
    <script src="{{ asset('assets_landing/vendor/lightgallery-master/dist/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('assets_landing/vendor/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets_landing/js/custom.js') }}"></script>
    <script>
      function navigateWithAnimation(element, url) {
        element.classList.add('animate');

        setTimeout(() => {
          window.location.href = url; // Redirect URL after animation
        }, 400); // Delay matches the CSS transition duration

        setTimeout(() => {
          element.classList.remove('animate');
        }, 800);
      }
    </script>
    @yield('script')
    @stack('scripts')
  </body>

</html>
