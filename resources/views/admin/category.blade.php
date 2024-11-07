@extends('kerangka.master')
@section('content')
    <div class="page-heading">
        <h3>Category</h3>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-header">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#inlineForm">
                        Add Category
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive ">
                        <table class="table" id="table1">
                            <thead>
                                <tr>
                                    <th width="15%">NO</th>
                                    <th>NAME</th>
                                    <th width="25%">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-500">1</td>
                                    <td class="text-bold-500">UI/UX</td>
                                    <td>
                                        <button type="button" class="btn btn-primary mx-2"><i class="bi bi-pen-fill"></i></button>
                                        <button type="button" class="btn btn-primary"><i class="bi bi-trash3-fill"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
            data-bs-target="#inlineForm">
            Add Category
        </button> --}}
    <!--login form Modal -->
    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Add Category</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <label for="email">Name: </label>
                        <div class="form-group">
                            <input id="email" type="text" placeholder="name category" class="form-control">
                        </div>
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
