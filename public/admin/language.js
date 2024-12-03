$(document).ready(function() {
    var {
        table
    } = $('#table10').AjaxDataTable({
        onCreate: {
            modal: $('#tambahModal'),
            text: 'Add Data',
            className: 'btn btn-primary'
        },
        onDelete: {
            modal: $('#deleteModal'),
        },
        options: {
            layout: {
                topStart: {
                    buttons: ["create"]
                },
                topEnd: $(`<div class="input-group">
  <input class="form-control me-4" placeholder="Cari data&hellip;" id="searchInput" />
  </div>`),
                bottomStart: {
                    info: {
                        text: 'Menampilkan _START_ dari _END_ hasil'
                    }
                },
            }
        },
        ajax: "#",
        columns: [{
                data: 'DT_RowIndex',
                orderable: false,
                searchable: false,
            },
            {
                data: 'name',
                name: 'name',
                render: (data, _, {
                        id
                    }) =>
                    `<a href="{{ route('admin.language.detail', '') }}/${id}">${data}</a>`,
            },
            {
                data: 'locale',
                name: 'locale'
            },
            {
                data: 'id',
                name: 'id',
                orderable: false,
                searchable: false,
                render: (data, type, row) => {
                    console.log(row);
                    const editButton =
                        `<button type="button" class="btn text-warning edit"><i class="bi bi-pen-fill"></i></button>`;
                    const deleteButton =
                        `<button type="button" class="btn text-danger delete"><i class="bi bi-trash3-fill"></i></button>`;
                    return editButton + deleteButton;
                }
            }
        ]
    });

    $('#roleFilter').change(function() {
        table.draw();
    });
});
