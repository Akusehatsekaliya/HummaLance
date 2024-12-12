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
          {{-- <div class="login-button-container">
            <a class="google-login" href="{{ route('login.google') }}">
              <img loading="lazy" src="{{ asset('assets/svg/icons/gg_google.svg') }}" alt="" />
              Login With Google
            </a>
            <button class="facebook-login">
              <img loading="lazy" src="{{ asset('assets/svg/icons/ic_baseline-facebook.svg') }}" alt="" />
            </button>
            <button class="linkedin-login">
              <img loading="lazy" src="{{ asset('assets/svg/icons/mdi_linkedin.svg') }}" alt="" />
            </button>
          </div> --}}
          {{-- <div class="divider">
            <div class="rect"></div>
            <span>or</span>
            <div class="rect"></div>
          </div> --}}
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
          <div class="divider">
            <div class="rect"></div>
            <span>or</span>
            <div class="rect"></div>
          </div>
          <div class="login-button-container">
            <a class="google-login" href="{{ route('login.google') }}">
              <img loading="lazy" src="{{ asset('assets/svg/icons/gg_google.svg') }}" alt="" />
              Login With Google
            </a>
            <button class="facebook-login">
              <img loading="lazy" src="{{ asset('assets/svg/icons/ic_baseline-facebook.svg') }}" alt="" />
            </button>
            <button class="linkedin-login">
              <img loading="lazy" src="{{ asset('assets/svg/icons/mdi_linkedin.svg') }}" alt="" />
            </button>
          </div>
          {{-- <div class="forgot-link">
            @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}">Forgot password?</a>
            @endif
          </div> --}}
            <div class="form-check ml-0 mt-1 mb-2 text-left align-items-center d-flex mt-4">
                <input class="form-check-input mb-1" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Remember me
                </label>
            </div>

            <button type="submit" class="btn-gradient">Sign Up</button>          {{-- <p>Or login with platforms</p>
            <div class="social-icons">
                <a href="{{ route('login.google') }}"><i class='bx bxl-google'></i></a>
                <a href=""><i class='bx bxl-facebook'></i></a>
                <a href=""><i class='bx bxl-github'></i></a>
                <a href=""><i class='bx bxl-linkedin'></i></a>
            </div> --}}
        </form>
      </div>

      <div class="form-box register">
        <form>
          <h3 style="font-weight: 500;">Log in To Clocker</h3>

          <div class="form-check mt-4 mb-3">
              <label class="form-check-label" for="option1">
                <div class="card" id="card-option1">
                    <div class="card-body">
                        <div class="justify-content-between d-flex">
                            <input class="form-check-input" type="radio" name="option" id="option1" value="1">
                            <svg width="30" height="27" viewBox="0 0 39 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.6767 7.29373C19.9169 7.71565 20.1842 8.25199 20.4744 8.93728C20.7075 9.48796 20.9148 10.0407 21.0908 10.5453C20.3205 10.3862 19.5087 10.2301 18.8702 10.1348C18.1198 11.1398 16.926 11.791 15.5839 11.791C14.0263 11.791 12.6683 10.914 11.9715 9.62465C11.8998 9.61242 11.8267 9.60464 11.7515 9.60464C11.275 9.60464 10.5662 9.78561 9.89606 10.6478C9.6135 11.0113 9.44148 11.3616 9.40988 11.4282C9.36445 11.5238 9.33065 11.6246 9.30911 11.7284L7.96605 18.2094C7.87825 18.633 8.00315 19.0719 8.29777 19.3858H11.8737C12.3981 19.3075 12.9742 19.2268 13.5656 19.1533C15.57 18.9041 16.7688 18.8563 17.4735 18.8737C17.5564 18.6194 17.7918 18.434 18.0718 18.434H20.5115C20.5866 18.1791 20.5874 17.8994 20.4948 17.6289C20.3526 17.2138 19.9823 16.6656 19.0257 16.4119C18.6325 16.3076 18.1428 16.2494 17.5284 16.234C16.6201 16.2113 15.4108 16.2837 13.9335 16.4493C12.8505 16.5708 11.7871 16.7232 10.9273 16.8575L11.575 13.7316L11.952 13.7744L11.4081 16.3993C12.2868 16.2679 13.1201 16.1578 13.8916 16.0714C15.2035 15.9242 16.3133 15.8496 17.19 15.8496C17.3103 15.8496 17.4262 15.851 17.5377 15.8538C17.909 15.863 18.2373 15.8882 18.5307 15.9289L19.019 12.8377C20.0055 13.0143 21.4611 13.3196 22.7264 13.6097C22.8233 13.6319 22.9211 13.6427 23.0182 13.6427C23.3699 13.6427 23.712 13.5003 23.9623 13.2399C24.2817 12.9076 24.4057 12.4316 24.2892 11.9842C24.2659 11.8947 23.7077 9.76805 22.7929 7.66927C22.2519 6.4284 20.6048 2.65257 17.8857 3.16384C17.5057 3.23527 17.1956 3.46549 17.0076 3.77285C18.4669 4.31723 19.5372 5.67331 19.6767 7.29373Z" fill="#060020"/>
                                <path d="M10.948 31.6215L6.14362 33.1097V33.7189C5.83581 33.8717 5.62354 34.1899 5.62354 34.5588C5.62354 35.0763 6.04024 35.4959 6.5543 35.4959C7.06834 35.4959 7.48504 35.0764 7.48504 34.5588C7.48504 34.1907 7.27367 33.873 6.96691 33.7198L10.948 32.4866V33.7189C10.6402 33.8717 10.4279 34.1899 10.4279 34.5588C10.4279 35.0763 10.8446 35.4959 11.3587 35.4959C11.8727 35.4959 12.2894 35.0764 12.2894 34.5588C12.2894 34.1899 12.0771 33.8717 11.7692 33.7188V32.4866L15.7504 33.7198C15.4436 33.8731 15.2322 34.1907 15.2322 34.5588C15.2322 35.0763 15.6489 35.4959 16.163 35.4959C16.677 35.4959 17.0937 35.0764 17.0937 34.5588C17.0937 34.1899 16.8814 33.8717 16.5736 33.7188V33.1097L11.7692 31.6215V31.2378H10.948V31.6215Z" fill="#060020"/>
                                <path d="M18.8207 34.5024C19.0632 35.4054 19.8751 36 20.7619 36C20.9356 36 21.1124 35.9771 21.2881 35.9294C22.3609 35.6375 22.9954 34.5253 22.7055 33.4453L22.1129 31.2378H17.9443L18.8207 34.5024Z" fill="#060020"/>
                                <path d="M23.9325 34.5024C24.175 35.4054 24.9869 36 25.8737 36C26.0474 36 26.2242 35.9771 26.3999 35.9294C27.4727 35.6375 28.1072 34.5253 27.8173 33.4453L27.2247 31.2378H23.0562L23.9325 34.5024Z" fill="#060020"/>
                                <path d="M7.59589 18.1316L8.93878 11.6507C8.96652 11.5173 9.01016 11.3872 9.06853 11.2641C9.10303 11.1914 9.29085 10.8087 9.59801 10.4134C10.2111 9.6247 10.8654 9.33663 11.3898 9.2534C11.1603 8.94713 10.7972 8.75232 10.3938 8.75232H3.4686C2.70177 8.75232 2.11628 9.44199 2.23573 10.2046L3.67367 19.3858H7.82295C7.59116 19.0166 7.50516 18.569 7.59589 18.1316Z" fill="#060020"/>
                                <path d="M17.4692 19.2543C17.4681 19.2542 17.4669 19.2542 17.4658 19.2542V19.3858H17.5254C17.5018 19.3446 17.4832 19.3007 17.4692 19.2543Z" fill="#060020"/>
                                <path d="M15.5837 11.4107C17.6448 11.4107 19.3153 9.72871 19.3153 7.65378C19.3153 5.57884 17.6448 3.89688 15.5837 3.89688C13.5229 3.89688 11.8521 5.57884 11.8521 7.65378C11.8521 9.72871 13.5229 11.4107 15.5837 11.4107ZM18.009 8.40572C18.009 8.69731 17.7742 8.93368 17.4846 8.93368C17.195 8.93368 16.9602 8.69731 16.9602 8.40572C16.9602 8.11415 17.195 7.87778 17.4846 7.87778C17.7742 7.87778 18.009 8.11415 18.009 8.40572ZM15.0796 7.87778C15.3692 7.87778 15.604 8.11415 15.604 8.40572C15.604 8.69731 15.3692 8.93368 15.0796 8.93368C14.79 8.93368 14.5552 8.69731 14.5552 8.40572C14.5552 8.11415 14.79 7.87778 15.0796 7.87778Z" fill="#060020"/>
                                <path d="M1.20454 22.1695H2.0942V35.4473H3.16184V30.7417H35.8382V35.4473H36.9058V22.1695H37.7955V20.7087H39V19.8819H0V20.7087H1.20454V22.1695Z" fill="#060020"/>
                                <path d="M18.0716 19.3271H24.0722H31.3633H33.4888C33.6387 19.3271 33.7675 19.22 33.7956 19.0718L35.2203 11.5763C35.2572 11.3824 35.1096 11.2027 34.9135 11.2027H25.4969C25.347 11.2027 25.2183 11.3099 25.1901 11.4581L23.7919 18.8142H18.0716C17.9315 18.8142 17.8169 18.9296 17.8169 19.0707C17.8169 19.2117 17.9315 19.3271 18.0716 19.3271ZM29.5562 13.7741C29.5947 13.5543 29.803 13.376 30.0214 13.376C30.2397 13.376 30.3856 13.5543 30.347 13.7741C30.3085 13.994 30.1003 14.1722 29.8819 14.1722C29.6635 14.1722 29.5177 13.994 29.5562 13.7741Z" fill="#060020"/>
                            </svg>
                        </div>
                        <p class="card-text text-left mb-0 mt-1" style="font-size: 18px; font-weight:400;">Im a freelancer and worker looking for job</p>
                    </div>
                </div>
            </label>
        </div>
          <div class="form-check mb-3">
              <label class="form-check-label" for="option2">
                <div class="card" id="card-option2">
                    <div class="card-body">
                      <div class="justify-content-between d-flex">

                        <svg width="30" height="30" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.4118 11.031C12.3193 11.0345 13.2025 10.7387 13.9248 10.1893C13.9362 10.1513 13.9506 10.116 13.9628 10.0791C13.9821 10.021 14.0008 9.96512 14.0228 9.90584C14.0467 9.84238 14.0726 9.78006 14.0988 9.71584C14.1227 9.65884 14.1459 9.60184 14.1718 9.5456C14.2014 9.481 14.2337 9.4183 14.266 9.3556C14.2918 9.30506 14.3162 9.25338 14.342 9.2036C14.3914 9.11354 14.445 9.02576 14.4997 8.9376C14.5225 8.9015 14.5457 8.8654 14.5696 8.82968C14.6297 8.73962 14.6916 8.6507 14.7573 8.56368C14.7847 8.52796 14.8143 8.49376 14.8428 8.45842C14.8953 8.39268 14.9485 8.32732 15.0043 8.26424C15.0378 8.22624 15.0731 8.18824 15.1081 8.15252C15.162 8.09476 15.2168 8.03852 15.2738 7.98228C15.3118 7.94428 15.3517 7.90856 15.3912 7.87246C15.4223 7.84358 15.452 7.81356 15.4839 7.78544C15.5562 7.47783 15.5924 7.16284 15.5918 6.84684C15.5914 6.01976 15.3457 5.21138 14.8858 4.52393C14.4259 3.83648 13.7725 3.30083 13.0083 2.98472C12.244 2.6686 11.4031 2.58622 10.592 2.74799C9.78087 2.90977 9.03595 3.30842 8.4514 3.89355C7.86686 4.47868 7.46895 5.22401 7.30799 6.03528C7.14703 6.84655 7.23024 7.68733 7.54712 8.45131C7.864 9.21529 8.4003 9.86814 9.08821 10.3273C9.77612 10.7865 10.5847 11.0314 11.4118 11.031Z" fill="#060020"/>
                            <path d="M27.934 35.3324V23.3901C27.9329 22.3904 27.5353 21.432 26.8284 20.725C26.1214 20.0181 25.163 19.6205 24.1633 19.6194H13.8371C12.8374 19.6205 11.879 20.0181 11.1721 20.725C10.4651 21.432 10.0675 22.3904 10.0664 23.3901V35.3324H12.7538V25.1104C12.7538 24.9592 12.8138 24.8142 12.9207 24.7073C13.0276 24.6005 13.1726 24.5404 13.3238 24.5404C13.4749 24.5404 13.6199 24.6005 13.7268 24.7073C13.8337 24.8142 13.8938 24.9592 13.8938 25.1104V35.3324H24.1089V25.1104C24.1089 24.9592 24.169 24.8142 24.2759 24.7073C24.3828 24.6005 24.5278 24.5404 24.6789 24.5404C24.8301 24.5404 24.9751 24.6005 25.082 24.7073C25.1889 24.8142 25.2489 24.9592 25.2489 25.1104V35.3324H27.934Z" fill="#060020"/>
                            <path d="M22.5142 7.79C22.5419 7.81432 22.5678 7.84092 22.5951 7.866C22.6396 7.90666 22.6837 7.94732 22.7262 7.9895C22.7749 8.037 22.8216 8.08602 22.8683 8.13542C22.909 8.17874 22.95 8.22168 22.9896 8.26614C23.0363 8.31934 23.0804 8.37406 23.1252 8.42878C23.1606 8.47286 23.197 8.5158 23.2312 8.56102C23.2791 8.62372 23.3236 8.68832 23.3684 8.7533C23.3958 8.7913 23.4247 8.8293 23.4513 8.87148C23.52 8.97712 23.5854 9.08466 23.6462 9.19448C23.6565 9.2131 23.6652 9.23248 23.6755 9.25148C23.7256 9.34496 23.7743 9.4392 23.8187 9.53572C23.8377 9.57676 23.8541 9.61856 23.8719 9.65998C23.9046 9.73598 23.9369 9.81198 23.9658 9.88798C23.9836 9.93586 23.9992 9.9845 24.0156 10.0328C24.0319 10.081 24.0536 10.1357 24.0695 10.1882C24.8217 10.7554 25.7435 11.0519 26.6854 11.0296C27.6272 11.0072 28.5339 10.6674 29.2584 10.0651C29.9829 9.46283 30.4827 8.63347 30.6767 7.71154C30.8707 6.78961 30.7476 5.82918 30.3273 4.986C29.907 4.14282 29.2142 3.46635 28.3612 3.0663C27.5082 2.66626 26.5451 2.56609 25.6281 2.78205C24.711 2.99801 23.8939 3.51744 23.309 4.25608C22.7242 4.99473 22.4061 5.90927 22.4063 6.8514C22.4057 7.16739 22.4419 7.48237 22.5142 7.79Z" fill="#060020"/>
                            <path d="M2.47021 30.4H5.16176V20.178C5.16176 20.1031 5.1765 20.029 5.20514 19.9599C5.23379 19.8907 5.27577 19.8279 5.3287 19.7749C5.38163 19.722 5.44447 19.68 5.51363 19.6514C5.58278 19.6227 5.6569 19.608 5.73176 19.608C5.80661 19.608 5.88073 19.6227 5.94988 19.6514C6.01904 19.68 6.08188 19.722 6.13481 19.7749C6.18774 19.8279 6.22972 19.8907 6.25837 19.9599C6.28701 20.029 6.30176 20.1031 6.30176 20.178V30.4H8.92641V23.3901C8.92782 22.0882 9.44566 20.8399 10.3663 19.9193C11.2869 18.9986 12.5352 18.4808 13.8372 18.4794H24.1633C25.4653 18.4808 26.7135 18.9986 27.6341 19.9193C28.5548 20.8399 29.0726 22.0882 29.074 23.3901V30.4H31.7006V20.178C31.7006 20.0268 31.7606 19.8818 31.8675 19.7749C31.9744 19.668 32.1194 19.608 32.2706 19.608C32.4217 19.608 32.5667 19.668 32.6736 19.7749C32.7805 19.8818 32.8406 20.0268 32.8406 20.178V30.4H35.5302V18.4574C35.5291 17.4576 35.1315 16.4992 34.4246 15.7923C33.7177 15.0854 32.7592 14.6877 31.7595 14.6866H23.4572C23.4413 14.7117 23.4223 14.7349 23.4056 14.76C23.3622 14.8246 23.3166 14.8869 23.2707 14.95C23.2205 15.0187 23.1692 15.0864 23.1156 15.1521C23.062 15.2179 23.0145 15.2733 22.9636 15.3322C22.9127 15.3911 22.8496 15.4565 22.7915 15.5165C22.7333 15.5766 22.6817 15.6267 22.6247 15.6799C22.562 15.7385 22.4974 15.7939 22.432 15.8498C22.3742 15.8984 22.318 15.9475 22.2564 15.9938C22.1858 16.0482 22.1128 16.0995 22.0395 16.1504C21.9798 16.1918 21.9213 16.2336 21.8601 16.2724C21.7795 16.3237 21.6963 16.37 21.6127 16.4168C21.5542 16.4498 21.4987 16.4844 21.4372 16.5148C21.3414 16.5638 21.2422 16.6071 21.143 16.6505C21.0917 16.6729 21.042 16.6983 20.991 16.7192C20.839 16.7804 20.6813 16.8355 20.5214 16.883C19.5296 17.1785 18.4732 17.1785 17.4814 16.883C17.3218 16.8359 17.1656 16.7804 17.0128 16.7192C16.9608 16.6983 16.911 16.6733 16.8608 16.6508C16.7616 16.6075 16.6625 16.5642 16.5667 16.5152C16.5082 16.4852 16.4527 16.451 16.3942 16.4187C16.3094 16.3712 16.2247 16.324 16.143 16.272C16.0841 16.234 16.029 16.196 15.9705 16.1542C15.8945 16.1014 15.8185 16.0485 15.7455 15.9915C15.6885 15.9478 15.6342 15.9015 15.5791 15.8555C15.5099 15.797 15.4415 15.7377 15.3754 15.6754C15.3222 15.626 15.2705 15.5747 15.2196 15.5234C15.156 15.4588 15.0943 15.3927 15.0345 15.325C14.9863 15.2707 14.9388 15.2156 14.8928 15.159C14.835 15.0879 14.7788 15.0149 14.7256 14.9405C14.683 14.8823 14.6405 14.8238 14.5998 14.7634C14.5827 14.7379 14.5618 14.714 14.5466 14.6874H6.24894C5.2483 14.6875 4.28855 15.0844 3.58017 15.7912C2.8718 16.4979 2.47263 17.4567 2.47021 18.4574V30.4Z" fill="#060020"/>
                            <path d="M16.3551 8.54544C15.7669 9.02127 15.3214 9.6502 15.0677 10.363C15.0317 10.4643 14.9993 10.5677 14.9704 10.6731C14.8686 11.0339 14.8174 11.407 14.8184 11.7819C14.8176 12.5013 15.0042 13.2085 15.3599 13.8339C15.8143 14.6376 16.5219 15.2684 17.3723 15.6278C18.2228 15.9873 19.1683 16.0551 20.0614 15.8208C20.9545 15.5866 21.7449 15.0633 22.3094 14.3327C22.874 13.6021 23.1808 12.7052 23.1822 11.7819C23.1832 11.4298 23.1379 11.0791 23.0473 10.7388C23.0366 10.7141 23.0276 10.6887 23.0203 10.6628C22.7964 9.83218 22.3169 9.09304 21.6496 8.55C20.9039 7.93694 19.9686 7.60148 19.0032 7.60079C18.0378 7.60009 17.1021 7.93421 16.3555 8.5462L16.3551 8.54544Z" fill="#060020"/>
                            <circle cx="17.1904" cy="10.8571" r="0.904762" fill="white"/>
                            <circle cx="25.3335" cy="6.33334" r="0.904762" fill="white"/>
                            <circle cx="9.04783" cy="6.33334" r="0.904762" fill="white"/>
                            <circle cx="20.8095" cy="10.8571" r="0.904762" fill="white"/>
                            <circle cx="28.9526" cy="6.33334" r="0.904762" fill="white"/>
                            <circle cx="12.6665" cy="6.33334" r="0.904762" fill="white"/>
                        </svg>
                        <input class="form-check-input" type="radio" name="option" id="option2" value="2">
                      </div>
                        <p class="card-text text-left mb-0 mt-1" style="font-size: 18px; font-weight:400;">Im a client looking for a freelancer</p>
                    </div>
                </div>
            </label>
        </div>
          <div class="form-check mb-3">
              <label class="form-check-label" for="option3">
                <div class="card" id="card-option3">
                    <div class="card-body">
                      <div class="justify-content-between d-flex">

                        <svg width="34" height="30" viewBox="0 0 41 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_740_249)">
                                <path d="M20.4979 11.8666C23.7824 11.8666 26.445 9.21015 26.445 5.93329C26.445 2.65642 23.7824 0 20.4979 0C17.2134 0 14.5508 2.65642 14.5508 5.93329C14.5508 9.21015 17.2134 11.8666 20.4979 11.8666Z" fill="#060020"/>
                                <path d="M7.74227 24.3009C7.25648 27.6527 7.15351 31.7996 7.43664 36.6263C7.50246 37.7475 8.43428 38.6127 9.54549 38.6127C9.58704 38.6127 9.62912 38.6115 9.6712 38.609C10.8369 38.5409 11.7266 37.5429 11.6585 36.3798C11.3921 31.8365 11.4827 27.9757 11.928 24.905C12.0126 24.3219 12.1081 23.7838 12.2115 23.286C12.5336 21.7335 12.9355 20.5799 13.3492 19.7335V28.4481V32.6679C13.4334 32.7357 13.5125 32.8046 13.5793 32.8755C13.9087 33.2248 13.9621 33.5538 13.9489 33.7683C13.9207 34.2238 13.6858 34.6365 13.3492 35.0245V40.2822C14.6902 41.0893 16.3441 42.2995 17.668 44.4854C19.4888 47.4921 18.0128 51.6885 17.2883 53.3627L17.877 54.0649C18.4637 54.7646 18.3706 55.81 17.6693 56.3954C17.3724 56.6432 16.9948 56.7797 16.6066 56.7797C16.1128 56.7797 15.6484 56.564 15.3333 56.1881L14.8854 55.6541C14.4709 55.8518 13.9621 56.0533 13.3492 56.2334V59.2852C13.3492 61.0863 14.8127 62.5454 16.617 62.5454C18.4218 62.5454 19.8853 61.0863 19.8853 59.2852V35.4805H21.1104V59.2852C21.1104 61.0863 22.5739 62.5454 24.3782 62.5454C26.183 62.5454 27.6465 61.0863 27.6465 59.2852V56.2863C26.9096 56.0692 26.2838 55.8129 25.7712 55.5593L25.3825 56.0227C25.0673 56.3987 24.6032 56.6143 24.1094 56.6143C23.7209 56.6143 23.3435 56.4778 23.0467 56.2299C22.7078 55.9473 22.4995 55.5486 22.46 55.1076C22.4208 54.6665 22.5553 54.2375 22.8389 53.8993L23.3854 53.2477C22.9838 51.2684 22.3261 47.1084 23.3782 45.0727C24.4094 43.077 25.9367 41.8571 27.2841 40.7807C27.4082 40.6815 27.5273 40.5857 27.6465 40.4895V35.0928C26.7204 34.3913 26.1608 33.8504 26.0848 33.2474C26.0482 32.9581 26.1287 32.686 26.3171 32.4604C26.5554 32.175 26.9312 32.0302 27.4335 32.0302C27.502 32.0302 27.5741 32.0348 27.6465 32.0397V28.448V19.7227C28.3922 21.2698 29.0859 23.8083 29.3602 27.7989C29.5205 30.1324 29.5378 32.9608 29.3373 36.3798C29.2692 37.5429 30.1589 38.5411 31.3248 38.609C31.3669 38.6115 31.4085 38.6127 31.4503 38.6127C32.5615 38.6127 33.4933 37.7474 33.5591 36.6263C33.772 32.9959 33.7658 29.7796 33.5446 26.9786C33.0872 21.1839 31.7053 17.176 29.408 15.0226C27.9207 13.6285 26.4679 13.3917 25.7258 13.3753C25.6852 13.3729 25.645 13.3692 25.6038 13.3692H15.3919C15.3627 13.3692 15.3343 13.3724 15.3053 13.3736C13.9005 13.3891 9.74978 14.1728 8.04394 22.5638C7.93303 23.1093 7.8319 23.6849 7.74312 24.2966L7.74227 24.3009ZM20.4976 31.2727L17.9866 29.3716L19.4328 18.7387C19.7757 18.867 20.1364 18.9339 20.4971 18.9337H20.4991C20.8594 18.9337 21.2195 18.8667 21.5619 18.7385L23.0086 29.3716L20.4976 31.2727ZM19.493 15.5272H20.4976H21.5017L22.004 17.505L21.9277 17.6252C21.5137 17.9695 21.0067 18.1422 20.4971 18.1426C19.9875 18.1422 19.4813 17.97 19.0677 17.6264L18.9907 17.505L19.493 15.5272Z" fill="#060020"/>
                                <ellipse cx="17.4318" cy="5.67965" rx="1.32483" ry="1.31602" fill="white"/>
                                <ellipse cx="23.0104" cy="5.67965" rx="1.32483" ry="1.31602" fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_740_249">
                                    <rect width="41" height="32" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <input class="form-check-input" type="radio" name="option" id="option3" value="3">
                      </div>
                        <p class="card-text text-left mb-0 mt-1" style="font-size: 18px; font-weight:400;">I have a company and I'm looking for a worker</p>
                    </div>
                </div>
            </label>
        </div>

          <button type="button" id="login-button" class="btn btn-login mt-3 mb-2" disabled>Create Account</button>

            <div class="d-flex align-items-center">
                <hr class="flex-grow-1 thick-line">
                <span class="mx-2 text-line">Already have an Clocker account? <a href="" class="text-landing">Log in</a></span>
                <hr class="flex-grow-1 thick-line">
            </div>


        </form>
      </div>


      <div class="toggle-box">
        <img loading="lazy" src="{{ asset('assets/images/4ec9514b66c366d84e143a15f119c010.png') }}" alt="" class="logo">
        <div class="toggle-panel toggle-left">
          <h1>Welcome Back</h1>
          <p>Hi, nice to see you back and stay connected with us.</p>
          <button class="btn register-btn text-white">Sign Up</button>
          <img loading="lazy" src="{{ asset('assets_landing/images/login1.png') }}" alt="login1" class="login1">
          <img loading="lazy" src="{{ asset('assets_landing/images/login2.png') }}" alt="login2" class="login2">
        </div>

        <div class="toggle-panel toggle-right">
          <h1>Welcome Back!</h1>
          <p>Start your journey in building your career with us at Clocker.</p>
          <button class="btn login-btn text-white">Login</button>
          <img loading="lazy" src="{{ asset('assets_landing/images/login1.png') }}" alt="login1" class="login3">
          <img loading="lazy" src="{{ asset('assets_landing/images/login2.png') }}" alt="login2" class="login4">
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
{{--
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Ambil semua radio buttons
        const radios = document.querySelectorAll('input[name="option"]');
        // Ambil tombol login
        const loginButton = document.getElementById('login-button');

        // URL tujuan Laravel route
        const destination = "{{ route('option') }}";

        // Teks tombol untuk setiap pilihan
        const buttonTexts = {
            '1': 'Join as a freelancer',
            '2': 'Apply as a job seeker',
            '3': 'Join as a company'
        };

        // Tambahkan event listener untuk setiap radio button
        radios.forEach(radio => {
            radio.addEventListener('change', function () {
                // Hapus kelas 'active' dari semua cards
                document.querySelectorAll('.card').forEach(card => {
                    card.classList.remove('active');
                });

                // Tambahkan kelas 'active' ke card yang sesuai
                const selectedCard = document.querySelector(`#card-${radio.id}`);
                if (selectedCard) {
                    selectedCard.classList.add('active');
                }

                // Aktifkan tombol dan atur teks
                if (document.querySelector('input[name="option"]:checked')) {
                    const selectedValue = document.querySelector('input[name="option"]:checked').value;

                    // Ubah kelas tombol
                    loginButton.classList.remove('btn-secondary');
                    loginButton.classList.add('btn-primary');
                    loginButton.disabled = false;

                    // Ubah teks tombol sesuai pilihan
                    loginButton.textContent = buttonTexts[selectedValue];

                    // Tambahkan fungsi redirect pada tombol
                    loginButton.onclick = () => {
                        window.location.href = destination;
                    };
                }
            });
        });
    });
</script> --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Ambil semua radio buttons
        const radios = document.querySelectorAll('input[name="option"]');
        // Ambil tombol login
        const loginButton = document.getElementById('login-button');

        // URL tujuan halaman berikutnya
        const nextPage = "/register"; // Ganti dengan URL halaman berikutnya

        // Teks tombol untuk setiap pilihan
        const buttonTexts = {
            '1': 'Join as a freelancer',
            '2': 'Apply as a job seeker',
            '3': 'Join as a company'
        };

        // Tambahkan event listener untuk setiap radio button
        radios.forEach(radio => {
            radio.addEventListener('change', function () {
                // Hapus kelas 'active' dari semua cards
                document.querySelectorAll('.card').forEach(card => {
                    card.classList.remove('active');
                });

                // Tambahkan kelas 'active' ke card yang sesuai
                const selectedCard = document.querySelector(`#card-${radio.id}`);
                if (selectedCard) {
                    selectedCard.classList.add('active');
                }

                // Aktifkan tombol dan atur teks
                if (document.querySelector('input[name="option"]:checked')) {
                    const selectedValue = document.querySelector('input[name="option"]:checked').value;

                    // Ubah kelas tombol
                    loginButton.classList.remove('btn-secondary');
                    loginButton.classList.add('btn-primary');
                    loginButton.disabled = false;

                    // Ubah teks tombol sesuai pilihan
                    loginButton.textContent = buttonTexts[selectedValue];

                    // Tambahkan fungsi redirect pada tombol
                    loginButton.onclick = () => {
                        // Simpan pilihan ke Local Storage
                        localStorage.setItem('selectedOption', selectedValue);
                        // Redirect ke halaman berikutnya
                        window.location.href = nextPage;
                    };
                }
            });
        });
    });
</script>

@endpush
