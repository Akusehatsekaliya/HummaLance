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
