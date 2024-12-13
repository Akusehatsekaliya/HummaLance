@include('landing.layout.auth')
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gurdeep singh osahan">
    <meta name="author" content="Gurdeep singh osahan">
    <meta name="msapplication-navbutton-color" content="#01ABFE">

    <title>CLOCKER</title>
    @viteReactRefresh
    @vite('resources/scripts/landing.jsx');

    {{-- logo title --}}
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets_landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome-->
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets_landing/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_landing/css/landing.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_landing/css/home.css') }}" rel="stylesheet">

    {{-- <link rel="stylesheet" href="{{ asset('assets_landing/css/dark.css') }}"> --}}

    @yield('style')
    @stack('links')
</head>

<body>

    <div id="app"></div>



    <script src="{{ asset('assets_landing/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets_landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_landing/js/landing.js') }}"></script>
    @yield('script')
    @stack('scripts')

    <script>
        // loadStreamingContent("http://127.0.0.1:8000/landing/about")
        async function loadStreamingContent(url) {
            try {
                const response = await fetch(url);
                const reader = response.body.getReader();
                const decoder = new TextDecoder();

                // Membuka dokumen baru
                document.open();
                let buffer = '';

                while (true) {
                    const {
                        done,
                        value
                    } = await reader.read();
                    if (done) break;

                    // Decode chunk data
                    const text = decoder.decode(value, {
                        stream: true
                    });

                    buffer += text;
                    console.log(buffer);
                    // Tulis konten ke halaman
                    document.write(buffer);
                }

                // Menutup dokumen setelah selesai
                document.close();
            } catch (error) {
                console.error('Error:', error);
                // document.body.innerHTML = '<h1>Error loading content</h1>';
            }
        }
    </script>
</body>

</html>
