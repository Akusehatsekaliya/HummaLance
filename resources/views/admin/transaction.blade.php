@extends('kerangka.master')
@section('content')
    <div class="page-heading">
        <h3>Transaction</h3>
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
                                    <th>PROJECT</th>
                                    <th>INFLUENCER</th>
                                    <th>COMPANY</th>
                                    <th>AMOUNT</th>
                                    <th>DATE</th>
                                    <th>STATUS</th>
                                    <th>DETAIL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-500">1</td>
                                    <td class="text-bold-500">e-commerce</td>
                                    <td class="text-bold-500">user</td>
                                    <td class="text-bold-500">company</td>
                                    <td class="text-bold-500">Rp. 1.000.000</td>
                                    <td class="text-bold-500">7 November 2024</td>
                                    <td class="text-bold-500">completed</td>
                                    <td>
                                        <button type="button" class="btn text-secondary" ><i class="bi bi-eye-fill"></i></button>
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
