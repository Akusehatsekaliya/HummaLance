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
                        <table class="table" id="table10">
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
        <div class="modal-dialog modal-lg custom-modal" role="document" style="margin-top: 20px;">
            <div class="modal-content">
                <div class="modal-header">
                    <img class="modal-title" src="{{ asset('assets_landing/images/Asset 15.png') }}" alt=""
                        style="width: 120px;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="header">
                        <div class="logo">
                            {{-- Kodecolor --}}
                        </div>
                        <div class="search-bar">
                            {{-- <input placeholder="Search" type="text"/> --}}
                        </div>
                        <div class="nav-links">
                            <a href="#">
                                <span class="badge bg-light-primary text-primary">Freelancer</span>

                            </a>
                            <a class="messages" href="#">
                                Messages
                                <span class="badge">
                                    4
                                </span>
                            </a>
                        </div>
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
                                <h3>
                                    Skills
                                </h3>
                                <div class="item">
                                    <span id="skills"></span>
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
                            <div class="actions">
                                <button class="btn">
                                    Send message
                                </button>
                                <button class="btn">
                                    Contacts
                                </button>
                                <button class="btn">
                                    Report user
                                </button>
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

                            <div class="tab-content" id="timeline" style="max-height: 400px; overflow-y: auto;">
                                <!-- Timeline Item 1 -->
                                <div class="timeline-item border-b border-gray-300 py-3 px-4">
                                    <div class="timeline-content ml-10 bg-white shadow-sm rounded-lg p-4">
                                        <h5 class="timeline-title font-semibold text-lg">User Name</h5>
                                        <p class="timeline-description text-gray-600">Completed the project task "Design
                                            UI" on
                                            <strong class="font-medium text-black">November 25, 2024</strong>.
                                        </p>
                                        <span class="timeline-time text-sm text-gray-500">2 hours ago</span>
                                    </div>
                                </div>

                                <!-- Timeline Item 2 -->
                                <div class="timeline-item border-b border-gray-300 py-3 px-4">
                                    <div class="timeline-content ml-10 bg-white shadow-sm rounded-lg p-4">
                                        <h5 class="timeline-title font-semibold text-lg">User Name</h5>
                                        <p class="timeline-description text-gray-600">Commented on the post "UI/UX
                                            Discussion" at
                                            <strong class="font-medium text-black">November 24, 2024</strong>.
                                        </p>
                                        <span class="timeline-time text-sm text-gray-500">1 day ago</span>
                                    </div>
                                </div>

                                <!-- Timeline Item 3 -->
                                <div class="timeline-item border-b border-gray-300 py-3 px-4">
                                    <div class="timeline-content ml-10 bg-white shadow-sm rounded-lg p-4">
                                        <h5 class="timeline-title font-semibold text-lg">User Name</h5>
                                        <p class="timeline-description text-gray-600">Marked task "Build Landing Page" as
                                            In Progress on
                                            <strong class="font-medium text-black">November 23, 2024</strong>.
                                        </p>
                                        <span class="timeline-time text-sm text-gray-500">3 days ago</span>
                                    </div>
                                </div>

                                <!-- Timeline Item 4 -->
                                <div class="timeline-item py-3 px-4">
                                    <div class="timeline-content ml-10 bg-white shadow-sm rounded-lg p-4">
                                        <h5 class="timeline-title font-semibold text-lg">User Name</h5>
                                        <p class="timeline-description text-gray-600">Task "Fix bugs in API" was rejected
                                            due to
                                            incomplete documentation on <strong class="font-medium text-black">November 22,
                                                2024</strong>.
                                        </p>
                                        <span class="timeline-time text-sm text-gray-500">4 days ago</span>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
            var table = $('#table10').DataTable({
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
                            let colorClass = data === 'active' ?
                                'bg-light-success text-success' :
                                'bg-light-danger text-danger';
                            return `<span class="badge ${colorClass} p-2">${data.charAt(0).toUpperCase() + data.slice(1)}</span>`;
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
                const table = $('#table10').DataTable();
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

        // scrip tab detail user
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
    </script>
@endsection
