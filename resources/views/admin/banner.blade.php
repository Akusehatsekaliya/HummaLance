@extends('kerangka.master')

@section('content')
    <div class="page-heading">
        <h3>Banner</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="card">
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
                <form action="{{ route('admin.banner.store') }}" method="POST" enctype="multipart/form-data">
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
                            <input id="title" type="text" placeholder="Add Title" class="form-control"
                                name="title">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <label for="email">Subtitle</label>
                        <div class="form-group">
                            <input id="subtitle" type="text" placeholder="Add Subtitle" class="form-control"
                                name="subtitle">
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
                <form action="{{ route('admin.banner.update', ':id:') }}" method="POST" enctype="multipart/form-data">
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
                            <input id="title" type="text" placeholder="Add Title" class="form-control"
                                name="title">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <label for="email">Subtitle</label>
                        <div class="form-group">
                            <input id="subtitle" type="text" placeholder="Add Subtitle" class="form-control"
                                name="subtitle">
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
    <div id="deleteModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Data cannot be recovered if deleted</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{ route('admin.banner.destroy', ':id:') }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

