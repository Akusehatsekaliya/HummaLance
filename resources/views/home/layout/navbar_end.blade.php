<nav class="navbar navbar-expand-lg navbar-light bg-white osahan-nav-mid px-0 border-top shadow-sm">
  <div class="container">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
      data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <style>
      .navbar-nav {
        display: flex;
        flex-wrap: nowrap;
        /* Mencegah elemen turun ke baris berikutnya */
        white-space: nowrap;
        /* Membuat teks tetap satu baris */
        -webkit-overflow-scrolling: touch;
        margin-left: 5px;
      }

      .nav-item {
        margin-right: 6px;
        /* Jarak antar item */

      }

        </style>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Graphic & Design</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/aboutUs">Programing & Tech</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Video & Animation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Music & Audio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Writing & Translation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Business</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Photography</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Finance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logo Design</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Show More <i class="fas fa-chevron-right"></i>
                    </a>
                </li>

        {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Jobs
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="/jobs">Jobs 1</a>
                        <a class="dropdown-item" href="/profile">Profile</a>
                    </div>
                </li> --}}
        {{-- <li class="nav-item">
                    <a class="nav-link" href="/chat">Chat</a>
                </li> --}}
      </ul>
    </div>
    <ul class="navbar-nav ml-auto">
      {{-- <li class="nav-item">
                <a class="nav-link" href="become-a-seller.html">
                    <i class="fa fa-fw fa-trophy"></i>
                    <span>Become A Seller</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <img class="country-flag img-fluid" src="{{ asset('assets_landing/images/flag/india.png') }}">
                    <span>English</span>
                </a>
            </li> --}}
      @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">
            <span>Login</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">
            <span>Register</span></a>
        </li>
      @endguest
    </ul>
  </div>
</nav>
