<nav class="navbar navbar-expand-lg navbar-light bg-white osahan-nav-mid px-0 border-top shadow-sm">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
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
                <li class="nav-item">
                    <a class="nav-link" href="#">Graphic & Design</a>
                </li>
                <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('about') }}">Programing & Tech</a>
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
            </ul>
        </div>
        <ul class="navbar-nav ml-auto">
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
