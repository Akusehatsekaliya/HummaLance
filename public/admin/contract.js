$(document).ready(function() {

    $('#table4').DataTable({
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
        $('#table4').DataTable().ajax.reload();
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
