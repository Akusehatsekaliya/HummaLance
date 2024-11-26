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
                    <div class="bg-white shadow-md rounded-md p-6 mb-6">
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
                                <div><strong>Approval Status :</strong> <span id="approvalStatus">
                                        {{-- @if ($contract->REJECTED)
                                        <span class="badge bg-light-danger text-danger p-2">REJECTED</span>
                                    @elseif($contract->PENDING)
                                        <span class="badge bg-light-warning text-warning p-2">PENDING</span>
                                    @else
                                        <span class="badge bg-light-success text-success p-2">APPROVED</span>
                                    @endif --}}
                                    </span></div>
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
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <style>
        .modal-body .bg-blue-500:hover {
            background-color: #2563eb;
        }

        .modal-lg {
            max-width: 900px;
        }

        .modal-body .p-6 {
            padding: 30px;
        }
    </style>
@endsection
@section('script')
    <script src="https://cdn.tailwindcss.com"></script>
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
                            paymentStatusElement.removeClass('text-success text-warning').text('Unknown');
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
