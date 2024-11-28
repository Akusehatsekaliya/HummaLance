@extends('kerangka.master')

@section('style')
    <style>
        .modal-body .bg-blue-500 {
            background-color: rgb(37, 99, 235);
        }

        .modal-lg {
            max-width: 900px;
        }

        .modal-body .p-6 {
            padding: 30px;
        }





        .section {
            margin-bottom: 20px;
        }

        .section-header {
            background-color: #00AAFF;
            color: #fff;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
        }

        .section-content {
            padding: 10px;
            background-color: #ecf0f1;
        }

        .section-content div {
            margin-bottom: 10px;
        }

        .section-content div span {
            display: inline-block;
            width: 200px;
            font-weight: bold;
        }

        .section-content div span.value {
            font-weight: normal;
        }

        .two-column {
            display: flex;
            justify-content: space-between;
        }

        .two-column .column {
            width: 48%;
        }
    </style>
@endsection

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
                                    <th width="">Status</th>
                                    <th>Action</th>
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
    <!-- Modal untuk Detail Project -->
    <div id="detailModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header text-white">
                    <img class="modal-title" src="{{ asset('assets_landing/images/Asset 15.png') }}" alt=""
                        style="width: 120px;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <div class="bg-white shadow-md rounded-md p-6 mb-6">
                        <div class=" text-white p-4 rounded-t-md"
                            style="background: linear-gradient(90deg, #21BEE8, #00AAFF);">
                            <h2 class="text-lg font-bold" style="color: white">Contract Details</h2>
                        </div>
                        <div class="p-6 border-b">
                            <h3 class="text-lg font-semibold mb-4">Contract Information</h3>
                            <div class="grid grid-cols-2 gap-4">
                                <div><strong>Name :</strong> <span id="userName"></span></div>
                                <div><strong>Project :</strong> <span id="projectName"></span></div>
                                <div><strong>Date :</strong> <span id="projectDate"></span></div>
                                <div><strong>Status :</strong> <span id="status"></span></div>
                                <div><strong>Amount :</strong> <span id="amountProject"></span></div>
                                <div><strong>Payment Status :</strong> <span id="paymentStatus"></span></div>
                                <div><strong>Approval Status :</strong> <span id="approvalStatus"></span></div>
                            </div>
                        </div>
                        <div class="p-6 border-b">
                            <h3 class="text-lg font-semibold mb-4">Milestone Dates</h3>
                            <div class="border p-2 rounded-md mb-2">
                                <p><strong>Milestone 1 Due Date:</strong> 2024-12-15</p>
                            </div>
                        </div>
                        <div class="p-6 border-b">
                            <h3 class="text-lg font-semibold mb-4">Contract File</h3>
                            <a href="" id="contractFile" class="bg-blue-500 text-white p-2 rounded">Download
                                Contract</a>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold mb-4">Additional Information</h3>
                            <p><strong>Scope of Work:</strong> <span id="projectDescription"></span></p>
                        </div>
                    </div> --}}






                    <div class="section">
                        <div class="section-header">Landlord Information</div>
                        <div class="section-content">
                            <div><span>Name:</span> <span class="value" id="userName"></span></div>
                            <div><span>Project:</span> <span class="value" id="projectName"></span></div>
                            <div><span>Date:</span> <span class="value" id="projectDate"></span></div>
                            <div><span>Status:</span> <span class="value" id="status"></span></div>
                            <div><span>Amount:</span> <span class="value" id="amountProject"></span></div>
                            <div><span>Payment Status:</span> <span class="value" id="paymentStatus"></span></div>
                            <div><span>Approval Status:</span> <span class="value" id="approvalStatus"></span></div>

                        </div>
                    </div>
                    <div class="section">
                        <div class="section-header">Tenant Information</div>
                        <div class="section-content">
                            <div><span>Name:</span> <span class="value"></span></div>
                            <div><span>Email:</span> <span class="value"></span></div>
                            <div><span>Date:</span> <span class="value"></span></div>
                            <div><span>Number of Occupants:</span> <span class="value">6</span></div>
                        </div>
                    </div>
                    {{-- <div class="section">
                        <div class="section-header">Rental Information</div>
                        <div class="section-content two-column">
                            <div class="column">
                                <div><span>House Rental Address:</span> <span class="value">2 Oak V<br>Raleigh, No,
                                        27621<br>United States</span></div>
                                <div><span>Start Date of Agreement:</span> <span class="value">September 12, 1967</span>
                                </div>
                                <div><span>End Date of Agreement:</span> <span class="value">September 12, 1967</span>
                                </div>
                                <div><span>Date of First Payment Due:</span> <span class="value">October 8, 2008</span>
                                </div>
                                <div><span>Pay Period:</span> <span class="value">every 15th of the month</span></div>
                            </div>
                            <div class="column">
                                <div><span>Rent Amount per Month:</span> <span class="value">$ 7,500.00</span></div>
                                <div><span>Security Deposit:</span> <span class="value">$ 2,500.00</span></div>
                                <div><span>Late Charges:</span> <span class="value">$ 500.00</span></div>
                                <div><span>Payment Method:</span> <span class="value">Check</span></div>
                                <div><span>Collected by:</span> <span class="value">Engracia Van de Vlies</span></div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="p-6 border-b">
                        <h3 class="text-lg font-semibold mb-4">Contract File</h3>
                        <a href="" id="contractFile" class="bg-blue-500 text-white p-2 rounded">Download
                            Contract</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            $('#table2').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '#',
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
                        data: null,
                        name: 'user',
                        render: (data) => `${data.user.first_name} ${data.user.last_name}`,
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
                            let colorClass = data === 'completed' ?
                                'bg-light-success text-success' :
                                'bg-light-warning text-warning';
                            return `<span class="badge ${colorClass} p-2">${data.charAt(0).toUpperCase() + data.slice(1)}</span>`;
                        }
                    },
                    {
                        data: 'Action',
                        name: 'Action',
                        orderable: false,
                        searchable: false,
                    },

                ]
            });

            $('#roleFilter').on('change', function() {
                $('#table2').DataTable().ajax.reload();
            });
        });
        $(document).on('click', '.btn[data-bs-target="#detailModal"]', function() {
            var contractId = $(this).data('id');
            $.ajax({
                url: '/admin/contracts/showDetail/' + contractId,
                method: 'GET',
                success: function(data) {
                    if (data.error) {
                        alert(data.error);
                    } else {
                        $('#detailModal .modal-body #projectName').text(data.project_name);
                        $('#detailModal .modal-body #userName').text(data.user_name);
                        $('#detailModal .modal-body #projectDate').text(data.project_date);
                        $('#detailModal .modal-body #projectDescription').text(data
                            .project_description);
                        $('#detailModal .modal-body #status').text(data.status);
                        $('#detailModal .modal-body #amountProject').text(new Intl.NumberFormat()
                            .format(data.amount_project));
                        $('#detailModal .modal-body #paymentStatus').text(data.payment_status);
                        $('#detailModal .modal-body #approvalStatus').text(data.approval_status);

                        $('#detailModal .modal-body #contractFile').attr('href',
                            "{{ url('admin/download/contract') }}/" + data.id);

                        var statusElement = $('#detailModal .modal-body #status');
                        statusElement.text(data.status);
                        if (data.status.toLowerCase() === 'success') {
                            statusElement.removeClass('text-warning').addClass('text-success');
                        } else if (data.status.toLowerCase() === 'progress') {
                            statusElement.removeClass('text-success').addClass('text-warning');
                        } else {
                            statusElement.removeClass('text-success text-warning');
                        }

                        $('#detailModal .modal-body #amountProject').text(new Intl.NumberFormat()
                            .format(data.amount_project));
                        $('#detailModal .modal-body #amountProject')
                            .removeClass('amount-success')
                            .addClass('text-danger');

                        var paymentStatusElement = $('#detailModal .modal-body #paymentStatus');

                        if (data.payment_status.toLowerCase() === 'success') {
                            paymentStatusElement.removeClass('text-warning').addClass('text-success')
                                .text('Success');
                        } else if (data.payment_status.toLowerCase() === 'pending') {
                            paymentStatusElement.removeClass('text-success').addClass('text-warning')
                                .text('Pending');
                        } else {
                            paymentStatusElement.removeClass('text-success text-warning').text(
                                'Unknown');
                        }

                        var approvalStatusElement = $('#detailModal .modal-body #approvalStatus');

                        if (data.approval_status.toLowerCase() === 'pending') {
                            approvalStatusElement.removeClass('status-approved status-rejected')
                                .addClass(
                                    'status-pending text-warning')
                                .text('Pending');
                        } else if (data.approval_status.toLowerCase() === 'approved') {
                            approvalStatusElement.removeClass('status-pending status-rejected')
                                .addClass(
                                    'status-approved text-success')
                                .text('Approved');
                        } else if (data.approval_status.toLowerCase() === 'rejected') {
                            approvalStatusElement.removeClass('status-pending status-approved')
                                .addClass(
                                    'status-rejected text-danger')
                                .text('Rejected');
                        } else {
                            approvalStatusElement.removeClass(
                                    'status-pending status-approved status-rejected')
                                .addClass('text-muted')
                                .text('Unknown');
                        }
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching contract details:', error);
                    alert('Failed to fetch contract details.');
                }
            });
        });
    </script>
@endsection
