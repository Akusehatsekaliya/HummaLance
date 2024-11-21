@push('links')
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="{{ asset('assets_landing/css/login.css') }}" rel="stylesheet">
@endpush

@push('contents')
  <div class="auth-modal">
    <div class="container">
      <button class="close-btn" data-close="modal">
        <i class="bx bx-x"></i>
      </button>
      <div class="form-box login">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <h1>Login</h1>
          <div class="input-box">
            <input type="email" class="@error('email') is-invalid @enderror" placeholder="Email" name="email"
              value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="input-box">
            <input type="password" class="@error('email') is-invalid @enderror" placeholder="Password" name="password"
              value="{{ old('password') }}" required>
            <i class='bx bxs-lock-alt'></i>
          </div>
          <div class="forgot-link">
            @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}">Forgot password?</a>
            @endif
          </div>
          <button type="submit" class="btn">Login</button>
          <p>Or login with platforms</p>
          <div class="social-icons">
            <a href="{{ route('login.google') }}"><i class='bx bxl-google'></i></a>
            <a href=""><i class='bx bxl-facebook'></i></a>
            <a href=""><i class='bx bxl-github'></i></a>
            <a href=""><i class='bx bxl-linkedin'></i></a>
          </div>
        </form>
      </div>

      <div class="form-box register">
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <h1>Registration</h1>
          <div class="input-box">
            <input type="text" placeholder="Username" name="name" required>
            <i class='bx bxs-user'></i>
          </div>
          <div class="input-box">
            <input type="email" placeholder="Email" name="email" required>
            <i class='bx bxs-envelope'></i>
          </div>
          <div class="input-box">
            <input type="password" placeholder="Password" name="password" required>
            <i class='bx bxs-lock-alt'></i>
          </div>
          <div class="input-box">
            <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
            <i class='bx bxs-lock-alt'></i>
          </div>
          <button type="submit" class="btn">Register</button>
        </form>
      </div>

      <div class="toggle-box">
        <div class="toggle-panel toggle-left">
          <h1>Hello, welcome</h1>
          <p>Don't have a account?</p>
          <button class="btn register-btn">Register</button>
          <img src="{{asset('assets_landing/images/login1.png')}}" alt="login1">
          <img src="{{asset('assets_landing/images/login2.png')}}" alt="login2">
        </div>

        <div class="toggle-panel toggle-right">
          <h1>Welcome Back!</h1>
          <p>Already have a account?</p>
          <button class="btn login-btn">Login</button>
        </div>
      </div>
    </div>
  </div>
@endpush

@push('scripts')
  <script>
    const authContainer = document.querySelector('.auth-modal .container');
    const registerBtn = document.querySelector('.register-btn');
    const loginBtn = document.querySelector('.login-btn');

    registerBtn.addEventListener('click', () => {
      authContainer.classList.add('active');
    });

    loginBtn.addEventListener('click', () => {
      authContainer.classList.remove('active');
    });

    const loginButton = document.querySelector(`a[href="#login"]`);
    const registerButton = document.querySelector(`a[href="#register"]`);
    loginButton.addEventListener('click', (e) => {
      e.preventDefault();
      authContainer.classList.remove('active');
      document.querySelector(".auth-modal").classList.add("show");
    });
    registerButton.addEventListener('click', (e) => {
      e.preventDefault();
      authContainer.classList.add('active');
      document.querySelector(".auth-modal").classList.add("show");
    });

    const closeModalButton = document.querySelector(`[data-close="modal"]`);
    closeModalButton.addEventListener('click', (e) => {
      e.preventDefault();
      document.querySelector(".auth-modal").classList.remove("show");
    });
  </script>
@endpush
