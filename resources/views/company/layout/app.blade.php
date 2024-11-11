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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets_landing/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="643b16316ea0a7fbc48d654c-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8dd144230c40ce22","version":"2024.10.4","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"dd471ab1978346bbb991feaa79e6ce5c","b":1}'
        crossorigin="anonymous"></script>
    <script>
        const sidebar = document.getElementById('sidebar');
        const footer = document.getElementById('footer');

        function handleSidebarPosition() {
            const footerTop = footer.getBoundingClientRect().top;
            const sidebarHeight = sidebar.offsetHeight;
            const sidebarTop = sidebar.getBoundingClientRect().top;

            if (footerTop < sidebarHeight + 70) {
                sidebar.style.position = 'absolute';
                sidebar.style.top = (window.scrollY + footerTop - sidebarHeight - 70) + 'px';
            } else {
                sidebar.style.position = 'fixed';
                sidebar.style.top = '70px';
            }
        }

        window.addEventListener('scroll', handleSidebarPosition);
    </script>
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                        label: '# of Votes Dataset 1',
                        data: [12, 19, 3, 5, 2, 3],
                        borderWidth: 1,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)'
                    },
                    {
                        label: '# of Votes Dataset 2',
                        data: [3, 5, 2, 3, 12, 19],
                        borderWidth: 1,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)'
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
<script>
    const ctx1 = document.getElementById('myChart1');

    new Chart(ctx1, {
        type: 'doughnut',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [
                {
                    label: '# of Votes Dataset 1',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    enabled: true,
                }
            }
        }
    });
</script>


    @yield('script')
    @stack('scripts')
</body>

</html>
