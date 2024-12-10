<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    {{-- logo title --}}
    <link rel="icon" type="image/png" href="{{ asset('assets_landing/images/CLOCKER.png') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets_landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="{{ asset('assets_landing/vendor/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Material Design Icons -->
    <link href="{{ asset('assets_landing/vendor/icons/css/materialdesignicons.min.css') }}" media="all"
      rel="stylesheet" type="text/css">

    <link href="{{ asset('assets_landing/css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_landing/css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
      label {
        font-weight: 500;
      }
    </style>

  </head>

  <body>
    <section>
      <div class="container">
        <div class="row justify-content-center d-flex">
          <div class="col-lg-10 py-4">
            <div class="justify-content-between d-flex">
              <x-svg>{{ asset('assets/svg/landing/logo-login.svg') }}</x-svg>
              <p class="text-landing">{{ __('register.join_as_a_freelancer') }} <span class="text-body-2">or</span>
                {{ __('register.join_as_a_company') }}</p>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="card-register">
              <h4 id="signup-heading" class="justify-content-center d-flex">Lets start your journey as a freelancer</h4>
              <form action="">
            </div>

            <div class="row g-3">
              <div class="col-12">

                <label for="inputCountry" class="form-label">{{ __('register.country') }}</label>
                <select class="form-control mb-3" aria-label="Default select example" id="inputCountry">
                    <option selected>indonesia</option>
                    <option value="1">english</option>
                </select>

                <div class="row g-3 mb-3">
                    <div class="col-sm">
                        <label for="inputday" class="form-label">Day</label>
                        <input type="number" name="day" class="form-control" id="inputday">
                    </div>
                    <div class="col-sm">
                        <label for="inputmonth" class="form-label">Month</label>
                        <select id="inputmonth" class="form-control" name="month" required>
                        <option value="" disabled selected>MM</option>
                        <script>
                            for (let i = 1; i <= 12; i++) {
                                const value = i < 10 ? `0${i}` : i; // Format 01, 02, etc.
                                document.write(`<option value="${value}">${value}</option>`);
                            }
                        </script>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label for="year" class="form-label">Year</label>
                        <select id="year" name="year" class="form-control" required>
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
        </div>
      </div>
      </div>
    </section>
  </body>
</html>
