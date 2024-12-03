// const table = $('.yajra-datatable').DataTable({
        //   columns: [{
        //       data: 'DT_RowIndex',
        //       orderable: false,
        //       searchable: false,
        //     },
        //     {
        //       data: 'picture',
        //       name: 'picture',
        //       orderable: false,
        //       searchable: false,
        //       render: (data, type) =>
        //         `<img src="{{ asset('storage/') }}/${data}" class="rounded-3" loading="lazy" height="96px">`
        //     },
        //     {
        //       data: 'title',
        //       name: 'title'
        //     },
        //     {
        //       data: 'subtitle',
        //       name: 'subtitle',
        //     },
        //     {
        //       data: 'id',
        //       orderable: false,
        //       searchable: false,
        //       render: (data, type) => {
        //         const editButton =
        //           `<button type="button" class="btn text-warning edit"><i class="bi bi-pen-fill"></i></button>`;
        //         const deleteButton =
        //           `<button type="button" class="btn text-danger delete"><i class="bi bi-trash3-fill"></i></button>`;
        //         return editButton + deleteButton;
        //       }
        //     }
        //   ]
        // })
        const {
            table
        } = $('.yajra-datatable').AjaxDataTable({
            onCreate: {
                modal: $('#tambahModal'),
                text: 'Add Data',
                className: 'btn btn-primary'
            },
            onEdit: {
                modal: $('#editModal'),
                onClick: (form, data) => {
                    form.find('img#image').attr('src', `{{ asset('storage/') }}/${data.picture}`)
                }
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
                    data: 'picture',
                    name: 'picture',
                    orderable: false,
                    searchable: false,
                    render: (data, type) =>
                        `<img src="{{ asset('storage/') }}/${data}" class="rounded-3" loading="lazy" height="96px">`
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'subtitle',
                    name: 'subtitle',
                },
                {
                    data: 'id',
                    orderable: false,
                    searchable: false,
                    render: (data, type) => {
                        const editButton =
                            `<button type="button" class="btn text-warning edit"><i class="bi bi-pen-fill"></i></button>`;
                        const deleteButton =
                            `<button type="button" class="btn text-danger delete"><i class="bi bi-trash3-fill"></i></button>`;
                        return editButton + deleteButton;
                    }
                }
            ]
        });
        let searchTimeout;

        $('#searchInput').on('input', function() {
            clearTimeout(searchTimeout);

            searchTimeout = setTimeout(function() {
                const searchTerm = $('#searchInput').val().trim();
                table.search(searchTerm).draw();
            }, 500);
        });
