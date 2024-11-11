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
                                <option value="progres">Progres</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="table1">
                            <thead>
                                <tr>
                                    <th width="15%">NO</th>
                                    <th>NAME</th>
                                    <th width="24%">PROJECT</th>
                                    <th width="17%">DATE</th>
                                    <th width="25%">STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-500">1</td>
                                    <td class="text-bold-500">UI/UX</td>
                                    <td class="text-bold-500">HUMMATHRIFT</td>
                                    <td class="text-bold-500">2 Juli - 4 Juli</td>
                                    <td class="text-bold-500">
                                        <span class="badge bg-light-success">Completed</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-bold-500">2</td>
                                    <td class="text-bold-500">WEBSITE</td>
                                    <td class="text-bold-500">HUMMALANCE</td>
                                    <td class="text-bold-500">2 Juli - 4 Juli</td>
                                    <td class="text-bold-500">
                                        <span class="badge bg-light-warning">Progres</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
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
    </div> --}}
@endsection
