@extends('auth.layout.app')
@section('style')
    <style>
        label {
            font-weight: 500;
        }

        .container {
            max-width: 1200px;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 20px 0;
        }

        .header img {
            height: 50px;
        }

        .header a {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
        }

        .content {
            /* text-align: center; */
            margin-top: 50px;
        }

        .content h1 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 10px;
            margin-left: 45px;

        }

        .content p {
            font-size: 16px;
            color: #6c757d;
            margin-bottom: 40px;
        }

        .options {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-left: 12px;
        }

        .option {
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 20px;
            width: 347px;
            box-sizing: border-box;
            text-align: left;
            margin: 10px;
            position: relative;
            margin-left: 35px;

        }

        .option input {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .option i {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .option h3 {
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .option p {
            font-size: 14px;
            color: #6c757d;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 20px 0;
            margin-top: 50px;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
        }

        .footer button {
            background-color: transparent;
            border: 4px solid #f0f0f0;
            border-radius: 10px;
            padding: 8px 25px;
            font-size: 16px;
            cursor: pointer;
            color: #007bff;
        }

        /* .footer button:hover {
                    background-color: #f0f0f0;
                } */


        .custom-hr {
            border: none;
            height: 0.8px;
            width: 159.6%;
            background-color: #000;
            /* margin: 20px 0; */
            margin-left: -287px;
        }

        .shift-right {
            margin-left: 45px;
        }

        .move-up {
            position: relative;
            top: -15px;
            margin: 0;
            margin-left: 45px;
        }


        .progress-container {
            position: absolute;
            left: -175px;
            width: 100vw;
            height: 4px;
            background-color: #ddd;
            margin: 40px 0;
            border-radius: 12px;
            z-index: 1;
        }

        .progress-bar {
            position: absolute;
            height: 100%;
            width: 0;
            background-color: #00AAFF;
            /* Warna garis aktif */
            transition: width 0.3s ease;

        }

        .step {
            position: absolute;
            top: -10px;
            width: 20px;
            height: 20px;
            background-color: white;
            border: 4px solid #ddd;
            border-radius: 50%;
        }

        #step1 {
            left: 0%;
        }

        #step2 {
            left: 50%;
            transform: translateX(-50%);
        }

        #step3 {
            right: 0%;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <div class="content">
        <div>
            <h6 class="move-up">Freelancer</h6>
        </div>
        <h1>
            Some questions that might help you: first, have you ever had experience as a freelancer?
        </h1>

        <p class="shift-right">
            This will let us know and can help you further in starting your career journey as a freelancer,
            we will not tell your answer to anyone including clients and potential companies.
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
