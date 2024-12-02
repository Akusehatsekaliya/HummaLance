<nav class="navbar navbar-expand-lg navbar-light topbar static-top shadow-sm bg-white osahan-nav-top px-0">
    <div class="container">
        <!-- Sidebar Toggle (Topbar) -->
        <a class="navbar-brand" href="#"><img src="{{ asset('assets_landing/images/Asset 15.png') }}"
                alt=""></a>
        <!-- Topbar Search -->
        <form class="d-none d-sm-inline-block form-inline mr-auto mw-100 navbar-search">
            <div class="input-group" style="width: 460px;">
                <input type="text" class="form-control bg-white small" placeholder="Find Services..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-success" type="button">
                        <i class="fa fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Topbar Navbar -->
        @auth
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav1">
                    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                        <a class="nav-link1" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('work') ? 'active' : '' }} }}">
                        <a class="nav-link1" href="{{ route('work') }}">Work</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link1" href="#">Service</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link1" href="#">Community</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link1" href="#" style="color: #0081BF">Become a Freelancer</a>
                    </li>
                </ul>
            </div>


            <ul class="navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications d-sm-none">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" href="#" id="searchDropdown"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow-sm animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Find Services..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                {{-- Notification --}}
                <li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts"
                        href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-bell">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>
                    </a>
                    <div class="notification-badge">81</div>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                        aria-labelledby="navbarDropdownAlerts">
                        <h6 class="dropdown-header dropdown-notifications-header">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-bell mr-2">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                            Alerts Center
                        </h6>
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <div class="dropdown-notifications-item-icon bg-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-activity">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                            </div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">December 29, 2020</div>
                                <div class="dropdown-notifications-item-content-text">This is an alert message. It's
                                    nothing serious, but it requires your attention.</div>
                            </div>
                        </a>
                        <a class="dropdown-item dropdown-notifications-footer" href="alerts.html">View All Alerts</a>
                    </div>
                </li>

                {{-- email --}}
                <li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages"
                        href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-mail">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </a>
                    <div class="notification-badge">11</div>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                        aria-labelledby="navbarDropdownMessages">
                        <h6 class="dropdown-header dropdown-notifications-header">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-mail mr-2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                </path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            Message Center
                        </h6>
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <img class="dropdown-notifications-item-img" src="images/user/s7.png">
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                <div class="dropdown-notifications-item-content-details">Emily Fowler · 58m</div>
                            </div>
                        </a>
                        <a class="dropdown-item dropdown-notifications-footer" href="messages.html">Read All Messages</a>
                    </div>
                </li>

                {{-- Profile --}}
                <li class="nav-item dropdown no-arrow no-caret dropdown-user">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
                        href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><img class="img-fluid"
                            src="{{ auth()->user()->getAvatar() ?? asset('assets_landing/images/user/s4.png') }}"></a>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                        aria-labelledby="navbarDropdownUserImage">
                        <h6 class="dropdown-header d-flex align-items-center">
                            <img class="dropdown-user-img"
                                src="{{ auth()->user()->getAvatar() ?? asset('assets_landing/images/user/s4.png') }}">
                            <div class="dropdown-user-details">
                                <div class="dropdown-user-details-name">{{ auth()->user()->name }}</div>
                                <div class="dropdown-user-details-email">{{ auth()->user()->email }}</div>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/profile">
                            <div class="dropdown-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                    </path>
                                </svg>
                            </div>
                            Account
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <div class="dropdown-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                            </div>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        @endauth
    </div>
</nav>
