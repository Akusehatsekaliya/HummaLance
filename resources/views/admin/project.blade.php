@extends('kerangka.master')

@section('content')
    <div class="page-heading">
        <h3>Project</h3>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive ">
                        <table class="table" id="table2">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>PROJECT</th>
                                    <th>CATEGORY</th>
                                    <th>USER</th>
                                    <th>DESCRIPTION</th>
                                    <th>BUDGET</th>
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
    </script>
@endsection
