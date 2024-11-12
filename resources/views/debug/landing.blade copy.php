<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('assets_landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_landing/vendor/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <style>
      /* Nav */
      .navbar {
        box-sizing: border-box;

        position: absolute;
        height: 79px;
        left: -1px;
        right: -1px;
        top: -1px;

        background: #FFFFFF;
        border: 1px solid rgba(0, 0, 0, 0.3);
      }


      /* Container */
      .navbar .container {
        position: relative;
        left: calc(50% - 1278px/2 - 69px);
        top: calc(50% - 65px/2 + 2px);
      }

      /* icon  */
      .navbar .icon {
        position: absolute;
        width: 128px;
        height: auto;
        left: 8px;
        /* top: 14px; */

        /* background: url("icon.png"); */
      }

      /* Form */
      .search {
        position: absolute;
        height: 33.5px;
        left: 156.75px;
        right: 899.17px;
      }


      /* Input - Search */
      .search input {
        position: absolute;
        height: 39px;
        left: 0.56%;
        right: -89.68%;
        top: -2.25px;

        background: #FFFFFF;
        border: 1px solid rgba(0, 0, 0, 0.3);
        border-radius: 4px 0px 0px 4px;
      }

      /* Container */
      .search .container {
        position: absolute;
        height: 16px;
        left: 11.75px;
        right: 249.25px;
        top: 11px;
      }


      /* Button */
      .search-button {
        all: unset;
        position: absolute;
        width: 41px;
        height: 41px;
        left: 421.25px;
        top: -3.25px;

        background: linear-gradient(90deg, #21BEE8 0%, #00AAFF 100%);
        border-radius: 0px 4px 4px 0px;
      }

      /* Icon */
      .search-icon {
        position: absolute;
        width: 15px;
        height: 17px;
        left: 13px;
        top: 29px;

        transform: matrix(1, 0, 0, -1, 0, 0);
      }

      /* Vector */
      .search-vector {
        position: absolute;
        left: 0.04%;
        right: 0.04%;
        top: 100%;
        bottom: -92.86%;

        background: #FFFFFF;
        transform: matrix(1, 0, 0, -1, 0, 0);
      }
    </style>
  </head>

  <body>
    <nav class="navbar">
      <div class="container">
        <a href="" class="icon">
          <img src="{{ asset('icon.png') }}" alt="" class="img-fluid">
        </a>
        <form action="" class="search">
          <input type="search" class="">
          <button class="search-button">
            <i class="search-icon fa fa-search"></i>
          </button>
        </form>
      </div>
    </nav>

  </body>

</html>
