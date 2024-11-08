@include('components.alert')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gurdeep singh osahan">
    <meta name="author" content="Gurdeep singh osahan">
    <base href="{{ asset('assets_landing') }}/">
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

    @yield('style')
</head>

<body>
    @include('company.layout.header')
    @include('company.layout.side')

    @yield('content')
    @include('company.layout.footer')

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
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8dd144230c40ce22","version":"2024.10.4","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"dd471ab1978346bbb991feaa79e6ce5c","b":1}'
        crossorigin="anonymous"></script>
    <script>
        // Dapatkan elemen sidebar dan footer
        const sidebar = document.getElementById('sidebar');
        const footer = document.getElementById('footer');

        // Fungsi untuk mengatur posisi sidebar
        function handleSidebarPosition() {
            const footerTop = footer.getBoundingClientRect().top;
            const sidebarHeight = sidebar.offsetHeight;
            const sidebarTop = sidebar.getBoundingClientRect().top;

            // Jika sidebar mencapai footer, hentikan sidebar sebelum menimpa footer
            if (footerTop < sidebarHeight + 70) { // 70 adalah jarak dari atas (tinggi navbar)
                sidebar.style.position = 'absolute';
                sidebar.style.top = (window.scrollY + footerTop - sidebarHeight - 70) + 'px';
            } else {
                sidebar.style.position = 'fixed';
                sidebar.style.top = '70px'; // Sesuaikan dengan tinggi navbar
            }
        }

        // Jalankan fungsi saat menggulir
        window.addEventListener('scroll', handleSidebarPosition);
    </script>
    @yield('script')
    @stack('scripts')
</body>

</html>
