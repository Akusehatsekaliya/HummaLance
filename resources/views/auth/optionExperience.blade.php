@extends('auth.layout.app')
@section('style')
@endsection

@section('content')
    <div class="content">
        <div>
            <h6 class="move-up">Freelancer</h6>
        </div>
        <h1>
            Some questions that might help you: first, have you ever had br experience <br> as a freelancer?
        </h1>

        <p class="shift-right">
            This will let us know and can help you further in starting your career journey as a freelancer,
            we will not tell your <br> answer to anyone including clients and potential companies.
        </p>

        <div class="options">
            <label class="option" data-color="#C6FFD4">
                <input name="experience" type="radio" id="experience-1" />
                <x-svg class="vector-icon">{{ asset('assets/svg/login/freelancing.svg') }}</x-svg>
                <h3 style="font-weight: bold;">
                    I'm new to freelancing
                </h3>
                <p class="mb-0">
                    This option will let us know if you are new to the world of freelancing.
                </p>
            </label>

            <label class="option" data-color="#FFE0B5">
                <input name="experience" type="radio" />
                <x-svg class="vector-icon">{{ asset('assets/svg/login/experience.svg') }}</x-svg>

                </i>
                <h3 style="font-weight: bold;">
                    I have experience as a freelancer
                </h3>
                <p class="mb-0">
                    With this option we will know if you are a freelancer who has experience.
                </p>
            </label>

            <label class="option" data-color="#FFB8B4">
                <input name="experience" type="radio" />
                <x-svg class="vector-icon">{{ asset('assets/svg/login/expert.svg') }}</x-svg>

                </i>
                <h3 style="font-weight: bold;">
                    I am an expert in freelancer
                </h3>
                <p class="mb-0">
                    By choosing this option we will know that you are an experienced expert in the world of
                    freelancing.
                </p>
            </label>
        </div>
    </div>
    <div class="position-relative" style="width: 100%;">
        <div class="progress-container">
            <div class="progress-bar" id="progressBar"></div>
        </div>
    </div>
    <div class="footer">
        <button style="margin-left: 45px;">
            Back
        </button>
        <a href="#" style="margin-left: 775px; margin-top: 17px;">
            Skip if you are a job seeker
        </a>
        <button class="custom-button" style="background-color: #00AAFF; color: white;" id="nextBtn">
            Next
        </button>
    </div>
@endsection

@section('script')
    <script>
        $('input[name="experience"]').change(function() {
            console.log($(this), $(this).closest('.option').data("color"));
            $('.option').css('background-color', '');

            $(this).closest('.option').css('background-color', $(this).closest('.option').data("color"));
        });
    </script>

    <script>
        const progressBar = document.getElementById('progressBar');
        const steps = document.querySelectorAll('.step');
        const backBtn = document.getElementById('backBtn');
        const nextBtn = document.getElementById('nextBtn');

        let currentStep = 0;
        const maxSteps = 3;

        nextBtn.addEventListener('click', () => {
            if (currentStep < maxSteps) {
                currentStep++;
                updateProgress();
            }
        });

        backBtn.addEventListener('click', () => {
            if (currentStep > 0) {
                currentStep--;
                updateProgress();
            }
        });

        function updateProgress() {
            // Update progress bar width
            progressBar.style.width = `${(currentStep / (maxSteps - 1)) * 100}%`;

            // Update step indicators
            steps.forEach((step, index) => {
                if (index < currentStep) {
                    step.classList.add('active');
                } else {
                    step.classList.remove('active');
                }
            });
        }
    </script>
@endsection
