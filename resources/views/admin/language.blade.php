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

                    <div class="table-responsive">
                        <table class="table" id="table10">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAME</th>
                                    <th>LOCALE</th>
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

    {{-- Modal Add --}}
    <div class="modal fade text-left" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">Add Language</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="{{ route('admin.language.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <label for="email">Name</label>
                        <div class="form-group">
                            <input id="name-create" type="text" placeholder="Add Name" class="form-control"
                                name="name">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <label for="email">Locale</label>
                        <div class="form-group">
                            <input id="locale-create" type="text" placeholder="Add Locale" class="form-control"
                                name="locale">
                            @error('locale')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" class="btn btn-primary ms-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Save</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- delete --}}
    <div id="deleteModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Data cannot be recovered if deleted</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{ route('admin.language.destroy', ':id:') }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
    </script>
@endsection
