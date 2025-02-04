<div id="main" style="position: sticky; top: 0; z-index: 1030;">
    <nav class="navbar navbar-expand-lg shadow-sm ms-auto p-0">
        <div class="container-fluid">
            <button class="navbar-toggler sidebar-hide" style="height: fit-content; margin-top: 10px;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="ms-auto" id="navbarContent">
                <ul class="navbar-nav ms-auto align-items-center" style="flex-direction: unset;">
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link" href="#" id="notificationDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-bell-fill" style="font-size: 1.5rem;"></i>
                            <span class="badge bg-danger rounded-pill"
                                style="position: absolute; top: 4px; left: 77%; transform: translateX(-50%); font-size: 0.7rem; border-width: 1px;">1</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationDropdown"
                            id="notification">
                            <li>
                                <h6 class="dropdown-header">Notifikasi</h6>
                            </li>
                            <li><a class="dropdown-item" href="#">Tidak ada notifikasi yang belum dibaca</a></li>
                            <li><a class="dropdown-item text-center text-primary" href="#">Lihat Semua</a></li>
                        </ul>
                    </li>

                    <!-- User Profile -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <div class="avatar avatar-online position-relative">
                                <img src="{{ auth()->user()->getAvatar(asset('avatar.jpg')) }}" alt="User Avatar"
                                    class="rounded-circle" width="32" height="32" style="object-fit: cover;">
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end border rounded" aria-labelledby="userDropdown"
                            style="margin-top: 5px;">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar avatar-online">
                                                <img src="{{ auth()->user()->getAvatar(asset('avatar.jpg')) ?? asset('avatar.jpg') }}"
                                                    alt="User Avatar" class="rounded-circle" width="40"
                                                    height="40" style="object-fit: cover;">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="fw-medium d-block">{{ auth()->user()->name ?? "none" }}</span>
                                            <small class="text-muted">{{ auth()->user()->email ?? "none" }}</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                        class="bi bi-box-arrow-right"></i>
                                    Keluar</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- / Navbar -->

</div>

@push('style')
<style>
    #main {
        position: sticky;
        top: 0;
        z-index: 1030;
    }
</style>
@endpush
