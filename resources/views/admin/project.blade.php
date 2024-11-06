@extends('kerangka.master')
@section('content')
    <div class="page-heading">
        <h3>Project</h3>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive ">
                        <table class="table" id="table1">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAME</th>
                                    <th>DESCRIPTION</th>
                                    <th>BUDGET</th>
                                    <th>USER</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-500">1</td>
                                    <td class="text-bold-500">UI/UX</td>
                                    <td class="text-bold-500">UI/UX</td>
                                    <td class="text-bold-500">1.000.000</td>
                                    <td class="text-bold-500">USER</td>
                                    <td>

                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
