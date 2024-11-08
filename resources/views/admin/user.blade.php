@extends('kerangka.master')

@section('content')
  <div class="page-heading">
    <h3>Users</h3>
  </div>
  <div class="page-content">
    <section class="section">
      <div class="card">
        <div class="card-body">
          <!-- Role Filter Dropdown -->
          <div class="row mb-3">
            <div class="col-md-3">
              <select id="roleFilter" class="form-select">
                <option value="">All Roles</option>
                <option value="client">Client</option>
                <option value="freelancer">Freelancer</option>
              </select>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table" id="table10">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody></tbody>
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
      // Initialize DataTable only once
      var table = $('#table10').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url: "{{ route('admin.users.data') }}",
          data: function(d) {
            d.role = $('#roleFilter').val();
          }
        },
        columns: [{
            data: 'DT_RowIndex',
            orderable: false,
            searchable: false,
          },
          {
            data: 'name',
            name: 'name'
          },
          {
            data: 'email',
            name: 'email'
          },
          {
            data: 'role',
            name: 'role'
          },
          {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false
          }
        ]
      });

      // Apply role filter without reinitializing DataTable
      $('#roleFilter').change(function() {
        table.draw(); // Redraw table with new filter
      });
    });
  </script>
@endsection
