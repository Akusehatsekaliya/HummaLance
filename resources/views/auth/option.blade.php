@extends('auth.layout.app')
@section('content')
          <div class="col-lg-7">
            <div class="card-register">
              <h4 id="signup-heading" class="justify-content-center d-flex">Sign up to start your freelance career</h4>
              <form action="">
                <div id="header" class="header">
                  <div class="justify-content-between d-flex mt-5 gap-1" style="gap: 1rem;">
                    <button class="linkedin-register">
                      <img src="{{ asset('assets/svg/icons/mdi_linkedin.svg') }}" alt="" />
                      {{ __("continue_with") }} Linkedin
                    </button>
                    <a class="google-register" href="{{ route('journey') }}">
                      <img src="{{ asset('assets/images/c0ab57ca036251e04177a7fc61040073.jfif') }}" alt=""
                        class="profile-icon" />
                      <div class="text-area">
                        <span>{{ __('register.continue_as') }} Ahmad Rifaldi</span>
                        <span>ahmadrifaldikurniawan@gmail.com</span>
                      </div>
                      <img src="{{ asset('assets/svg/icons/flat-color-icons_google.svg') }}" alt=""
                        class="btn-icon" />
                    </a>
                  </div>
                  <div class="d-flex align-items-center my-3">
                    <hr class="flex-grow-1 thick-line">
                    <span class="mx-2 text-body-2">or</span>
                    <hr class="flex-grow-1 thick-line">
                  </div>
                </div>
                <div id="company-name-input">
                  <div class="row g-3 mt-5">
                    <label for="companyname" class="form-label">{{ __('register.company_name') }}</label>
                    <input type="text" class="form-control mb-3" id="companyname" style="border-radius: 9px; height: 45px;">

                    <label for="companyname" class="form-label">{{ __('register.company_name') }}</label>
                    <input type="text" class="form-control mb-3" id="companyname" style="border-radius: 9px; height: 45px;">
                  </div>
                </div>
            </div>

            <div class="row g-3">
              <div class="col-md-6">
                <label for="inputfisrt" class="form-label">{{ __('register.first_name') }}</label>
                <input type="text" class="form-control mb-3" id="inputfisrt" style="border-radius: 9px; height: 45px;">
              </div>
              <div class="col-md-6">
                <label for="inputlast" class="form-label">{{ __('register.last_name') }}</label>
                <input type="text" class="form-control mb-3" id="inputlast" style="border-radius: 9px; height: 45px;">
              </div>
              <div class="col-12">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control mb-3" id="inputEmail" style="border-radius: 9px; height: 45px;">

                <label for="inputPassword" class="form-label">{{ __('register.password') }}</label>
                <input type="password" class="form-control mb-3" id="inputPassword" style="border-radius: 9px; height: 45px;">

                <label for="inputCountry" class="form-label">{{ __('register.country') }}</label>
                <select class="form-control mb-3" aria-label="Default select example" id="inputCountry" style="border-radius: 9px; height: 45px;">
                    <option selected>indonesia</option>
                    <option value="1">english</option>
                </select>

                <div class="row g-3 mb-3">
                    <div class="col-sm">
                        <label for="inputday" class="form-label">Day</label>
                        <input type="number" name="day" class="form-control" id="inputday" style="border-radius: 9px; height: 45px;">
                    </div>
                    <div class="col-sm">
                        <label for="inputmonth" class="form-label">Month</label>
                        <select id="inputmonth" class="form-control" name="month" style="border-radius: 9px; height: 45px;" required>
                            <option value="" disabled selected>Month</option>
                            <script>
                                const months = [
                                    { value: '01', name: 'January' },
                                    { value: '02', name: 'February' },
                                    { value: '03', name: 'March' },
                                    { value: '04', name: 'April' },
                                    { value: '05', name: 'May' },
                                    { value: '06', name: 'June' },
                                    { value: '07', name: 'July' },
                                    { value: '08', name: 'August' },
                                    { value: '09', name: 'September' },
                                    { value: '10', name: 'October' },
                                    { value: '11', name: 'November' },
                                    { value: '12', name: 'December' },
                                ];

                                months.forEach(month => {
                                    document.write(`<option value="${month.value}">${month.name}</option>`);
                                });
                            </script>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label for="year" class="form-label">Year</label>
                        <select id="year" name="year" class="form-control" style="border-radius: 9px; height: 45px;" required>
                            <option value="" disabled selected>YYYY</option>
                            <script>
                                const currentYear = new Date().getFullYear();
                                for (let i = currentYear; i >= 1900; i--) {
                                    document.write(`<option value="${i}">${i}</option>`);
                                }
                            </script>
                        </select>
                    </div>
                </div>

                <div class="form-check my-1">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Send me helpful emails to find rewarding work and job leads.
                  </label>
                </div>
                <div class="form-check mt-1 mb-2">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Yes, I understand and agree to the <span class="text-landing">Clocker Terms of Service</span> ,
                    including the <span class="text-landing">User Agreement</span> <br> and <span
                      class="text-landing">Privacy Policy</span>.
                  </label>
                </div>
              </div>


              <div class="col-12 justify-content-center d-flex">
                <button type="submit" class="btn btn-primary">Create my account</button>
              </div>
            </div>
            </form>
            <div class="d-flex align-items-center my-3">
              <hr class="flex-grow-1 thick-line">
              <span class="mx-2 text-body-2">Already have an Clocker account? <span class="text-landing">Log
                  in</span></span>
              <hr class="flex-grow-1 thick-line">
            </div>
          </div>
@endsection
@section('script')
  {{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Ambil pilihan dari Local Storage
        const selectedOption = localStorage.getItem('selectedOption');
        const signupHeading = document.getElementById('signup-heading');

        // Mapkan teks ke opsi
        const texts = {
            '1': 'Sign up to start your freelance career',
            '2': 'Sign to find a job that you love and that suits you',
            '3': 'Sign to find a job that you love and that suits you'
        };

        // Perbarui teks berdasarkan pilihan
        if (texts[selectedOption]) {
            signupHeading.textContent = texts[selectedOption];
        }
    });
</script> --}}

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Ambil pilihan dari Local Storage
      const selectedOption = localStorage.getItem('selectedOption');
      const signupHeading = document.getElementById('signup-heading');
      const header = document.getElementById('header'); // Elemen header
      const companyNameInput = document.getElementById('company-name-input'); // Input company name

      // Teks yang akan digunakan untuk masing-masing pilihan
      const texts = {
        '1': 'Sign up to start your freelance career',
        '2': 'Sign to find a job that you love and that suits you',
        '3': 'Sign to find a job that you love and that suits you'
      };

      // Perbarui teks heading dan tampilan form sesuai pilihan yang tersimpan
      if (selectedOption && texts[selectedOption]) {
        signupHeading.textContent = texts[selectedOption];
        updateFormDisplay(selectedOption);
      }

      // Fungsi untuk memperbarui tampilan form berdasarkan opsi
      function updateFormDisplay(option) {
        if (option === '3') {
          // Jika Option 3 dipilih, sembunyikan header dan tampilkan input Company Name
          header.style.display = 'none';
          companyNameInput.style.display = 'block';
        } else {
          // Jika Option 1 atau Option 2 dipilih, tampilkan header dan sembunyikan input Company Name
          header.style.display = 'block';
          companyNameInput.style.display = 'none';
        }
      }
    });
  </script>
@endsection
