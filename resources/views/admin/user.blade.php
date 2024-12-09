@extends('kerangka.master')

@section('content')
    <div class="page-heading">
        <h3>Users</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio.</p>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <!-- Role Filter Dropdown -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <select id="roleFilter" class="form-select" style="width: 130px;">
                                <option value="">All Roles</option>
                                <option value="client">Client</option>
                                <option value="freelancer">Freelancer</option>
                            </select>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table" id="tableuser">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>ROLE</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document" style="margin-top: 20px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this data? This action cannot be undone.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form id="deleteForm" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end --}}

    {{-- modal detail --}}
    <div id="detailModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl custom-modal modal-centered" role="document" style="margin-top: 20px;">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="justify-content-between d-flex">
                        <img class="modal-title" src="{{ asset('assets_landing/images/Asset 15.png') }}" alt=""
                            style="width: 120px;">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="header">
                        <div class="logo">
                            {{-- Kodecolor --}}
                        </div>
                        <div class="search-bar">
                            {{-- <input placeholder="Search" type="text"/> --}}
                        </div>
                        {{-- <div class="nav-links">
                            <span class="badge bg-light-primary text-primary">Freelancer</span>
                        </div> --}}
                    </div>
                    <div class="container">
                        <div class="profile-sidebar">
                            <img alt="Profile picture of a man looking sideways" height="275" width="250"
                                class="rounded-circle img-fluid"
                                src="https://storage.googleapis.com/a1aa/image/R47AYiWekQ3rAKemSec2JXSoLDSpWeHCnnEEZWvf3dUrELe8E.jpg" />
                            <div class="work">
                                <h3>
                                    <span id="firstName"></span>
                                </h3>
                                <div class="item">
                                    <strong>
                                        Spotify New York
                                    </strong>
                                    <span class="primary">
                                        Primary
                                    </span>
                                    <span>
                                        Karangploso, Malang
                                    </span>
                                </div>
                            </div>
                            <div class="skills">
                                <h3 class="fw-semibold d-flex align-items-center">
                                    Skills
                                </h3>
                                <div class="item">
                                    <span id="skills"></span>
                                </div>
                                <h3 class="fw-semibold d-flex align-items-center">
                                    Role
                                </h3>
                                <div class="item">
                                    <span class="badge bg-light-primary text-primary">Freelancer</span>
                                </div>
                            </div>
                        </div>
                        <div class="profile-content">
                            <div class="header">
                                <h2>
                                    CLOCKER
                                </h2>
                                <span class="bookmark" id="statusLogin">
                                </span>
                            </div>
                            <div class="row">
                                <div class="actions">
                                    <button class="btn btn-outline-admin">
                                        Send message
                                    </button>
                                    <button class="btn btn-outline-admin">
                                        Contacts
                                    </button>
                                    <button class="btn btn-outline-admin">
                                        Report user
                                    </button>
                                </div>
                            </div>
                            <div class="tabs-container">
                                <div class="tabs">
                                    <div class="tab active" onclick="openTab(event, 'about')">
                                        About
                                    </div>
                                    <div class="tab" onclick="openTab(event, 'timeline')">
                                        Report
                                    </div>
                                    <div class="tab" onclick="openTab(event, 'activity')">
                                        Activity
                                    </div>
                                    <div class="tab" onclick="openTab(event, 'transaction-statistics')">
                                        Transaction Statistics
                                    </div>
                                    <div class="tab" onclick="openTab(event, 'engagement-statistics')">
                                        Engagement Statistics
                                    </div>
                                    <div class="tab" onclick="openTab(event, 'account-status')">
                                        Account Status
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content active" id="about">
                                <div class="row">
                                    <!-- Bagian Contact Information -->
                                    <div class="col-md-6">
                                        <div class="contact-info">
                                            <h3>Contact Information</h3>
                                            <div class="item">
                                                <i class="fa-solid fa-phone"></i>
                                                <strong>Phone:</strong>
                                                <span id="phone"></span>
                                            </div>
                                            <div class="item">
                                                <i class="fa-solid fa-location-dot"></i>
                                                <strong>Address:</strong>
                                                <span id="address"></span>
                                            </div>
                                            <div class="item">
                                                <i class="fa-solid fa-envelope"></i>
                                                <strong>E-mail:</strong>
                                                <span>
                                                    <a href="" id="email"></a>
                                                </span>
                                            </div>
                                            <div class="item">
                                                <i class="fa-solid fa-link"></i>
                                                <strong>Site:</strong>
                                                <span>
                                                    <a href="http://www.jeremyrose.com">www.jeremyrose.com</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Bagian Basic Information -->
                                    <div class="col-md-6">
                                        <div class="basic-info">
                                            <h3>Basic Information</h3>
                                            <div class="item">
                                                <strong>Birthday:</strong>
                                                <span id="birthday"></span>
                                            </div>
                                            <div class="item">
                                                <strong>Gender:</strong>
                                                <span id="gender"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content" id="timeline" style="max-height: 350px; overflow-y: auto;">
                                <!-- Search and Filter Section -->
                                <div class="search-filter-container mb-0"
                                    style="position: sticky; top: 0; background: white; z-index: 10; padding: 10px 0;">
                                    <div class="search-bar1" style="display: inline-block;">
                                        <input type="text" placeholder="Search...">
                                        <i class="fas fa-search icon icon-right search"
                                            style="margin-left: -25px; cursor: pointer;"></i>
                                    </div>
                                    <div class="filter1" style="display: inline-block; position: relative;">
                                        <!-- Dropdown Select Awal -->
                                        <select id="filter" class="filter" onchange="handleFilterChange()">
                                            <option value="">Filter</option>
                                            <option value="category">Category Report</option>
                                            <option value="status">Status Report</option>
                                            <option value="date">Tanggal Report</option>
                                        </select>
                                        <i class="bi bi-filter icon icon-right" id="filter-icon"></i>
                                    </div>

                                    <!-- Dropdown untuk kategori -->
                                    <div class="filter1" id="category-dropdown"
                                        style="display: none; position: relative;">
                                        <select style="padding-right:10px;">
                                            <option value="category1">Category 1</option>
                                            <option value="category2">Category 2</option>
                                            <option value="category3">Category 3</option>
                                        </select>
                                        <span id="category-arrow" class="arrow"
                                            onclick="toggleDropdown('category')">&#x2193;</span> <!-- Down arrow -->
                                    </div>

                                    <!-- Dropdown untuk status -->
                                    <div class="filter1" id="status-dropdown"
                                        style="display: none; margin-right:0; position: relative;">
                                        <select style="padding-right:10px;">
                                            <option value="pending">Pending</option>
                                            <option value="approved">Approved</option>
                                            <option value="rejected">Rejected</option>
                                        </select>
                                        <span id="status-arrow" class="arrow"
                                            onclick="toggleDropdown('status')">&#x2193;</span> <!-- Down arrow -->
                                    </div>

                                    <!-- Input untuk tanggal -->
                                    <div
                                        style="display: inline-block; background-color: #fff; border-radius: 25px; padding: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                                        <input type="date" id="date-input"
                                            style="border: none; outline: none;font-size: 1rem; text-align: center" />
                                    </div>


                                </div>

                                <!-- Timeline Items -->
                                <div class="timeline-item border-b border-gray-300 py-3 px-4" style="margin-top: 5px;">
                                    <div class="timeline-content ml-10 bg-white shadow-sm rounded-lg p-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <img alt="Profile picture of a man looking sideways" height="70"
                                                    width="60" class="rounded-circle img-fluid"
                                                    src="https://storage.googleapis.com/a1aa/image/R47AYiWekQ3rAKemSec2JXSoLDSpWeHCnnEEZWvf3dUrELe8E.jpg" />
                                                <h5 class="timeline-title font-semibold text-lg m-0">User Name</h5>
                                            </div>
                                            <div>
                                                <p class="timeline-description text-gray-600">
                                                    Completed the project task "Design UI" on
                                                    <strong class="font-medium text-black">November 25, 2024</strong>.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Time Information -->
                                        <span class="timeline-time text-sm text-gray-500 block mt-2">2 hours ago</span>
                                    </div>
                                </div>

                                <div class="timeline-item border-b border-gray-300 py-3 px-4">
                                    <div class="timeline-content ml-10 bg-white shadow-sm rounded-lg p-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <div
                                                    style="position: relative; display: inline-block; width: 60px; height: 70px;">
                                                    <img alt="Profile picture of a man looking sideways" height="70"
                                                        width="60" class="rounded-circle img-fluid"
                                                        src="https://storage.googleapis.com/a1aa/image/R47AYiWekQ3rAKemSec2JXSoLDSpWeHCnnEEZWvf3dUrELe8E.jpg" />
                                                    <i class="fa-solid fa-circle" title="online"
                                                        style="
                                                            position: absolute;
                                                            top: 3px;
                                                            right: 5px;
                                                            color: #28a745;
                                                            font-size: 12px;">
                                                    </i>
                                                </div>

                                                <h5 class="timeline-title font-semibold text-lg m-0">User Name</h5>
                                            </div>
                                            <div>
                                                <p class="timeline-description text-gray-600">
                                                    Completed the project task "Design UI" on
                                                    <strong class="font-medium text-black">November 25, 2024</strong>.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Time Information -->
                                        <span class="timeline-time text-sm text-gray-500 block mt-2">2 hours ago</span>
                                    </div>
                                </div>

                                <div class="timeline-item border-b border-gray-300 py-3 px-4">
                                    <div class="timeline-content ml-10 bg-white shadow-sm rounded-lg p-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <img alt="Profile picture of a man looking sideways" height="70"
                                                    width="60" class="rounded-circle img-fluid"
                                                    src="https://storage.googleapis.com/a1aa/image/R47AYiWekQ3rAKemSec2JXSoLDSpWeHCnnEEZWvf3dUrELe8E.jpg" />
                                                <h5 class="timeline-title font-semibold text-lg m-0">User Name</h5>
                                            </div>
                                            <div>
                                                <p class="timeline-description text-gray-600">
                                                    Completed the project task "Design UI" on
                                                    <strong class="font-medium text-black">November 25, 2024</strong>.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Time Information -->
                                        <span class="timeline-time text-sm text-gray-500 block mt-2">2 hours ago</span>
                                    </div>
                                </div>

                                <div class="timeline-item border-b border-gray-300 py-3 px-4">
                                    <div class="timeline-content ml-10 bg-white shadow-sm rounded-lg p-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <img alt="Profile picture of a man looking sideways" height="70"
                                                    width="60" class="rounded-circle img-fluid"
                                                    src="https://storage.googleapis.com/a1aa/image/R47AYiWekQ3rAKemSec2JXSoLDSpWeHCnnEEZWvf3dUrELe8E.jpg" />

                                                <h5 class="timeline-title font-semibold text-lg m-0">User Name</h5>
                                            </div>
                                            <div>
                                                <p class="timeline-description text-gray-600">
                                                    Completed the project task "Design UI" on
                                                    <strong class="font-medium text-black">November 25, 2024</strong>.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Time Information -->
                                        <span class="timeline-time text-sm text-gray-500 block mt-2">2 hours ago</span>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content" id="activity">
                                <div class="page-content">
                                    <section class="row">
                                        <div class="col-12 col-lg-12">
                                            <div class="row row-cols-3">
                                                <!-- Jumlah Proyek Diambil -->
                                                <div class="col">
                                                    <div class="card rounded"
                                                        style="background-color: white; border-radius: 8px;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                                        <div class="card-body px-4 py-4-5">
                                                            <div class="row">
                                                                <div
                                                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                                    <div class="stats-icon green mb-2">
                                                                        <i class="iconly-boldFolder"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                                    <h6 class="text-muted font-semibold">project taken</h6>
                                                                    <h6 class="font-extrabold mb-0">15</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Jumlah Proyek Selesai -->
                                                <div class="col">
                                                    <div class="card rounded"
                                                        style="background-color: white; border-radius: 8px;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                                        <div class="card-body px-4 py-4-5">
                                                            <div class="row">
                                                                <div
                                                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                                    <div class="stats-icon blue mb-2">
                                                                        <i class="iconly-boldTick-Square"></i>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                                    <h6 class="text-muted font-semibold">project completed
                                                                    </h6>
                                                                    <h6 class="font-extrabold mb-0">12</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Jumlah Proyek Dibatalkan -->
                                                <div class="col">
                                                    <div class="card rounded"
                                                        style="background-color: white; border-radius: 8px;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                                        <div class="card-body px-4 py-4-5">
                                                            <div class="row">
                                                                <div
                                                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                                    <div class="stats-icon bg-gradient mb-2" style="background-color: #ff5555;">
                                                                        <i class="iconly-boldClose-Square"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                                    <h6 class="text-muted font-semibold">project cancelled
                                                                    </h6>
                                                                    <h6 class="font-extrabold mb-0">3</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Rata-rata Rating -->
                                                <div class="col">
                                                    <div class="card rounded"
                                                        style="background-color: rgb(255, 255, 255); border-radius: 8px;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                                        <div class="card-body px-4 py-4-5">
                                                            <div class="row">
                                                                <div
                                                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                                    <div class="stats-icon bg-warning bg-gradient mb-2">
                                                                        <i class="iconly-boldStar"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                                    <h6 class="text-muted font-semibold">Rating</h6>
                                                                    <div class="flex items-center">
                                                                        <!-- Bintang -->
                                                                        <i class="fas fa-star text-warning"></i>
                                                                        <i class="fas fa-star text-warning"></i>
                                                                        <i class="fas fa-star text-warning"></i>
                                                                        <i class="fas fa-star text-warning"></i>
                                                                        <i
                                                                            class="fas fa-star-half-alt text-warning"></i>
                                                                        <!-- Rating -->
                                                                        <h6 class="font-extrabold mb-0 ml-2">4.8</h6>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Ulasan Terbaru -->

                                                <div class="col">
                                                    <div class="card rounded"
                                                        style="background-color: white; border-radius: 8px;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                                        <div class="card-body px-4 py-4-5">
                                                            <div class="row">
                                                                <div
                                                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                                    <div class="stats-icon bg-gradient red mb-2">
                                                                        <i class="iconly-boldChat"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                                    <h6 class="text-muted font-semibold">Latest Reviews
                                                                    </h6>
                                                                    <p class="text-muted mb-0" id="review-text">"Very
                                                                        fast work and
                                                                        satisfactory results."</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Kategori Favorit -->
                                                <div class="col">
                                                    <div class="card rounded"
                                                        style="background-color: white; border-radius: 8px;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                                        <div class="card-body px-4 py-4-5">
                                                            <div class="row">
                                                                <div
                                                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                                    <div class="stats-icon purple bg-gradient mb-2">
                                                                        <i class="iconly-boldCategory"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                                    <h6 class="text-muted font-semibold">Kategori Favorit
                                                                    </h6>
                                                                    <h6 class="font-extrabold mb-0">Desain Grafis</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Waktu Pengerjaan -->
                                                <div class="col">
                                                    <div class="card rounded"
                                                        style="background-color: white; border-radius: 8px;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                                        <div class="card-body px-4 py-4-5">
                                                            <div class="row">
                                                                <div
                                                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                                    <div class="stats-icon bg-secondary bg-gradient mb-2">
                                                                        <i class="iconly-boldTime-Circle"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                                    <h6 class="text-muted font-semibold">Waktu Pengerjaan
                                                                    </h6>
                                                                    <h6 class="font-extrabold mb-0">5 Hari</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                            </div>

                            <div class="tab-content overflow-auto max-h-[80vh]" id="transaction-statistics">
                                <!-- Filter Section -->
                                <div class="d-flex justify-content-end mb-2">
                                    <!-- Search Input -->
                                    <div class="position-relative d-flex align-items-center search-bar1">
                                        <i class="fa fa-search position-absolute left-1 top-1/2 transform -translate-y-1/2 text-gray-400"
                                            style="left: 7%;"></i>
                                        <input type="text" id="searchInput" placeholder="search transaction..."
                                            {{-- class="w-full border border-gray-300 rounded-lg ps-5 pe-4 py-2 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-500" --}}
                                            style="border-radius: 4px;margin-left: 18px;padding-right: 1px;">
                                    </div>
                                    <!-- Date Filter -->
                                    <div class="ms-2 mr-1" style="display: inline-block; background-color: #fff; border-radius: 25px; padding: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">                                        <input type="date" id="startDate"
                                            {{-- class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" --}}
                                            style="border: none; outline: none;font-size: 1rem; text-align: center"/>
                                    </div>
                                </div>

                                <!-- Table Section -->
                                <div class="overflow-x-auto">
                                    <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                                        <thead class="bg-gray-100 text-left">
                                            <tr>
                                                <th class="py-3 px-4 border-b">Transaction ID</th>
                                                <th class="py-3 px-4 border-b">Date</th>
                                                <th class="py-3 px-4 border-b">Amount</th>
                                                <th class="py-3 px-4 border-b">Status</th>
                                                <th class="py-3 px-4 border-b">User</th>
                                                <th class="py-3 px-4 border-b">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="transactionTableBody">
                                            <tr class="hover:bg-gray-50">
                                                <td class="py-3 px-4 border-b">TXN123456</td>
                                                <td class="py-3 px-4 border-b">2024-12-01</td>
                                                <td class="py-3 px-4 border-b text-green-600">$150.00</td>
                                                <td class="py-3 px-4 border-b text-blue-600">Completed</td>
                                                <td class="py-3 px-4 border-b">John Doe</td>
                                                <td class="py-3 px-4 border-b">
                                                    <button type="button" class="btn text-primary"
                                                        title="detail transaction" data-bs-toggle="modal"
                                                        data-bs-target="#modalTransactions"><i
                                                            class="bi bi-info-circle-fill"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="hover:bg-gray-50">
                                                <td class="py-3 px-4 border-b">TXN123457</td>
                                                <td class="py-3 px-4 border-b">2024-12-02</td>
                                                <td class="py-3 px-4 border-b text-red-600">$200.00</td>
                                                <td class="py-3 px-4 border-b text-gray-500">Pending</td>
                                                <td class="py-3 px-4 border-b">Jane Smith</td>
                                                <td class="py-3 px-4 border-b">
                                                    <button type="button" class="btn text-primary"
                                                        title="detail transaction" data-bs-toggle="modal"
                                                        data-bs-target="#modalTransactions"><i
                                                            class="bi bi-info-circle-fill"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="hover:bg-gray-50">
                                                <td class="py-3 px-4 border-b">TXN123458</td>
                                                <td class="py-3 px-4 border-b">2024-12-03</td>
                                                <td class="py-3 px-4 border-b text-green-600">$50.00</td>
                                                <td class="py-3 px-4 border-b text-green-600">Completed</td>
                                                <td class="py-3 px-4 border-b">Alice Johnson</td>
                                                <td class="py-3 px-4 border-b">
                                                    <button type="button" class="btn text-primary"
                                                        title="detail transaction" data-bs-toggle="modal"
                                                        data-bs-target="#modalTransactions"><i
                                                            class="bi bi-info-circle-fill"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-content overflow-auto max-h-[80vh]" id="engagement-statistics">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4">
                                    <!-- Jumlah Login -->
                                    <div class="bg-white shadow-md rounded-lg p-6">
                                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Jumlah Login</h3>
                                        <p class="text-2xl font-bold text-green-500">150</p>
                                        <p class="text-sm text-gray-500 mt-2">Total login yang dilakukan pengguna.</p>
                                    </div>

                                    <!-- Jumlah Proposal Dikirim -->
                                    <div class="bg-white shadow-md rounded-lg p-6">
                                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Jumlah Proposal Dikirim</h3>
                                        <p class="text-2xl font-bold text-blue-500">35</p>
                                        <p class="text-sm text-gray-500 mt-2">Penawaran yang dibuat untuk proyek.</p>
                                    </div>

                                    <!-- Jumlah Pesan Terkirim -->
                                    <div class="bg-white shadow-md rounded-lg p-6">
                                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Jumlah Pesan Terkirim</h3>
                                        <p class="text-2xl font-bold text-purple-500">120</p>
                                        <p class="text-sm text-gray-500 mt-2">Pesan dalam sistem platform.</p>
                                    </div>

                                    <!-- Jumlah Sengketa -->
                                    <div class="bg-white shadow-md rounded-lg p-6">
                                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Jumlah Sengketa</h3>
                                        <p class="text-2xl font-bold text-red-500">2</p>
                                        <p class="text-sm text-gray-500 mt-2">Masalah atau dispute yang melibatkan pengguna.</p>
                                    </div>

                                    <!-- Waktu Rata-rata Respons -->
                                    <div class="bg-white shadow-md rounded-lg p-6">
                                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Waktu Rata-rata Respons</h3>
                                        <p class="text-2xl font-bold text-yellow-500">4 jam</p>
                                        <p class="text-sm text-gray-500 mt-2">Berapa cepat pengguna merespons pesan atau tawaran.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-content overflow-auto max-h-[80vh]" id="account-status">
                                <div class="bg-white p-6 rounded-lg shadow-md">
                                    <h4 class="text-2xl font-semibold text-gray-800 mb-4">Account Status</h4>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Account Status -->
                                        <div>
                                            <h6 class="font-semibold text-gray-700">Account Status:</h6>
                                            <p class="text-gray-500">Active</p>
                                        </div>

                                        <!-- Registration Date -->
                                        <div>
                                            <h6 class="font-semibold text-gray-700">Registration Date:</h6>
                                            <p class="text-gray-500">January 15, 2023</p>
                                        </div>

                                        <!-- Last Login -->
                                        <div>
                                            <h6 class="font-semibold text-gray-700">Last Login:</h6>
                                            <p class="text-gray-500">December 3, 2024, 10:00 AM</p>
                                        </div>

                                        <!-- Duration of Activity -->
                                        <div>
                                            <h6 class="font-semibold text-gray-700">Duration of Activity:</h6>
                                            <p class="text-gray-500">2 years, 10 months</p>
                                        </div>

                                        <!-- Account Verified -->
                                        <div>
                                            <h6 class="font-semibold text-gray-700">Account Verified:</h6>
                                            <p class="text-gray-500">Yes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="justify-content-end d-flex">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- end --}}
@endsection
@section('style')
    <style>
        #timeline::-webkit-scrollbar {
            width: 6px;
        }

        #timeline::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        #timeline::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }

        #timeline::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        select {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .arrow {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 18px;
            color: #555;
        }

        .tabs-container {
            overflow-x: auto;
            /* Enable horizontal scrolling */
            -webkit-overflow-scrolling: touch;
            /* Smooth scrolling on mobile */
            scrollbar-width: none;
            /* For Firefox */
            -ms-overflow-style: none;
            /* For Internet Explorer */
        }

        .tabs-container::-webkit-scrollbar {
            display: none;
            /* Hide scrollbar for Webkit browsers (Chrome, Safari) */
        }

        .tabs {
            display: flex;
            flex-wrap: nowrap;
        }

        .tab {
            padding: 10px 20px;
            cursor: pointer;
            display: inline-block;
            text-align: center;
            white-space: nowrap;
            /* border: 1px solid #ccc; */
            /* border-radius: 4px; */
            margin-right: 8px;
            /* transition: background-color 0.3s ease; */
        }

        .tab:hover {
            background-color: #f0f0f0;
        }
    </style>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var table = $('#tableuser').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "#",
                    data: function(d) {
                        d.role = $('#roleFilter').val();
                    }
                },
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                    },
                    {
                        data: 'first_name',
                        name: 'first_name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'role',
                        name: 'role'
                    },
                    {
                        data: 'status',
                        name: 'status',
                        render: function(data, type, row) {
                            let colorClass = '';
                            let label = '';

                            if (data === 'active') {
                                colorClass = 'bg-light-success text-success';
                                label = data.charAt(0).toUpperCase() + data.slice(1);
                            } else if (data === 'banned') {
                                colorClass = 'bg-light-danger text-danger';
                                label = data.charAt(0).toUpperCase() + data.slice(1);
                            } else if (data === '--') {
                                colorClass = 'bg-light-secondary text-secondary';
                                label = 'null';
                            }

                            return `<span class="badge ${colorClass} p-2">${label}</span>`;
                        }

                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            $('#roleFilter').change(function() {
                table.draw();
            });
        });
        $(`[data-bs-target="#detailModal"]`).click(function() {
            console.log("test");


        })
        $('#detailModal').on('show.bs.modal', function(event) {
            const button = $(event.relatedTarget);

            var userId = button.data('id');
            console.log(userId);

            $.ajax({
                url: 'users/showDetail/' + userId,
                method: 'GET',
                success: function(data) {
                    if (data.data.error) {
                        alert(data.data.error);
                    } else {
                        $('#detailModal .modal-body #firstName').text(data.data.first_name || '-');
                        $('#detailModal .modal-body #lastName').text(data.data.last_name || '-');
                        $('#detailModal .modal-body #email').text(data.data.email || '-');
                        $('#detailModal .modal-body #phone').text(data.data.phone || '-');
                        $('#detailModal .modal-body #birthday').text(data.data.birthday || '-');
                        $('#detailModal .modal-body #address').text(data.data.address || '-');
                        $('#detailModal .modal-body #gender').text(data.data.gender || '-');
                        $('#detailModal .modal-body #skills').text(data.data.skills || '-');
                        $('#detailModal .modal-body #statusLogin').text(data.data.statusLogin || '-');

                        var skillsElement = $('#detailModal .modal-body #skills');
                        if (data.data.skills === 'ui/ux') {
                            skillsElement.text('UI/UX Design').removeClass().addClass(
                                'badge bg-light-primary text-primary');
                        } else if (data.data.skills === 'Web - Design') {
                            skillsElement.text('Web Design').removeClass().addClass(
                                'badge bg-light-danger text-danger');
                        } else if (data.data.skills === 'full stack') {
                            skillsElement.text('Full Stack Developer').removeClass().addClass(
                                'badge bg-light-succes text-succes');
                        } else {
                            skillsElement.text('-').removeClass();
                        }

                        var genderElement = $('#detailModal .modal-body #gender');
                        if (data.data.gender === 'male') {
                            genderElement
                                .removeClass('text-danger text-primary')
                                .addClass('text-primary')
                                .html(
                                    '<i class="fas fa-mars"></i> Male');
                        } else if (data.data.gender === 'female') {
                            genderElement
                                .removeClass('text-primary')
                                .addClass('text-danger')
                                .html(
                                    '<i class="fas fa-venus"></i> Female');
                        } else {
                            genderElement
                                .removeClass('text-primary text-danger')
                                .text('-');
                        }

                        var monthNames = [
                            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                        ];

                        var birthday = data.data.birthday;
                        if (birthday) {
                            var date = new Date(birthday);

                            var formattedDate = ('0' + date.getDate()).slice(-2) + ' ' +
                                monthNames[date.getMonth()] + ' ' +
                                date.getFullYear();

                            $('#detailModal .modal-body #birthday').text(formattedDate);
                        } else {

                            $('#detailModal .modal-body #birthday').text('-');
                        }

                        var statusLoginElement = $('#detailModal .modal-body #statusLogin');

                        if (data.data.statusLogin === 'online') {

                            statusLoginElement.html(
                                '<i class="fa-solid fa-circle" style="color: #28a745;"></i> Online');
                        } else if (data.data.statusLogin === 'offline') {
                            statusLoginElement.html(
                                '<i class="fa-solid fa-circle" style="color: #d91919;"></i> Offline'
                            );
                        } else {
                            statusLoginElement.text('-');
                        }

                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching user details:', error);
                    alert('Failed to fetch user details.');
                }
            });

        });

        $(document).ready(function() {
            $(document).on('click', '.toggle-status', function() {
                var userId = $(this).data('id');
                const table = $('#tableuser').DataTable();
                const button = $(this);

                $.ajax({
                    url: '{{ route('admin.user.toggleStatus', ['user' => '__id__']) }}'.replace(
                        '__id__', userId),
                    type: 'PUT',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Status Updated Successfully',
                            text: response.message,
                            showConfirmButton: true,
                        }).then(function() {
                            table.ajax.reload();
                        });
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'An error occurred while changing the user status.',
                            showConfirmButton: true,
                        });
                    }
                });
            });
        });

        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].classList.remove("active");
            }
            tablinks = document.getElementsByClassName("tab");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active");
            }
            document.getElementById(tabName).classList.add("active");
            evt.currentTarget.classList.add("active");
        }

        $(document).on('click', '.accept-account, .reject-account', function() {
            const userId = $(this).data('id');
            const status = $(this).data('status');
            const table = $('#tableuser').DataTable();

            $.ajax({
                url: 'users/update-status-register',
                type: 'POST',
                data: {
                    id: userId,
                    status: status,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Status Updated Successfully',
                        text: response.message,
                        showConfirmButton: true,
                    }).then(function() {
                        table.ajax.reload();
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error Updating Status',
                        text: 'Terjadi kesalahan saat memperbarui status!',
                        showConfirmButton: true,
                    });
                }
            });
        });

        function handleFilterChange() {
            // Ambil nilai dari dropdown utama
            const filterValue = document.getElementById('filter').value;

            // Sembunyikan semua elemen tambahan
            document.getElementById('category-dropdown').style.display = 'none';
            document.getElementById('status-dropdown').style.display = 'none';
            document.getElementById('date-input').style.display = 'none';

            // Sembunyikan semua panah
            document.getElementById('category-arrow').innerHTML = '&#x2193;'; // Down arrow
            document.getElementById('status-arrow').innerHTML = '&#x2193;'; // Down arrow

            // Tampilkan elemen yang sesuai
            if (filterValue === 'category') {
                document.getElementById('category-dropdown').style.display = 'inline-block';
                document.getElementById('category-arrow').innerHTML = '&#x2191;'; // Up arrow
            } else if (filterValue === 'status') {
                document.getElementById('status-dropdown').style.display = 'inline-block';
                document.getElementById('status-arrow').innerHTML = '&#x2191;'; // Up arrow
            } else if (filterValue === 'date') {
                document.getElementById('date-input').style.display = 'inline-block';
            }
        }


        // Fungsi untuk toggle dropdown dan mengubah panah
        function toggleDropdown(type) {
            const dropdown = document.getElementById(type + '-dropdown');
            const arrow = document.getElementById(type + '-arrow');

            // Cek apakah dropdown terbuka atau tidak
            if (dropdown.style.display === 'inline-block') {
                dropdown.style.display = 'none'; // Sembunyikan dropdown
                arrow.innerHTML = '&#x2193;'; // Ubah panah menjadi down
            } else {
                dropdown.style.display = 'inline-block'; // Tampilkan dropdown
                arrow.innerHTML = '&#x2191;'; // Ubah panah menjadi up
            }
        }
        document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.getElementById('searchInput');
            const startDate = document.getElementById('startDate');
            const tableBody = document.getElementById('transactionTableBody');
            const rows = Array.from(tableBody.getElementsByTagName('tr'));

            function filterTable() {
                const searchTerm = searchInput.value.toLowerCase();
                const filterDate = new Date(startDate.value);

                rows.forEach(row => {
                    const id = row.children[0].textContent.toLowerCase();
                    const user = row.children[4].textContent.toLowerCase();
                    const date = new Date(row.children[1].textContent);

                    const matchesSearch = id.includes(searchTerm) || user.includes(searchTerm);
                    const matchesDate = !startDate.value || date.toISOString().split('T')[0] === startDate
                        .value;

                    row.style.display = matchesSearch && matchesDate ? '' : 'none';
                });
            }

            searchInput.addEventListener('input', filterTable);
            startDate.addEventListener('change', filterTable);
        });
        // Fungsi untuk memotong teks
        function truncateText(selector, maxLength) {
            const element = document.querySelector(selector);
            if (element) {
                const text = element.textContent;
                if (text.length > maxLength) {
                    element.textContent = text.slice(0, maxLength) + "...";
                }
            }
        }

        truncateText("#review-text", 30);
    </script>
@endsection
