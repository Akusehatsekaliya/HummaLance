@push('links')
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="{{ asset('assets_landing/css/login.css') }}" rel="stylesheet">
@endpush

@push('contents')
  <div class="auth-modal show">
    <div class="container">
      <button class="close-btn" data-close="modal">
        <i class="bx bx-x"></i>
      </button>
      <div class="form-box login">

        <form method="POST" action="{{ route('login') }}">
          @csrf
          <h1>Log in To Clocker</h1>
          <div class="login-button-container">
            <a class="google-login" href="{{ route('login.google') }}">
              <img src="{{ asset('assets/svg/icons/gg_google.svg') }}" alt="" />
              Login With Google
            </a>
            <button class="facebook-login">
              <img src="{{ asset('assets/svg/icons/ic_baseline-facebook.svg') }}" alt="" />
            </button>
            <button class="linkedin-login">
              <img src="{{ asset('assets/svg/icons/mdi_linkedin.svg') }}" alt="" />
            </button>
          </div>
          <div class="divider">
            <div class="rect"></div>
            <span>or</span>
            <div class="rect"></div>
          </div>
          <div class="input-box">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M7.66667 6.70833C7.66667 5.69167 8.07053 4.71665 8.78942 3.99776C9.50831 3.27887 10.4833 2.875 11.5 2.875C12.5167 2.875 13.4917 3.27887 14.2106 3.99776C14.9295 4.71665 15.3333 5.69167 15.3333 6.70833C15.3333 7.725 14.9295 8.70002 14.2106 9.41891C13.4917 10.1378 12.5167 10.5417 11.5 10.5417C10.4833 10.5417 9.50831 10.1378 8.78942 9.41891C8.07053 8.70002 7.66667 7.725 7.66667 6.70833ZM7.66667 12.4583C6.39584 12.4583 5.17706 12.9632 4.27845 13.8618C3.37983 14.7604 2.875 15.9792 2.875 17.25C2.875 18.0125 3.1779 18.7438 3.71707 19.2829C4.25624 19.8221 4.9875 20.125 5.75 20.125H17.25C18.0125 20.125 18.7438 19.8221 19.2829 19.2829C19.8221 18.7438 20.125 18.0125 20.125 17.25C20.125 15.9792 19.6202 14.7604 18.7216 13.8618C17.8229 12.9632 16.6042 12.4583 15.3333 12.4583H7.66667Z"
                fill="#060020" />
            </svg>
            <input type="email" class="@error('email') is-invalid @enderror" placeholder="Username Or Email"
              name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="input-box">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
              <path
                d="M9.99998 14.1667C10.442 14.1667 10.8659 13.9911 11.1785 13.6785C11.4911 13.366 11.6666 12.942 11.6666 12.5C11.6666 12.058 11.4911 11.6341 11.1785 11.3215C10.8659 11.0089 10.442 10.8333 9.99998 10.8333C9.55795 10.8333 9.13403 11.0089 8.82147 11.3215C8.50891 11.6341 8.33331 12.058 8.33331 12.5C8.33331 12.942 8.50891 13.366 8.82147 13.6785C9.13403 13.9911 9.55795 14.1667 9.99998 14.1667ZM15 6.66667C15.442 6.66667 15.8659 6.84226 16.1785 7.15482C16.4911 7.46739 16.6666 7.89131 16.6666 8.33334V16.6667C16.6666 17.1087 16.4911 17.5326 16.1785 17.8452C15.8659 18.1577 15.442 18.3333 15 18.3333H4.99998C4.55795 18.3333 4.13403 18.1577 3.82147 17.8452C3.50891 17.5326 3.33331 17.1087 3.33331 16.6667V8.33334C3.33331 7.89131 3.50891 7.46739 3.82147 7.15482C4.13403 6.84226 4.55795 6.66667 4.99998 6.66667H5.83331V5C5.83331 3.89493 6.2723 2.83513 7.0537 2.05372C7.8351 1.27232 8.89491 0.833336 9.99998 0.833336C10.5472 0.833336 11.089 0.94111 11.5945 1.1505C12.1 1.3599 12.5593 1.66681 12.9463 2.05372C13.3332 2.44063 13.6401 2.89996 13.8495 3.40549C14.0589 3.91101 14.1666 4.45283 14.1666 5V6.66667H15ZM9.99998 2.5C9.33694 2.5 8.70105 2.76339 8.23221 3.23224C7.76337 3.70108 7.49998 4.33696 7.49998 5V6.66667H12.5V5C12.5 4.33696 12.2366 3.70108 11.7677 3.23224C11.2989 2.76339 10.663 2.5 9.99998 2.5Z"
                fill="#060020" />
            </svg>
            <input type="password" class="@error('email') is-invalid @enderror" placeholder="Password" name="password"
              value="{{ old('password') }}" required>
          </div>
          {{-- <div class="forgot-link">
            @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}">Forgot password?</a>
            @endif
          </div> --}}
          <button type="submit" class="btn">Login</button>
          {{-- <p>Or login with platforms</p>
          <div class="social-icons">
            <a href="{{ route('login.google') }}"><i class='bx bxl-google'></i></a>
            <a href=""><i class='bx bxl-facebook'></i></a>
            <a href=""><i class='bx bxl-github'></i></a>
            <a href=""><i class='bx bxl-linkedin'></i></a>
          </div> --}}
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
        <img src="{{ asset("assets/images/4ec9514b66c366d84e143a15f119c010.png") }}" alt="" class="logo">
        <div class="toggle-panel toggle-left">
          <h1>Welcome Back</h1>
          <p>Hi, nice to see you back and stay connected with us.</p>
          <button class="btn register-btn">Sign Up</button>
          <img src="{{ asset('assets_landing/images/login1.png') }}" alt="login1" class="login1">
          <img src="{{ asset('assets_landing/images/login2.png') }}" alt="login2" class="login2">
        </div>

        <div class="toggle-panel toggle-right">
          <h1>Welcome Back!</h1>
          <p>Already have a account?</p>
          <button class="btn login-btn">Login</button>
          <img src="{{ asset('assets_landing/images/login1.png') }}" alt="login1" class="login3">
          <img src="{{ asset('assets_landing/images/login2.png') }}" alt="login2" class="login4">
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
