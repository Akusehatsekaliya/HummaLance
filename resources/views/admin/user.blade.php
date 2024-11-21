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
        <div class="modal-dialog" role="document" style="margin-top: 20px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel">User Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                                'bg-light-warning text-warning';
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

        $(document).on('click', '.toggle-status', function() {
            const userId = $(this).data('id');
            const status = $(this).data('status');
            const button = $(this);
            const table = $('#table10').DataTable();

            $.ajax({
                url: '{{ route('admin.user.toggleStatus', ['user' => '__id__']) }}'.replace('__id__',
                    userId),
                method: 'PUT',
                data: {
                    status: status,
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
                error: function(xhr, status, error) {
                    alert('Failed to change user status: ' + error);
                }
            });
        });
    </script>
@endsection
