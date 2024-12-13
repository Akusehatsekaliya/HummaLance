@extends('auth.layout.app')
@section('style')
    <style>
        .custom-hr {
            border: none;
            height: 0.8px;
            width: 100vw;
            background-color: #000;
            /* margin: 20px 0; */
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

        /* .footer button:hover {
                    background-color: #f0f0f0;
                } */

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

        .card-aboutyou {
            border-radius: 5%;
            border: 1px solid #ffffff;
            box-shadow: 0 3px 3px #b8b8b861;
        }

        .img-bg {
            width: 100%
        }
        .img-profile {
            width: 100px;
            position: absolute;
            left: 91px;
            top: 63px;
            /* border: 3px solid #fff; */
        }

        h5 {
            font-weight: 500;
        }

        ul,
        ul li {
            list-style: inside;
        }
        .btn-outline-custom {
        border: 2px solid #00AAFF;
        width: 100%;
        color: #00AAFF;
        border-radius: 12px;
        padding: 10px;
        box-shadow: 0 0.5px 2px #aaaaaa;
    }

    .btn-outline-custom:hover {
        color: #00AAFF;
    }
    .img-about{
        height: 153px;
    }

    .modal-content {
        border-radius: 10px;
    }
    .border-header{
        border-bottom: none;
    }
    </style>
@endsection
@section('content')
    <div class="col-lg-5 px-5 pb-4">
        <div class="card-aboutyou">
            <div class="img-about">
                <img src="{{ asset('assets/images/bg-aboutyou.png') }}" class="img-bg">
                <img src="{{ asset('assets/images/profile.png') }}" class="img-profile rounded-circle">
            </div>

            <div class="px-4">
                <h4 class="mt-3 font-weight-bold">Ahmad Rifaldi K.</h4>
                <div class="row px-3 text-secondary">
                    <h5 class="mr-2"> Graphic Designer</h5>
                    <h5>(He/Him)</h5>
                </div>
                <div class="text-secondary">
                    <p class="text-justify mb-2">I am a graphic designer who is experienced in creating design feeds for
                        social media, video editing for reels, and designing logos for your products, motion design
                        animations for your logo, apart from that I also have experience as a UI/UX designer in creating
                        website designs starting from from display design to user experience design. I also master several
                        design and editing software such as </p>
                    <ul class="ml-2">
                        <li>Adobe Photoshop</li>
                        <li>Adobe Illustrator</li>
                        <li>Canva</li>
                        <li>Adobe After Effects</li>
                        <li>Adobe Premiere</li>
                        <li>Davinci</li>
                        <li>Capcut</li>
                    </ul>
                    <p class="text-justify py-2"> Communication is the most important thing for me in working together, so
                        that we stay connected and can share ideas with each other.</p>
                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-4 pb-4">
        <span style="font-weight: 600;">About You</span>
        <h4 class="font-weight-bold my-3">Can you tell us about yourself?</h4>
        <p>Everyone has a different version of themselves, and we want to know your story so we can recommend jobs that are a good fit for you.</p>

        <div class="button-about">
            <button class="btn btn-outline-custom my-3">
                <svg width="25" class="mr-2" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1594_1033)">
                    <path d="M22.2222 0C22.9589 0 23.6655 0.292658 24.1864 0.813592C24.7073 1.33453 25 2.04107 25 2.77778V22.2222C25 22.9589 24.7073 23.6655 24.1864 24.1864C23.6655 24.7073 22.9589 25 22.2222 25H2.77778C2.04107 25 1.33453 24.7073 0.813592 24.1864C0.292658 23.6655 0 22.9589 0 22.2222V2.77778C0 2.04107 0.292658 1.33453 0.813592 0.813592C1.33453 0.292658 2.04107 0 2.77778 0H22.2222ZM21.5278 21.5278V14.1667C21.5278 12.9658 21.0507 11.8142 20.2016 10.965C19.3525 10.1159 18.2008 9.63889 17 9.63889C15.8194 9.63889 14.4444 10.3611 13.7778 11.4444V9.90278H9.90278V21.5278H13.7778V14.6806C13.7778 13.6111 14.6389 12.7361 15.7083 12.7361C16.224 12.7361 16.7186 12.941 17.0833 13.3056C17.4479 13.6703 17.6528 14.1649 17.6528 14.6806V21.5278H21.5278ZM5.38889 7.72222C6.00773 7.72222 6.60122 7.47639 7.03881 7.03881C7.47639 6.60122 7.72222 6.00773 7.72222 5.38889C7.72222 4.09722 6.68056 3.04167 5.38889 3.04167C4.76637 3.04167 4.16934 3.28896 3.72915 3.72915C3.28896 4.16934 3.04167 4.76637 3.04167 5.38889C3.04167 6.68056 4.09722 7.72222 5.38889 7.72222ZM7.31944 21.5278V9.90278H3.47222V21.5278H7.31944Z" fill="#00AAFF"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_1594_1033">
                    <rect width="25" height="25" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>

                Impor Form Linkedin
            </button>
            <button class="btn btn-outline-custom my-3"  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <svg width="20" class="mr-2" height="25" viewBox="0 0 20 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1594_1042)">
                    <path d="M11.25 8.75H18.125L11.25 1.875V8.75ZM2.5 0H12.5L20 7.5V22.5C20 23.163 19.7366 23.7989 19.2678 24.2678C18.7989 24.7366 18.163 25 17.5 25H2.5C1.83696 25 1.20107 24.7366 0.732233 24.2678C0.263392 23.7989 0 23.163 0 22.5V2.5C0 1.1125 1.1125 0 2.5 0ZM12.5 22.5V21.25C12.5 19.5875 9.1625 18.75 7.5 18.75C5.8375 18.75 2.5 19.5875 2.5 21.25V22.5H12.5ZM7.5 12.5C6.83696 12.5 6.20107 12.7634 5.73223 13.2322C5.26339 13.7011 5 14.337 5 15C5 15.663 5.26339 16.2989 5.73223 16.7678C6.20107 17.2366 6.83696 17.5 7.5 17.5C8.16304 17.5 8.79893 17.2366 9.26777 16.7678C9.73661 16.2989 10 15.663 10 15C10 14.337 9.73661 13.7011 9.26777 13.2322C8.79893 12.7634 8.16304 12.5 7.5 12.5Z" fill="#00AAFF"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_1594_1042">
                    <rect width="20" height="25" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>

                Upload Your Resume
            </button>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                      </div>
                    </div>
                  </div>
            <button class="btn btn-outline-custom my-3">
                Fill in manually
            </button>
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
@endsection
