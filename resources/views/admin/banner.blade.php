@extends('kerangka.master')
@section('content')
    <div class="page-heading">
        <h3>Banner</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#inlineForm">
                    Add Banner
                </button>
            </div>
                <div class="card-body">
                    <div class="table-responsive ">
                        <table class="table" id="table1">
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
                                <tr>
                                    <td class="text-bold-500">1</td>
                                    <td class="text-bold-500"><img src="{{ asset('assets_landing/images/bg2.jpeg') }}" alt="" width="200px"></td>
                                    <td class="text-bold-500">title</td>
                                    <td class="text-bold-500">subtitle</td>
                                    <td>
                                        <a href="#" class="text-warning"><i class="bi bi-pen-fill"></i></a>
                                        <button type="button" class="btn text-danger" ><i class="bi bi-trash3-fill"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>


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
