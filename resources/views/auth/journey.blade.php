@extends('auth.layout.app')
<!-- @if (!Session::has('user_id'))
    <script>
        location.href = "{{ route('option') }}"
    </script>
@endif -->
@section('content')
<div class="col-lg-7">
    <div class="card-register">
        <h4 id="signup-heading" class="justify-content-center d-flex text-nowrap">Sign up and discover your greatest
            potential as a freelancer or worker</h4>
    </div>
    <form method="POST" action="{{ route('freelancer_register_next_google', Session::get('user_id') || "") }}">
        @csrf
        <div class="row g-3">
            <div class="col-12">
                <div class="form-group">
                    <label for="inputPassword" class="form-label">{{ __('register.password') }}</label>
                    <input type="password" class="form-control mb-3" id="inputPassword"
                        style="border-radius: 9px; height: 45px;" name="password">
                    @error('password')
                    <span class="text-danger mb-3">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputCountry" class="form-label">{{ __('register.country') }}</label>
                    <select class="form-control mb-3" aria-label="Default select example" id="inputCountry"
                        name="country" style="border-radius: 9px; height: 45px;">
                        @foreach (App\Constract\Enums\CountryEnum::cases() as $item)
                        <option value="{{ $item->name }}">{{ $item->value }}</option>
                        @endforeach
                    </select>
                    @error('country')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-sm">
                        <label for="inputday" class="form-label">Day</label>
                        <input type="number" name="day" class="form-control" id="inputday"
                            style="border-radius: 9px; height: 45px;">
                    </div>
                    @error('year')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="col-sm">
                        <label for="inputmonth" class="form-label">Month</label>
                        <select id="inputmonth" class="form-control" name="month"
                            style="border-radius: 9px; height: 45px;" required>
                            <option value="" disabled selected>MM</option>
                            <script>
                                for (let i = 1; i <= 12; i++) {
                                    const value = i < 10 ? `0${i}` : i; // Format 01, 02, etc.
                                    document.write(`<option value="${i}">${value}</option>`);
                                }
                            </script>
                        </select>
                        @error('month')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-sm">
                        <label for="year" class="form-label">Year</label>
                        <select id="year" name="year" class="form-control"
                            style="border-radius: 9px; height: 45px;" required>
                            <option value="" disabled selected>YYYY</option>
                            <script>
                                const currentYear = new Date().getFullYear();
                                for (let i = currentYear; i >= 1900; i--) {
                                    document.write(`<option value="${i}">${i}</option>`);
                                }
                            </script>
                        </select>
                        @error('year')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
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