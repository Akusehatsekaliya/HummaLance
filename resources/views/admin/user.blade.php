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
                            <div class="tabs">
                                <div class="tab active" onclick="openTab(event, 'about')">
                                    About
                                </div>
                                <div class="tab" onclick="openTab(event, 'timeline')">
                                    Report
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



                                    <!-- Dropdown untuk kategori (statis) -->
                                    <div  class="filter1" id="category-dropdown" style="display: none;">
                                        <select style="padding-right:10px;">
                                            <option value="category1">Category 1</option>
                                            <option value="category2">Category 2</option>
                                            <option value="category3">Category 3</option>
                                        </select>
                                    </div>

                                    <!-- Dropdown untuk status -->
                                    <div  class="filter1" id="status-dropdown" style="display: none; margin-right:0;">
                                        <select style="padding-right:10px;">
                                            <option value="pending">Pending</option>
                                            <option value="approved">Approved</option>
                                            <option value="rejected">Rejected</option>
                                        </select>
                                    </div>

                                    <!-- Input untuk tanggal -->
                                    <div id="date-input" style="display: none;">
                                        <input type="date" class="styled-date-input"/>
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
                    if (data.error) {
                        alert(data.error);
                    } else {
                        $('#detailModal .modal-body #firstName').text(data.first_name || '-');
                        $('#detailModal .modal-body #lastName').text(data.last_name || '-');
                        $('#detailModal .modal-body #email').text(data.email || '-');
                        $('#detailModal .modal-body #phone').text(data.phone || '-');
                        $('#detailModal .modal-body #birthday').text(data.birthday || '-');
                        $('#detailModal .modal-body #address').text(data.address || '-');
                        $('#detailModal .modal-body #gender').text(data.gender || '-');
                        $('#detailModal .modal-body #skills').text(data.skills || '-');
                        $('#detailModal .modal-body #statusLogin').text(data.statusLogin || '-');

                        var skillsElement = $('#detailModal .modal-body #skills');
                        if (data.skills === 'ui/ux') {
                            skillsElement.text('UI/UX Design').removeClass().addClass(
                                'badge bg-light-primary text-primary');
                        } else if (data.skills === 'Web - Design') {
                            skillsElement.text('Web Design').removeClass().addClass(
                                'badge bg-light-danger text-danger');
                        } else if (data.skills === 'full stack') {
                            skillsElement.text('Full Stack Developer').removeClass().addClass(
                                'badge bg-light-succes text-succes');
                        } else {
                            skillsElement.text('-').removeClass();
                        }

                        var genderElement = $('#detailModal .modal-body #gender');
                        if (data.gender === 'male') {
                            genderElement
                                .removeClass('text-danger text-primary')
                                .addClass('text-primary')
                                .html(
                                    '<i class="fas fa-mars"></i> Male');
                        } else if (data.gender === 'female') {
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

                        var birthday = data.birthday;
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

                        if (data.statusLogin === 'online') {

                            statusLoginElement.html(
                                '<i class="fa-solid fa-circle" style="color: #28a745;"></i> Online');
                        } else if (data.statusLogin === 'offline') {
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

            // Tampilkan elemen yang sesuai
            if (filterValue === 'category') {
                document.getElementById('category-dropdown').style.display = 'inline-block';
            } else if (filterValue === 'status') {
                document.getElementById('status-dropdown').style.display = 'inline-block';
            } else if (filterValue === 'date') {
                document.getElementById('date-input').style.display = 'inline-block';
            }
        }


    </script>
@endsection
