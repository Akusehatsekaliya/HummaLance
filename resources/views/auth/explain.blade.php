@extends('auth.layout.app')
@section('style')
    <style>
        .custom-hr {
            border: none;
            height: 0.8px;
            width: 100vw;
            background-color: #000;
            margin-left: -16.1%;
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
            transition: width 0.3s ease;

        }

        /* .step {
            position: absolute;
            top: -10px;
            width: 20px;
            height: 20px;
            background-color: white;
            border: 4px solid #ddd;
            border-radius: 50%;
        } */

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

        /* .button-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        } */

        /* button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        } */

        /* .img-bg {
            width: 100%
        }

        .img-profile {
            width: 100px;
            position: absolute;
            left: 91px;
            top: 63px;
        } */

        /* h5 {
            font-weight: 500;
        }

        ul,
        ul li {
            list-style: inside;
        } */

        /* .close-btn {
            position: absolute;
            top: 10px;
            right: 35px;
            font-size: 40px;
            cursor: pointer;
        } */

        /* h1 {
            font-size: 24px;
            color: #333;
        } */

        /* p {
            font-size: 14px;
            color: #666;
        } */


        /* .modal-footer {
            margin-top: 55px;
            border-top: none;
        } */

        /* .progress-bar12 {
            width: 100%;
            height: 4px;
            background-color: #e0e0e0;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 21px;
            margin-top: 40px;
        } */

        /* .progress-bar12 div {
            width: 50%;
            height: 100%;
            background-color: #2196f3;
        } */





        .content {
            display: flex;
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
            margin-top: 20px;
        }

        .left-section {
            width: 60%;
        }

        .left-section h1 {
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .left-section p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .left-section .instruction {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .left-section .instruction i {
            margin-right: 10px;
        }

        .left-section .write-box {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 20px;
            margin-bottom: 10px;
            height: 250px;
        }

        .left-section .write-box textarea {
            width: 100%;
            height: 100px;
            border: none;
            resize: none;
            font-size: 14px;
            padding: 10px;
            border-radius: 5px;
        }

        .left-section .write-box textarea:focus {
            outline: none;
        }

        .left-section .char-count {
            text-align: right;
            font-size: 12px;
            color: #888;
        }

        .right-section {
            width: 35%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .profile-card {
            width: 100%;
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-card img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .profile-card h2 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .profile-card p {
            font-size: 14px;
            color: #555;
        }

        .profile-card .role {
            font-size: 14px;
            color: #888;
            margin-bottom: 10px;
        }


        @media (max-width: 768px) {
            .content {
                flex-direction: column;
                align-items: center;
            }

            .left-section,
            .right-section {
                width: 100%;
            }
        }

        .break-line {
            display: block;
        }


        .profile-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            /* border: 2px solid #007bff; */
            overflow: hidden;
        }

        .profile-card img {
            width: 100%;
            height: auto;
        }

        .profile-card .profile-info {
            padding: 20px;
        }

        .profile-card .profile-info img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-top: -40px;
            border: 3px solid white;
        }

        .profile-card .profile-info h2 {
            margin: 10px 0 5px;
            font-size: 18px;
            color: #333;
        }

        .profile-card .profile-info h3 {
            margin: 0;
            font-size: 14px;
            color: #777;
        }

        .profile-card .profile-info p {
            font-size: 12px;
            color: #555;
            margin-top: 10px;
        }
    </style>
@endsection
@section('content')
    <div class="content">
        <div class="left-section">
            <h1>
                Cool, now write a description that explains
                <span class="break-line">about yourself.</span>
            </h1>

            <p>
                Write a description about yourself, it will make it easier for others to know what you are like, you can
                write about your experience, your area of expertise, your abilities, your skills, and so on.
            </p>
            <div class="instruction">
                <i class="fas fa-pencil-alt">
                </i>
                <span>
                    Tell as interesting a story as possible about yourself
                </span>
            </div>
            <div class="instruction">
                <i class="fas fa-info-circle">
                </i>
                <span>
                    Make sure that you add important details in your story
                </span>
            </div>
            <div class="write-box">

                <textarea
                    placeholder="Include your best skills in the description so people know what you are an expert in, and don't forget to add your experience too."></textarea>
            </div>
            <div class="char-count">
                At least 100 characters
            </div>
        </div>
        <div class="profile-card">
            <div class="">
                <img alt="Background image of a green iguana" height="150"
                    src="https://storage.googleapis.com/a1aa/image/Wl5mOqjL5QYNIlcnJrRsH9i0MeoGomVbef0Ozxu369oFP0BoA.jpg"
                    width="300" />
                <div class="profile-info">
                    <img alt="Profile image of Ahmad Rifaldi K." height="80"
                        src="https://storage.googleapis.com/a1aa/image/GqfDYN2s52WieEwOUU4C5cGSwwG2BK7msfQcznEhQABAP0BoA.jpg"
                        width="80" />
                    <h2>
                        Ahmad Rifaldi K.
                    </h2>
                    <h3>
                        Graphic Designer (He/Him)
                    </h3>
                    <p>
                        I am a graphic designer who is experienced in creating design feeds for social media, video editing
                        for reels, and designing logos for your product. I am a graphic designer who is experienced in
                        creating design feeds for social media, video editing for reels, and designing logos for your
                        product.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="position-relative" style="width: 100%;">
        <div class="progress-container mt-2">
            <div class="progress-bar" id="progressBar"></div>
        </div>
    </div>
    <div class="footer mt-4">
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

    <script>
        document.getElementById('uploadBox').addEventListener('click', function() {
            document.getElementById('fileInput').click();
        });

        document.getElementById('chooseFileLink').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('fileInput').click();
        });
    </script>

    <script>
        // Event listener untuk tombol Continue
        $(".continueButton").click(function() {
            console.log($(this).data("page"), $(`#page${$(this).data("page")}`));
            $(".page").css("display", "none");
            $(`#page${$(this).data("page")}`).css("display", "unset !important")
        });

        // Event listener untuk tombol Close pada modal Continue
        document.querySelectorAll('#uploadModal [data-bs-dismiss="modal"]').forEach((e) => {
            e.addEventListener('click', function() {
                document.getElementById('upload').classList.remove("d-none");
                document.getElementById('continue').classList.add("d-none");
            });
        });
    </script>
@endsection
