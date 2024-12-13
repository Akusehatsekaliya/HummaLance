<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel React</title>

    @viteReactRefresh
    @vite('resources/scripts/admin.jsx')
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
</head>

<body>
    <div id="app"></div>

    <script src="{{ asset('template-admin/assets/js/bootstrap.js') }}"></script>
</body>

</html>
