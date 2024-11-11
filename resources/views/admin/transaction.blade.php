@extends('kerangka.master')
@section('content')
    <div class="page-heading">
        <h3>Transaction</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <select id="roleFilter" class="form-select" style="width: 130px;">
                                <option value="" disabled selected>Status</option>
                                <option value="pending">Pending</option>
                                <option value="processed">Processed</option>
                                <option value="complete">Complete</option>
                                <option value="failed">Failed</option>
                            </select>
                        </div>
                    </div>
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
                                {{-- <tr>
                                    <td class="text-bold-500">1</td>
                                    <td class="text-bold-500">e-commerce</td>
                                    <td class="text-bold-500">user</td>
                                    <td class="text-bold-500">company</td>
                                    <td class="text-bold-500" style="color: red">Rp1.000.000</td>
                                    <td class="text-bold-500">7 November 2024</td>
                                    <td class="text-bold-500">
                                        <span class="badge bg-light-success">Complete</span>
                                    </td>
                                    <td>
                                        <button type="button" class="btn text-warning" ><i class="bi bi-eye-fill"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-bold-500">1</td>
                                    <td class="text-bold-500">e-commerce</td>
                                    <td class="text-bold-500">user</td>
                                    <td class="text-bold-500">company</td>
                                    <td class="text-bold-500" style="color: red">Rp1.000.000</td>
                                    <td class="text-bold-500">7 November 2024</td>
                                    <td class="text-bold-500">
                                        <span class="badge bg-light-warning">Pending</span>
                                    </td>
                                    <td>
                                        <button type="button" class="btn text-warning" ><i class="bi bi-eye-fill"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-bold-500">1</td>
                                    <td class="text-bold-500">e-commerce</td>
                                    <td class="text-bold-500">user</td>
                                    <td class="text-bold-500">company</td>
                                    <td class="text-bold-500" style="color: red">Rp1.000.000</td>
                                    <td class="text-bold-500">7 November 2024</td>
                                    <td class="text-bold-500">
                                        <span class="badge bg-light-primary">Processed</span>
                                    </td>
                                    <td>
                                        <button type="button" class="btn text-warning" ><i class="bi bi-eye-fill"></i></button>
                                    </td>
                                </tr> --}}

                                <tr>
                                    <td class="text-bold-500">1</td>
                                    <td class="text-bold-500">e-commerce</td>
                                    <td class="text-bold-500">user</td>
                                    <td class="text-bold-500">company</td>
                                    <td class="text-bold-500" style="color: red">Rp1.000.000</td>
                                    <td class="text-bold-500">7 November 2024</td>
                                    <td class="text-bold-500">
                                        <span class="badge bg-light-danger">Failed</span>
                                    </td>
                                    <td>
                                        <button type="button" class="btn text-warning" data-bs-toggle="modal"
                                            data-bs-target="#modalTransactions"><i class="bi bi-eye-fill"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>


    {{-- Modal detail --}}
    <div class="modal fade text-left" id="modalTransactions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Detail Transactions</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <p>ini detail</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Save</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
