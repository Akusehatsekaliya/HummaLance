@extends('kerangka.master')
@section('content')
  <div class="page-heading">
    <h3>Banner</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
  </div>
  <div class="page-content">
    <section class="section">
      <div class="card">
        {{-- <div class="card-header">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
            Add Banner
          </button>
        </div> --}}
        <div class="card-body">
          <div class="table-responsive">
            <table class="table yajra-datatable" id="banner">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>IMAGE</th>
                  <th width="24%">TITLE</th>
                  <th width="23%">SUBTITLE</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
                {{-- @foreach ($banner as $item)
                  <tr>
                    <td class="text-bold-500">{{ $item->id }}</td>
                    <td class="text-bold-500"><img src="{{ asset('storage/' . $item->picture) }}" alt=""
                        width="200px"></td>
                    <td class="text-bold-500">{{ $item->title }}</td>
                    <td class="text-bold-500">{{ $item->subtitle }}</td>
                    <td>
                      <a href="#" class="text-warning"><i class="bi bi-pen-fill"></i></a>
                      <button type="button" class="btn text-danger"><i class="bi bi-trash3-fill"></i></button>
                    </td>
                  </tr>
                  @endforeach --}}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>

  {{-- Modal Add --}}
  <div class="modal fade text-left" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel17">Add Banner</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <i data-feather="x"></i>
          </button>
        </div>
        <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <label for="email">Image</label>
            <div class="form-group">
              <input id="picture" type="file" class="form-control" name="picture">
              @error('picture')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <label for="email">Title</label>
            <div class="form-group">
              <input id="title" type="text" placeholder="Add Title" class="form-control" name="title">
              @error('title')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <label for="email">Subtitle</label>
            <div class="form-group">
              <input id="subtitle" type="text" placeholder="Add Subtitle" class="form-control" name="subtitle">
              @error('subtitle')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
              <i class="bx bx-x d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Close</span>
            </button>
            <button type="submit" class="btn btn-primary ms-1">
              <i class="bx bx-check d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Save</span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  {{-- edit --}}
  <div class="modal fade text-left" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel17">Edit Banner</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <i data-feather="x"></i>
          </button>
        </div>
        <form action="{{ route('banner.update', ':id:') }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="modal-body">
            <label for="email">Image</label>
            <div class="form-group">
              <input id="picture" type="file" class="form-control" name="picture">
              @error('picture')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <label for="email">Title</label>
            <div class="form-group">
              <input id="title" type="text" placeholder="Add Title" class="form-control" name="title">
              @error('title')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <label for="email">Subtitle</label>
            <div class="form-group">
              <input id="subtitle" type="text" placeholder="Add Subtitle" class="form-control" name="subtitle">
              @error('subtitle')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
              <i class="bx bx-x d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Close</span>
            </button>
            <button type="submit" class="btn btn-primary ms-1">
              <i class="bx bx-check d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Save</span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  {{-- delete --}}
  <div id="deleteModal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Hapus data</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <i data-feather="x"></i>
          </button>
        </div>
        <div class="modal-body">
          <p>Data tidak dapat dikembalikan jika terhapus</p>
        </div>
        <div class="modal-footer">
          <a href="javascript:void(0)" class="btn modal-close btn-flat" data-bs-dismiss="modal">Batal</a>
          <form action="{{ route('banner.destroy', ':id:') }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn modal-close btn-flat">Hapus</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
  <script>
    const {
      table
    } = $('.yajra-datatable').AjaxDataTable({
      onCreate: {
        modal: $('#tambahModal'),
        text: 'Tambah Data',
        className: 'btn btn-primary'
      },
      onEdit: {
        modal: $('#editModal'),
        onClick: (form, data) => {
          form.find('img#image').attr('src', `{{ asset('storage/') }}/${data.picture}`)
        }
      },
      onDelete: {
        modal: $('#deleteModal'),
      },
      options: {
        layout: {
          topStart: {
            buttons: ["create"]
          },
          topEnd: $(`<div class="input-group">
              <input class="form-control me-4" placeholder="Cari data&hellip;" id="searchInput" />
            </div>`),
          bottomStart: {
            info: {
              text: 'Menampilkan _START_ dari _END_ hasil'
            }
          },
        }
      },
      ajax: "{{ route('banner.index') }}",
      columns: [{
          data: 'DT_RowIndex',
          orderable: false,
          searchable: false,
        },
        {
          data: 'picture',
          name: 'picture',
          orderable: false,
          searchable: false,
          render: (data, type) =>
            `<img src="{{ asset('storage/') }}/${data}" class="rounded-3" loading="lazy" height="96px">`
        },
        {
          data: 'title',
          name: 'title'
        },
        {
          data: 'subtitle',
          name: 'subtitle',
        },
        {
          data: 'id',
          orderable: false,
          searchable: false,
          render: (data, type) => {
            const editButton =
              `<button type="button" class="btn text-warning edit"><i class="bi bi-pen-fill"></i></button>`;
            const deleteButton =
              `<button type="button" class="btn text-danger delete"><i class="bi bi-trash3-fill"></i></button>`;
            return editButton + deleteButton;
          }
        }
      ]
    });
    let searchTimeout;

    $('#searchInput').on('input', function() {
      clearTimeout(searchTimeout);

      searchTimeout = setTimeout(function() {
        const searchTerm = $('#searchInput').val().trim();
        table.search(searchTerm).draw();
      }, 500);
    });
  </script>
@endsection
