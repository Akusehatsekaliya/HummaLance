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
          <h1>Log in To Clocker</h1>
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

            <!-- Username input field -->
            <div class="input-box">
                <input type="text" placeholder="Username" name="name" required>
                <i class='bx bxs-user'></i>
            </div>

            <!-- Email input field -->
            <div class="input-box">
                <input type="email" placeholder="Email" name="email" required>
                <i class='bx bxs-envelope'></i>
            </div>

            <!-- Password input field -->
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <!-- Confirm Password input field -->
            <div class="input-box">
                <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn">Register</button>
        </form>
    </div>


      <div class="toggle-box">
        <div class="toggle-panel toggle-left">
          <h1>Welcome Back</h1>
          <p>Hi, nice to see you back and stay connected with us.</p>
          <button class="btn register-btn">Sign Up</button>
          <img src="{{asset('assets_landing/images/login1.png')}}" alt="login1" class="login1" >
          <img src="{{asset('assets_landing/images/login2.png')}}" alt="login2" class="login2">
        </div>

        <div class="toggle-panel toggle-right">
          <h1>Welcome Back!</h1>
          <p>Already have a account?</p>
          <button class="btn login-btn">Login</button>
          <img src="{{asset('assets_landing/images/login1.png')}}" alt="login1" class="login3" >
          <img src="{{asset('assets_landing/images/login2.png')}}" alt="login2" class="login4">
        </div>
      </div>
    </div>
  </div>
@endpush

@push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const authModal = document.querySelector('.auth-modal');
      const authContainer = authModal.querySelector('.container');
      const registerBtn = document.querySelector('.register-btn');
      const loginBtn = document.querySelector('.login-btn');
      const loginLink = document.querySelector(`a[href="#login"]`);
      const registerLink = document.querySelector(`a[href="#register"]`);
      const closeModalButton = document.querySelector(`[data-close="modal"]`);

      const showModal = (isRegister = false) => {
        authContainer.classList.toggle('active', isRegister);
        authModal.classList.add('show');
      };

      const closeModal = () => {
        authModal.classList.remove('show');
      };

      const handleHashChange = () => {
        if (location.hash.includes("#login")) {
          removeHash();
          showModal(false);
        } else if (location.hash.includes("#register")) {
          removeHash();
          showModal(true);
        }
      };

      const removeHash = () => {
        if ("pushState" in history) {
          history.pushState("", document.title, window.location.pathname + window.location.search);
        } else {
          const {
            scrollTop,
            scrollLeft
          } = document.body;
          location.hash = "";
          document.body.scrollTop = scrollTop;
          document.body.scrollLeft = scrollLeft;
        }
      };

      registerBtn.addEventListener('click', () => authContainer.classList.add('active'));
      loginBtn.addEventListener('click', () => authContainer.classList.remove('active'));
      loginLink.addEventListener('click', (e) => {
        e.preventDefault();
        showModal(false);
      });
      registerLink.addEventListener('click', (e) => {
        e.preventDefault();
        showModal(true);
      });
      closeModalButton.addEventListener('click', (e) => {
        e.preventDefault();
        closeModal();
      });

      handleHashChange();

      window.addEventListener('hashchange', handleHashChange);
    });
  </script>
@endpush
