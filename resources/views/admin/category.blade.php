@extends('kerangka.master')

@section('content')
    <div class="page-heading">
        <h3>Category</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inlineForm">
                        Add Category
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive ">
                        <table class="table" id="table2">
                            <thead>
                                <tr>
                                    <th width="15%">NO</th>
                                    <th>CATEGORY</th>
                                    <th width="25%">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal Add -->
    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Add Category</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="{{ route('admin.category.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <label for="email">Name: </label>
                        <div class="form-group">
                            <input id="name" type="text" name="name" placeholder="name category"
                                class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Save</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal Edit -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Category</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                <form id="editCategoryForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="editName">Category Name</label>
                            <input type="text" class="form-control" id="editName" name="name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Category</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                <form action="" id="confirmDeleteBtn">
                    <div class="modal-body">
                        Are you sure you want to delete this category?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#table2').DataTable({
                processing: true,
                serverSide: true,
                ajax: "#",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
        });


        $('#table2').on('click', '.edit-btn', function() {
            var id = $(this).data('id');
            var name = $(this).data('name');

            $('#editCategoryForm').attr('action', '/admin/category/' + id);
            $('#editName').val(name);

            $('#editModal').modal('show');
        });

        $('#editCategoryForm').on('submit', function(e) {
            e.preventDefault();

            var actionUrl = $(this).attr('action');

            $.ajax({
                url: actionUrl,
                method: 'PUT',
                data: $(this).serialize(),
                success: function(response) {
                    if (response.success) {
                        $('#editModal').modal('hide');
                        $('#table2').DataTable().ajax.reload();

                        Swal.fire({
                            icon: 'success',
                            title: 'Category Updated Successfully',
                            text: response.message,
                            showConfirmButton: true,
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Update Failed',
                            text: 'Failed to update category',
                            showConfirmButton: true,
                        });
                    }
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON?.errors;
                    if (errors) {
                        let errorMessage = '';
                        $.each(errors, function(key, error) {
                            errorMessage += '- ' + error + '<br>';
                        });

                        Swal.fire({
                            icon: 'error',
                            title: 'Error Updating Category',
                            html: errorMessage,
                            showConfirmButton: true,
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Unexpected Error',
                            text: 'An unexpected error occurred',
                            showConfirmButton: true,
                        });
                    }
                }
            });
        });

        $('#table2').on('click', '.delete-btn', function() {
            var id = $(this).data('id');
            $('#confirmDeleteBtn').data('id', id);
            $('#deleteModal').modal('show');
        });

        $('#confirmDeleteBtn').on('submit', function() {
            var id = $(this).data('id');

            $.ajax({
                url: '/admin/category/' + id,
                method: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Delete Successfully',
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
                        text:
                            'Terjadi kesalahan saat memperbarui status!',
                        showConfirmButton: true,
                    });
                }
            });
        });
    </script>
@endsection
