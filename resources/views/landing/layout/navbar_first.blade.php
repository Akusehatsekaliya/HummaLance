<nav class="navbar navbar-expand-lg navbar-light topbar static-top shadow-sm bg-white osahan-nav-top px-0">
    <div class="container">
        <!-- Sidebar Toggle (Topbar) -->
        <a class="navbar-brand" href="#"><img src="{{ asset('icon.png') }}" alt=""></a>
        <!-- Topbar Search -->
        <form class="d-none d-sm-inline-block form-inline mr-auto mw-100 navbar-search">
            <div class="input-group">
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
                <ul class="navbar-nav">
                    <li class="nav-item1 active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item1">
                        <a class="nav-link" href="/aboutUs">Work</a>
                    </li>
                    <li class="nav-item1">
                        <a class="nav-link" href="#">Service</a>
                    </li>
                    <li class="nav-item1">
                        <a class="nav-link" href="#">Community</a>
                    </li>
                    <li class="nav-item1">
                        <a class="nav-link" href="#">Become a Freelancer</a>
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

                {{-- notifications --}}
                <li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications">
                    <div class="icon">
                        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts"
                            href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bell"
                                class="svg-inline--fa fa-bell fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512">
                                <path fill="currentColor"
                                    d="M224 512c35.3 0 64-28.7 64-64H160c0 35.3 28.7 64 64 64zm215.4-149.3c-20.9-21.5-55.4-53.6-55.4-154.7 0-77.7-54.5-139.2-127.9-155.2V32c0-17.7-14.3-32-32-32s-32 14.3-32 32v20.8C118.5 69.8 64 131.3 64 209c0 101.1-34.5 133.2-55.4 154.7-6 6.2-8.6 14.1-8.6 22.3 0 17.4 13.9 32 32 32h384c18.1 0 32-14.6 32-32 0-8.2-2.6-16.1-8.6-22.3z">
                                </path>
                            </svg>
                            <div class="notification-badge">8</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                            aria-labelledby="navbarDropdownAlerts">
                            <h6 class="dropdown-header dropdown-notifications-header">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-bell mr-2">
                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                </svg>
                                Notifications
                            </h6>
                            <a class="dropdown-item dropdown-notifications-item" href="#!">
                                <div class="dropdown-notifications-item-icon bg-danger">
                                    <svg class="svg-inline--fa fa-exclamation-triangle fa-w-18" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="exclamation-triangle"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M569.517 440.013C587.975 472.007 564.806 512 527.94 512H48.054c-36.937 0-59.999-40.055-41.577-71.987L246.423 23.985c18.467-32.009 64.72-31.951 83.154 0l239.94 416.028zM288 354c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z">
                                        </path>
                                    </svg>
                                    <!-- <i class="fas fa-exclamation-triangle"></i> -->
                                </div>
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-details">December 8, 2020</div>
                                    <div class="dropdown-notifications-item-content-text">Critical system failure, systems
                                        shutting down.</div>
                                </div>
                            </a>
                            {{-- <a class="dropdown-item dropdown-notifications-footer" href="alerts.html">View All Alerts</a> --}}
                        </div>
                    </div>
                </li>

                {{-- email --}}
                <li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications">
                    <div class="icon">

                        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages"
                            href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope"
                                class="svg-inline--fa fa-envelope fa-w-16" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M502.3 190.8L327.4 338.3c-22.9 19.6-55.8 19.6-78.7 0L9.7 190.8C3.9 186.2 0 179.2 0 171.6V48c0-26.5 21.5-48 48-48h416c26.5 0 48 21.5 48 48v123.6c0 7.6-3.9 14.6-9.7 19.2zM464 64H48c-8.8 0-16 7.2-16 16v23.2l192 164.8c13.3 11.4 32.7 11.4 46 0L480 103.2V80c0-8.8-7.2-16-16-16zm-16 384H64c-35.3 0-64-28.7-64-64V192c0-7.6 3.9-14.6 9.7-19.2l218.7 187.8c22.9 19.6 55.8 19.6 78.7 0l218.7-187.8c5.8 4.6 9.7 11.6 9.7 19.2v192c0 35.3-28.7 64-64 64z">
                                </path>
                            </svg>
                            <div class="notification-badge">11</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                            aria-labelledby="navbarDropdownMessages">
                            <h6 class="dropdown-header dropdown-notifications-header">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail mr-2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                Email
                            </h6>
                            <a class="dropdown-item dropdown-notifications-item" href="#!">
                                <img class="dropdown-notifications-item-img" src="images/user/s7.png">
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        laborum.</div>
                                    <div class="dropdown-notifications-item-content-details">Emily Fowler · 58m</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>

                {{-- favorite --}}
                <li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications">
                    <div class="icon">
                        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages"
                            href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart"
                                class="svg-inline--fa fa-heart fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M462.3 62.7c-54.5-46.4-136-38.3-186.4 15.8L256 98.6l-19.9-20.1c-50.3-54.1-131.8-62.2-186.4-15.8C7.4 82.4-10.6 150.2 10.3 205.8c19.6 51.4 73.1 106.1 168.5 176.7L256 448l77.2-65.5c95.4-70.6 148.9-125.3 168.5-176.7 20.9-55.6 2.9-123.4-39.4-143.1z">
                                </path>
                            </svg>
                            <div class="notification-badge">3</div>
                        </a>
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
