@extends('auth.layout.app')
@section('style')
    <style>
        label {
            font-weight: 500;
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
            border-radius: 15px;
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
            font-style: italic;
            color: #000;
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

        .custom-hr {
            border: none;
            height: 0.8px;
            width: 100vw;
            background-color: #000;
            /* margin: 20px 0; */
            margin-left: -16.1%;
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
            left: -9.1%;
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

        .option {
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease, transform 0.3s ease;
            cursor: pointer;
        }

        .option.selected {
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
            transform: scale(1.03);
        }

        .shift-right {
            display: block;
            max-width: 100%;
            word-wrap: break-word;
        }



        .card-question1 input[type="radio"] {
            -webkit-appearance: none;
            appearance: none;
            height: 100%;
            width: 100%;
            border-radius: 10px;
            position: absolute;
            /* box-shadow: 7px 7px 15px rgba(2, 28, 53, 0.08); */
            cursor: pointer;
            outline: none;
            /* border: 2px solid transparent; */
            /* transition: transform 0.3s, border 0.3s; */
        }

        .card-question1 input[type="radio"]::before {
            content: "";
            position: absolute;
            height: 22px;
            width: 22px;
            background-color: #f9fafd;
            border: 1px solid #e2e6f3;
            border-radius: 50%;
            top: -4px;
            right: -2px;
        }

        .card-question1 input[type="radio"]::after {
            content: "";
            position: absolute;
            height: 11px;
            width: 11px;
            background-color: transparent;
            border-radius: 50%;
            top: 2px;
            right: 3px;
            /* transition: background-color 0.3s; */
        }

        .card-question1 input[type="radio"]:checked {

            transform: scale(1.05);
        }

        .card-question1 {
            --data-color: #00AAFF;
        }

        .card-question1 input[type="radio"]:checked::after {
            background-color: var(--data-color);
            border: 2.3px solid #ffff;
            height: 12px;
            width: 12px;
            top: 1.9px;
            right: 2.9px;
        }

        .card-question1 input[type="radio"]:checked::before {
            background-color: var(--data-color);
        }
    </style>
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
                <div class="card-question1">
                    <input name="experience" type="radio" id="experience-1" data-color="#34C759" />
                </div>
                <x-svg class="vector-icon">{{ asset('assets/svg/login/freelancing.svg') }}</x-svg>
                <h3 style="font-weight: bold;">
                    I'm new to freelancing
                </h3>
                <p class="mb-0">
                    This option will let us know if you are new to the world of freelancing.
                </p>
            </label>

            <label class="option" data-color="#FFE0B5">
                <div class="card-question1">
                    <input name="experience" type="radio" data-color="#FF9500" />
                </div>
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
                <div class="card-question1">
                    <input name="experience" type="radio" data-color="#FF3B30" />
                </div>
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
            $('.option').css('background-color', '');
            $(this).css("--data-color", "");

            $(this).css("--data-color", $(this).data("color"));
            $(this).closest('.option').css('background-color', $(this).closest('.option').data("color"));
        });
    </script>

    <script>
        const options = document.querySelectorAll('.option');

        options.forEach(option => {
            option.addEventListener('click', () => {
                // Hapus kelas 'selected' dari semua kartu
                options.forEach(opt => opt.classList.remove('selected'));
                // Tambahkan kelas 'selected' ke kartu yang diklik
                option.classList.add('selected');
            });
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
            progressBar.style.width = `${(currentStep / (1 + maxSteps - 1)) * 100}%`;

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
