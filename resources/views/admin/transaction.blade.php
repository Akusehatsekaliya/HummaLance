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
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-500">1</td>
                                    <td class="text-bold-500">e-commerce</td>
                                    <td class="text-bold-500">user</td>
                                    <td class="text-bold-500">company</td>
                                    <td class="text-bold-500" style="color: red">Rp1.000.000</td>
                                    <td class="text-bold-500">7 November 2024</td>
                                    <td class="text-bold-500">
                                        <span class="text-danger badge bg-light-danger">Failed</span>
                                    </td>
                                    <td>
                                        <button type="button" class="btn text-primary" title="detail transaction"
                                            data-bs-toggle="modal" data-bs-target="#modalTransactions"><i
                                                class="bi bi-info-circle-fill"></i></button>
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
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document" style="margin-top: 20px;">
            <div class="modal-content">
                <div class="modal-header" style="background: linear-gradient(90deg, #21BEE8, #00AAFF);">
                    <h4 class="modal-title" id="myModalLabel33" style="color: #ffffff;">Detail Transactions</h4>
                    <button type="button" class="btn-close btn-close-white custom-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="transaction-logo" src="{{ asset('assets_landing/images/Asset 15.png') }}" alt="Logo" />
                    <div class="mb-4">
                        <h5 class="text-primary border-bottom pb-2 mb-3">Transaction Information</h5>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <strong>Transaction ID:</strong>
                                <p class="text-muted">1234567890</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Project:</strong>
                                <p class="text-muted">E-commerce Campaign</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Influencer:</strong>
                                <p class="text-muted">John Doe</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Company:</strong>
                                <p class="text-muted">Acme Inc.</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Date:</strong>
                                <p class="text-muted">7 November 2024</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Amount:</strong>
                                <p class="text-body fw-bold">Rp1.000.000</p>
                            </div>
                            <div class="col-md-12 mb-2">
                                <strong>Status:</strong>
                                <span class="text-danger badge bg-light-danger">Failed</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h5 class="text-primary border-bottom pb-2 mb-3 payment-information-header">Payment Information</h5>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <strong>Payment Method:</strong>
                                <p class="text-muted">Credit Card</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Card Number:</strong>
                                <p class="text-muted">**** **** **** 1234</p>
                            </div>
                            <div class="col-md-12 mb-2">
                                <strong>Payment Gateway:</strong>
                                <p class="text-muted">Midtrans</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h5 class="text-primary border-bottom pb-2 mb-3 project-information-header">Project Information</h5>
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <strong>Description:</strong>
                                <p class="text-muted">This is an e-commerce marketing campaign focusing on increasing sales
                                    and brand awareness using influencer marketing.</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Duration:</strong>
                                <p class="text-muted">1st Nov 2024 - 15th Nov 2024</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Target Audience:</strong>
                                <p class="text-muted">Age 18-25, Southeast Asia</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h5 class="text-primary border-bottom pb-2 mb-3">Influencer Information</h5>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <strong>Name:</strong>
                                <p class="text-muted">John Doe</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Followers:</strong>
                                <p class="text-muted">150,000</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Engagement Rate:</strong>
                                <p class="text-muted">7.8%</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Social Media Platform:</strong>
                                <p class="text-muted">Instagram</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h5 class="text-primary border-bottom pb-2 mb-3">Additional Notes</h5>
                        <p class="text-muted">Note any additional information about the transaction or specific comments
                            from the influencer or the company involved.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <span class="d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ms-1" id="printButton">
                        <span class="d-sm-block">Print</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <style>
        .transaction-logo {
            display: none;
            width: 200px;
            height: 55px;
            margin: 0 auto;
        }

        @media print {

            .transaction-logo {
                display: block !important;
                margin: 0 auto 20px;
            }

            body * {
                visibility: hidden !important;
            }

            #modalTransactions,
            #modalTransactions * {
                visibility: visible !important;
            }

            .btn-light-secondary,
            #printButton,
            .modal-header,
            .modal-footer {
                display: none !important;
            }

            #modalTransactions {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: auto;
            }

            .project-information-header {
                page-break-before: always;
                page-break-inside: avoid;
                margin-top: 20px;
            }

            .payment-information-header {
                page-break-before: auto;
                break-before: auto;
                margin-top: 0;
            }
        }
    </style>
@endsection
@section('script')
    <script>
        document.getElementById('printButton').addEventListener('click', function() {
            const modal = document.getElementById('modalTransactions');

            if (modal) {
                window.print();
            } else {
                console.error('Modal content not found for printing');
            }
        });\
    </script>
@endsection
