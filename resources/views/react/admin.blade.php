<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel React</title>

    @viteReactRefresh
    @vite('resources/scripts/admin.jsx')

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('template-admin/assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('template-admin/assets/css/main/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('template-admin/assets/css/main/detail.css') }}">

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('template-admin/assets/css/shared/iconly.css') }}">

    {{-- <script src="{{ asset('template-admin/assets/compiled/js/app.js') }}"></script> --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">



    <style>
        .card-header {
            position: absolute;
        }

        #table1_filter {
            margin-left: auto;

        }

        #table1_filter {
            margin-left: auto;
        }

        #table1_paginate {
            margin-left: auto;

        }

        #table1_paginate {
            margin-left: auto;
        }

        #table2_filter {
            margin-left: auto;
        }

        #table2_paginate {
            margin-left: auto;
        }

        #table10_filter {
            margin-left: auto;
        }

        #table10_paginate {
            margin-left: auto;
        }

        .image-preview-container {
            position: relative;
            width: 465px;
            max-width: 'fit-content';
            height: 310px;
            border-radius: 15px;
            overflow: hidden;
            border: 2px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }

        .image-preview-container img {
            max-width: 100%;
            height: 100%;
            object-fit: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .pencil-icon {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background-color: white;
            border-radius: 50%;
            padding: 10px;
            cursor: pointer;
            border: 2px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
        }

        .pencil-icon i {
            font-size: 18px;
            color: #000;
            line-height: 0;
        }

        .upload-input input[type="file"] {
            display: none;
        }


        /* Responsiveness for Mobile */
        @media (max-width: 576px) {
            .dropdown-menu {
                left: 0;
                /* Tetap sejajar dengan elemen */
                right: auto;
                width: 100%;
                /* Sesuaikan dengan layar untuk tampilan rapi */
                margin-top: 0.5rem;
                /* Tambahkan jarak sedikit */
            }

            .dropdown-menu.show {
                display: inline-table;
            }
        }
    </style>

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
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <div id="app"></div>

    <script src="{{ asset('template-admin/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('template-admin/assets/js/app.js') }}"></script>
</body>

</html>