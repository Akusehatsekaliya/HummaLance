$(document).ready(function() {
    $('#tableproject').DataTable({
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
                data: 'category_name',
                name: 'category.name'
            },
            {
                data: 'user_name',
                name: 'user.name'
            },
            {
                data: 'description',
                name: 'description'
            },
            {
                data: 'budget',
                name: 'budget',
                render: function(data, type, row) {
                    return '<strong>Rp ' + new Intl.NumberFormat('id-ID', {
                        minimumFractionDigits: 0
                    }).format(data) + '</strong>';
                }
            },
        ]
    });
});
