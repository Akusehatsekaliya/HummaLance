@extends('kerangka.master')
@section('content')
    <div class="page-heading">
        <h3>Contract</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio.</p>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <select id="roleFilter" class="form-select" style="width: 130px;">
                                <option value="" disabled selected>Status</option>
                                <option value="">All</option>
                                <option value="progress">Progres</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="table2">
                            <thead>
                                <tr>
                                    <th width="15%">No</th>
                                    <th>Name</th>
                                    <th width="24%">Project</th>
                                    <th width="17%">Date</th>
                                    <th width="25%">Status</th>
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
@endsection
@section('style')
    <style>
        .bg-success {
            background-color: green;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .bg-warning {
            background-color: yellow;
            color: black;
            padding: 5px 10px;
            border-radius: 4px;
        }
    </style>
@endsection
@section('script')
    <script>
        $(document).ready(function() {

            $('#table2').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('contracts.data') }}',
                    type: 'GET',
                    data: function(d) {
                        d.status = $('#roleFilter').val();
                    }
                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'user.name',
                        name: 'user.name'
                    },
                    {
                        data: 'project.name',
                        name: 'project.name'
                    },
                    {
                        data: null,
                        name: 'date',
                        render: function(data) {
                            return `${data.start_date} - ${data.end_date}`;
                        },
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'status',
                        name: 'status',
                        render: function(data, type, row) {
                            let colorClass = data === 'completed' ? 'bg-success text-white' :
                                'bg-warning text-dark';
                            return `<span class="badge ${colorClass} p-2">${data.charAt(0).toUpperCase() + data.slice(1)}</span>`;
                        }
                    }
                ]
            });

            $('#roleFilter').on('change', function() {
                $('#table2').DataTable().ajax.reload();
            });
        });
    </script>
@endsection
