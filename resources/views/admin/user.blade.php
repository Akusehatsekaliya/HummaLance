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
                            {{-- <a href="#">
                                My Contacts
                            </a>
                            <img alt="User profile picture" height="40"
                                src="https://storage.googleapis.com/a1aa/image/6Di0B47SswK7PtjVZ1CzZ9sZ03KY5n7PsQxigtj4QLOJW88E.jpg"
                                width="40" /> --}}
                        </div>
                    </div>
                    <div class="container">
                        <div class="profile-sidebar">
                            <img alt="Profile picture of a man looking sideways" height="275" width="250" class="rounded-circle"
                                src="https://storage.googleapis.com/a1aa/image/R47AYiWekQ3rAKemSec2JXSoLDSpWeHCnnEEZWvf3dUrELe8E.jpg"
                                 />
                            <div class="work">
                                <h3>
                                    Work
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
                                {{-- <div class="item">
                                    <strong>
                                        Metropolitan Museum
                                    </strong>
                                    <span class="secondary">
                                        Secondary
                                    </span>
                                    <span>
                                        525 E 68th Street
                                    </span>
                                    <span>
                                        New York, NY 10651-78 156-187-60
                                    </span>
                                </div> --}}
                            </div>
                            <div class="skills">
                                <h3>
                                    Skills
                                </h3>
                                <div class="item">
                                    <span class="badge bg-light-primary text-primary">UI/UX</span>
                                </div>
                                <div class="item">
                                    <span class="badge bg-light-danger text-danger">Web - Design</span>
                                </div>
                                <div class="item">
                                    <span class="badge bg-light-success text-success">Full Stack</span>
                                </div>
                            </div>
                        </div>
                        <div class="profile-content">
                            <div class="header">
                                <h2>
                                    CLOCKER
                                </h2>
                                <span class="location">
                                    <i class="fas fa-map-marker-alt">
                                    </i>
                                    Karangploso, Malang
                                </span>
                                <span class="bookmark">
                                    <i class="fa-solid fa-circle" style="color: #d91919;"></i>
                                </span>
                            </div>
                            {{-- <div class="header"> --}}
                                {{-- <span class="job-title"> --}}
                                    {{-- <span class="badge bg-light-primary text-primary">Freelancer</span> --}}
                                {{-- </span> --}}
                            {{-- </div> --}}
                            {{-- <div class="rankings">
                                <span class="score">
                                    8,6
                                </span>
                                <span class="stars">
                                    <i class="fas fa-star">
                                    </i>
                                    <i class="fas fa-star">
                                    </i>
                                    <i class="fas fa-star">
                                    </i>
                                    <i class="fas fa-star">
                                    </i>
                                    <i class="fas fa-star-half-alt">
                                    </i>
                                </span>
                            </div> --}}
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
                                    Timeline
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
                                                <span>+1 123 456 7890</span>
                                            </div>
                                            <div class="item">
                                                <i class="fa-solid fa-location-dot"></i>
                                                <strong>Address:</strong>
                                                <span>Karangploso, Malang Jawa Timur</span>
                                            </div>
                                            <div class="item">
                                                <i class="fa-solid fa-envelope"></i>
                                                <strong>E-mail:</strong>
                                                <span>
                                                    <a href="mailto:hello@clocker.com">hello@clocker.com</a>
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
                                                <span>June 5, 1992</span>
                                            </div>
                                            <div class="item">
                                                <strong>Gender:</strong>
                                                <span>Male</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-content" id="timeline">
                                <p>
                                    isi terserah
                                </p>
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
                        data: 'name',
                        name: 'name'
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

        $('#detailModal').on('show.bs.modal', function(event) {
            const button = $(event.relatedTarget);

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
