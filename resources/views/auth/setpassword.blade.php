@extends('landing.layout.app')

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
              <a href="{{ url('/') }}"><img src="{{ asset('assets_landing/images/fav.svg') }}" alt=""></a>
              <h5 class="font-weight-bold mt-3">Register</h5>
              <p class="text-muted">Make the most of your professional life</p>
            </div>
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group">
                <label class="mb-1">Password (6 or more characters)</label>
                <div class="position-relative icon-form-control">
                  <i class="mdi mdi-key-variant position-absolute"></i>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                    required>
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
              <button class="btn btn-success btn-block text-uppercase" type="submit"> Set Password </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
