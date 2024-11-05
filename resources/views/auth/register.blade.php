@extends('layouts.main')

@section('content')
@section('style')
<link href="{{ asset('assets_landing/css/login.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="bg-white1">
    <div class="container">
        <div class="row justify-content-center align-items-center d-flex vh-100">
            <div class="col-lg-4 mx-auto">
                <div class="osahan-login py-4">
                    <div class="text-center mb-4">
                        <a href="{{ url('/') }}"><img src="{{ asset('assets_landing/images/fav.svg') }}" alt=""></a>
                        <h5 class="font-weight-bold mt-3">Join Maer</h5>
                        <p class="text-muted">Make the most of your professional life</p>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label class="mb-1">Name</label>
                            <div class="position-relative icon-form-control">
                                <i class="mdi mdi-email-outline position-absolute"></i>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="mb-1">Email</label>
                            <div class="position-relative icon-form-control">
                                <i class="mdi mdi-email-outline position-absolute"></i>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="mb-1">Password (6 or more characters)</label>
                            <div class="position-relative icon-form-control">
                                <i class="mdi mdi-key-variant position-absolute"></i>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="mb-1">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="form-group">
                            <label class="mb-1">You agree to the Maer <a href="#">User Agreement</a>, <a href="#">Privacy Policy</a>, and <a href="#">Cookie Policy</a>.</label>
                        </div>

                        <button class="btn btn-success btn-block text-uppercase" type="submit"> Agree & Join </button>

                        {{-- <div class="text-center mt-3 border-bottom pb-3">
                            <p class="small text-muted">Or login with</p>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-outline-instagram btn-block" style="background-color: #FF4545; border: none">
                                        <i class="mdi mdi-instagram"></i> Instagram
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-outline-facebook btn-block">
                                        <i class="mdi mdi-facebook"></i> Facebook
                                    </button>
                                </div>
                            </div>
                        </div> --}}

                        <div class="py-3 d-flex align-item-center">
                            <a href="{{ route('password.request') }}">Forgot password?</a>
                            <span class="ml-auto"> Already on Maer? <a href="{{ route('login') }}">Sign in</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
