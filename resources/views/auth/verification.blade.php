@extends('layouts.main')

@section('style')
    <link href="{{ asset('assets_landing/css/login.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="bg-white1">
        <div class="container">
            <div class="row justify-content-center align-items-center d-flex vh-100">
                <div class="col-lg-4 mx-auto mt-5">
                    <div class="osahan-login py-4">
                        <div class="text-center mb-4">
                            <a href="{{ url('/') }}"><img src="{{ asset('assets_landing/images/fav.svg') }}"
                                    alt=""></a>
                            <h5 class="font-weight-bold mt-3">Enter verification code</h5>
                            <p class="text-muted">To continue, please enter the 6-digit verification code.</p>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label class="mb-1">Code OTP</label>
                                <div class="position-relative icon-form-control">
                                    <i class="mdi mdi-key-variant position-absolute"></i>
                                    <input id="otp" type="number"
                                        class="form-control is-invalid" name="otp" placeholder="Enter Code">
                                        <i class="mdi mdi-send position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
                                </div>
                            </div>

                            {{-- <div class="form-group">
                                <label class="mb-1">Code OTP</label>
                                <div class="position-relative icon-form-control">
                                    <i class="mdi mdi-key-variant position-absolute" style="left: 10px; top: 50%; transform: translateY(-50%);"></i>
                                    <input id="otp" type="number" class="form-control is-invalid" name="otp" placeholder="Enter Code">
                                    <i class="mdi mdi-send position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
                                </div>
                            </div> --}}

                            <br>
                            <button class="btn btn-success btn-block text-uppercase" type="submit"> Continue </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
