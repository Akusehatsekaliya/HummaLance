{{-- css --}}
<link rel="stylesheet" href="{{ asset('template-admin/assets/css/main/app.css') }}">
<link rel="stylesheet" href="{{ asset('template-admin/assets/css/main/app-dark.css') }}">
<link rel="stylesheet" href="{{ asset('template-admin/assets/css/main/detail.css') }}">

{{-- <link rel="shortcut icon" href="{{asset ('template-admin/assets/images/logo/favicon.svg') }}" type="image/x-icon">
<link rel="shortcut icon" href="{{asset ('template-admin/assets/images/logo/favicon.png') }}" type="image/png"> --}}

{{-- css --}}
<link rel="stylesheet" href="{{ asset('template-admin/assets/css/shared/iconly.css') }}">

{{-- <script src="{{ asset('template-admin/assets/compiled/js/app.js') }}"></script> --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<link rel="stylesheet" href="{{ asset('template-admin/assets/css/pages/datatables.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">



<style>
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
    width: 100%;
    height: 100%;
    object-fit: cover;
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
        left: 0; /* Tetap sejajar dengan elemen */
        right: auto;
        width: 100%; /* Sesuaikan dengan layar untuk tampilan rapi */
        margin-top: 0.5rem; /* Tambahkan jarak sedikit */
    }
    .dropdown-menu.show {
    display: inline-table;
}
}

</style>
