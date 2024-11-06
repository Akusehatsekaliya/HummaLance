<nav class="navbar navbar-expand-lg navbar-light bg-white osahan-nav-mid px-0 border-top shadow-sm" style="z-index:1000;">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/aboutUs">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Jobs
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="/jobs">Jobs 1</a>
                        <a class="dropdown-item" href="/profile">Profile</a>
                        {{-- <a class="dropdown-item" href="product-detail.html">List Detail</a>
                        <a class="dropdown-item" href="profile.html">Profile</a>
                        <a class="dropdown-item" href="company-profile.html">Company Profile</a>
                        <a class="dropdown-item" href="alerts.html">Alerts</a>
                        <a class="dropdown-item" href="messages.html">Messages</a> --}}
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/chat">Chat</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Other Pages
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="login.html">Login</a>
                        <a class="dropdown-item" href="register.html">Register</a>
                        <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                        <a class="dropdown-item" href="faq.html">FAQ</a>
                        <a class="dropdown-item" href="404.html">404 Page</a>
                        <a class="dropdown-item" href="blank.html">Blank Page</a>
                    </div>
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
            @if (Route::currentRouteName() === 'register')


            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">
                    <span>Login</span></a>
            </li>
            @elseif (Route::currentRouteName() === 'login')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">
                    <span>Register</span></a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">
                    <span>Login</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">
                    <span>Register</span></a>
            </li>
            @endif
        </ul>
    </div>
</nav>
