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

    .img-about {
        height: 153px;
    }

    .modal-content {
        border-radius: 10px;
    }

    .border-header {
        border-bottom: none;
    }

    .close-btn {
        position: absolute;
        top: 10px;
        right: 35px;
        font-size: 40px;
        cursor: pointer;
    }

    h1 {
        font-size: 24px;
        color: #333;
    }

    p {
        font-size: 14px;
        color: #666;
    }

    .upload-box {
        border: 2px dashed #666;
        /* border-radius: 8px; */
        padding: 40px;
        margin: 20px 0;
        background-color: #21bde828;
        position: relative;
    }

    .upload-box img {
        width: 100px;
        height: auto;
    }

    .upload-box2 img {
        width: 100px;
        height: auto;
    }

    .upload-box p {
        margin: 25px 0 0;
        color: #666;
    }

    .upload-box a {
        color: #007bff;
        text-decoration: none;
    }

    .upload-box a:hover {
        text-decoration: underline;
    }

    .continue-btn {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .continue-btn:hover {
        background-color: #0056b3;
    }

    .modal-footer {
        margin-top: 55px;
        border-top: none;
    }

    .progress-bar12 {
        width: 100%;
        height: 4px;
        background-color: #e0e0e0;
        border-radius: 5px;
        overflow: hidden;
        /* margin-bottom: 21px; */
        margin-top: 40px;
    }

    .progress-bar12 div {
        width: 50%;
        height: 100%;
        background-color: #2196f3;
    }

    .container h1 {
        font-size: 24px;
        color: #2c2c2c;
        margin-bottom: 20px;
        margin-top: 12px;
    }

    .resume-item {
        display: flex;
        align-items: center;
        background-color: #21bee829;
        border-radius: 5px;
        padding: 10px;
        margin-top: 50px;
    }

    .resume-item i {
        color: #007bff;
        margin-right: 10px;
    }

    .resume-item span {
        flex-grow: 1;
        color: #007bff;
        margin-left: 270px;
    }

    .resume-item .fa-check {
        color: #00AAFF;
        margin-right: 210px;
    }

    .resume-item .fa-trash {
        color: #00AAFF;
        cursor: pointer;
    }

    .continue-btn {
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 16px;
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
                    <h6 class="mr-2" style="margin-left: -17px;"> Graphic Designer (He/Him)</h6>
                </div>
                <div class="text-secondary">
                    <p class="text-justify mb-2">I am a graphic designer who is experienced in creating design feeds for
                        social media, video editing for reels, and designing logos for your products, motion design
                        animations for your logo, apart from that I also have experience as a UI/UX designer in creating
                        website designs starting from from display design to user experience design. I also master several
                        design and editing software such as </p>
                    <ul class="pl-3">
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
        <span style="margin-left: 320px; font-weight: 610; color: #000000; font-size: 0.8rem;">1/10</span>
        <h4 class="font-weight-bold my-3">Can you tell us about yourself?</h4>
        <p>Everyone has a different version of themselves, and we want to know your story so we can recommend jobs that are
            a good fit for you.</p>
        <div class="button-about">
            <button class="btn btn-outline-custom my-3">
                <svg width="25" class="mr-2" height="25" viewBox="0 0 25 25" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1594_1033)">
                        <path
                            d="M22.2222 0C22.9589 0 23.6655 0.292658 24.1864 0.813592C24.7073 1.33453 25 2.04107 25 2.77778V22.2222C25 22.9589 24.7073 23.6655 24.1864 24.1864C23.6655 24.7073 22.9589 25 22.2222 25H2.77778C2.04107 25 1.33453 24.7073 0.813592 24.1864C0.292658 23.6655 0 22.9589 0 22.2222V2.77778C0 2.04107 0.292658 1.33453 0.813592 0.813592C1.33453 0.292658 2.04107 0 2.77778 0H22.2222ZM21.5278 21.5278V14.1667C21.5278 12.9658 21.0507 11.8142 20.2016 10.965C19.3525 10.1159 18.2008 9.63889 17 9.63889C15.8194 9.63889 14.4444 10.3611 13.7778 11.4444V9.90278H9.90278V21.5278H13.7778V14.6806C13.7778 13.6111 14.6389 12.7361 15.7083 12.7361C16.224 12.7361 16.7186 12.941 17.0833 13.3056C17.4479 13.6703 17.6528 14.1649 17.6528 14.6806V21.5278H21.5278ZM5.38889 7.72222C6.00773 7.72222 6.60122 7.47639 7.03881 7.03881C7.47639 6.60122 7.72222 6.00773 7.72222 5.38889C7.72222 4.09722 6.68056 3.04167 5.38889 3.04167C4.76637 3.04167 4.16934 3.28896 3.72915 3.72915C3.28896 4.16934 3.04167 4.76637 3.04167 5.38889C3.04167 6.68056 4.09722 7.72222 5.38889 7.72222ZM7.31944 21.5278V9.90278H3.47222V21.5278H7.31944Z"
                            fill="#00AAFF" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1594_1033">
                            <rect width="25" height="25" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                Impor Form Linkedin
            </button>
            <button class="btn btn-outline-custom my-3" type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#uploadModal">
                <svg width="20" class="mr-2" height="25" viewBox="0 0 20 25" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1594_1042)">
                        <path
                            d="M11.25 8.75H18.125L11.25 1.875V8.75ZM2.5 0H12.5L20 7.5V22.5C20 23.163 19.7366 23.7989 19.2678 24.2678C18.7989 24.7366 18.163 25 17.5 25H2.5C1.83696 25 1.20107 24.7366 0.732233 24.2678C0.263392 23.7989 0 23.163 0 22.5V2.5C0 1.1125 1.1125 0 2.5 0ZM12.5 22.5V21.25C12.5 19.5875 9.1625 18.75 7.5 18.75C5.8375 18.75 2.5 19.5875 2.5 21.25V22.5H12.5ZM7.5 12.5C6.83696 12.5 6.20107 12.7634 5.73223 13.2322C5.26339 13.7011 5 14.337 5 15C5 15.663 5.26339 16.2989 5.73223 16.7678C6.20107 17.2366 6.83696 17.5 7.5 17.5C8.16304 17.5 8.79893 17.2366 9.26777 16.7678C9.73661 16.2989 10 15.663 10 15C10 14.337 9.73661 13.7011 9.26777 13.2322C8.79893 12.7634 8.16304 12.5 7.5 12.5Z"
                            fill="#00AAFF" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1594_1042">
                            <rect width="20" height="25" fill="white" />
                        </clipPath>
                    </defs>
                </svg>

                Upload Your Resume
            </button>

            {{-- page 1 --}}
            <div class="modal fade" id="uploadModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered custom-modal-height custom-modal-width"
                    style="max-width: 750px;">
                    <div class="modal-content">
                        <div class="close-btn" data-bs-dismiss="modal" aria-label="Close" style="z-index: 1;">×</div>
                        <div id="page1" class="page">
                            <div class="modal-body">
                                <div class="container">
                                    <h1 style="margin-top: 12px;">Add your resume</h1>
                                    <p>Use a PDF, Word doc, or rich text file – make sure it’s 5MB or less.</p>
                                    <div class="upload-box" id="uploadBox">
                                        <x-svg class="vector-icon">{{ asset('assets/svg/login/modal.svg') }}</x-svg>
                                        <p style="margin-left: 195px;">Drag and drop or <a href="#"
                                                id="chooseFileLink">choose file</a></p>
                                        <input type="file" id="fileInput" style="display: none;"
                                            accept=".pdf, .doc, .docx, .rtf" />
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="continueButton" class="btn btn-primary continueButton"
                                    style="background-color: #00AAFF; margin-right: 20px;" data-page="2">Continue</button>
                            </div>
                        </div>

                        {{-- page 2 --}}
                        <div id="page2" class="page d-none">
                            <div class="modal-body">
                                <div class="container">
                                    <h1 style="margin-top: 12px;"></h1>
                                    <div class="upload-box2">
                                        <x-svg class="vector-icon">{{ asset('assets/svg/login/modal2.svg') }}</x-svg>
                                        <h1 style="margin-left: 232px; margin-top: 30px;">Add your resume</h1>
                                        <p style="margin-left: 105px;">Use a PDF, Word doc, or rich text file – make sure
                                            it’s 5MB or less.</p>
                                        <div class="progress-bar12">
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary continueButton"
                                    style="background-color: #00AAFF; margin-right: 20px;" data-page="3">Continue</button>
                            </div>
                        </div>

                        {{-- Page 3 --}}
                        <div id="page3" class="page d-none">
                            <div class="modal-body">
                                <div class="container">
                                    <h1>Add your resume</h1>
                                    <div class="resume-item">
                                        <div style="margin-left: 270px;">
                                            <svg class="fas fa-paperclip" width="12" height="20"
                                                viewBox="0 0 14 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.5625 5.75V18.6875C11.5625 19.881 11.0884 21.0256 10.2445 21.8695C9.40057 22.7134 8.25597 23.1875 7.0625 23.1875C5.86903 23.1875 4.72443 22.7134 3.88052 21.8695C3.03661 21.0256 2.5625 19.881 2.5625 18.6875V4.625C2.5625 3.87908 2.85882 3.16371 3.38626 2.63626C3.91371 2.10882 4.62908 1.8125 5.375 1.8125C6.12092 1.8125 6.83629 2.10882 7.36374 2.63626C7.89118 3.16371 8.1875 3.87908 8.1875 4.625V16.4375C8.1875 16.7359 8.06897 17.022 7.858 17.233C7.64702 17.444 7.36087 17.5625 7.0625 17.5625C6.76413 17.5625 6.47798 17.444 6.267 17.233C6.05603 17.022 5.9375 16.7359 5.9375 16.4375V5.75H4.25V16.4375C4.25 17.1834 4.54632 17.8988 5.07376 18.4262C5.60121 18.9537 6.31658 19.25 7.0625 19.25C7.80842 19.25 8.52379 18.9537 9.05124 18.4262C9.57868 17.8988 9.875 17.1834 9.875 16.4375V4.625C9.875 3.43153 9.40089 2.28693 8.55698 1.44302C7.71307 0.599106 6.56847 0.125 5.375 0.125C4.18153 0.125 3.03693 0.599106 2.19302 1.44302C1.34911 2.28693 0.875 3.43153 0.875 4.625V18.6875C0.875 20.3285 1.5269 21.9023 2.68728 23.0627C3.84766 24.2231 5.42147 24.875 7.0625 24.875C8.70353 24.875 10.2773 24.2231 11.4377 23.0627C12.5981 21.9023 13.25 20.3285 13.25 18.6875V5.75H11.5625Z"
                                                    fill="#00AAFF" />
                                            </svg>
                                            <span style="margin-left: unset">Ahmad Rifaldi CV</span>
                                            <svg class="fas fa-check" width="23" height="15" viewBox="0 0 27 15"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.64062 8.21987L10.5469 14.0792L22.3594 1.52344" stroke="#00AAFF"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <svg class="fas fa-trash" width="15" height="23" viewBox="0 0 21 23"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.00156 4.11579L4.994 20.6371C5.00894 20.8833 5.11819 21.1146 5.29944 21.2837C5.48069 21.4529 5.72028 21.5472 5.96933 21.5474H14.8084C15.0575 21.5472 15.2971 21.4529 15.4783 21.2837C15.6596 21.1146 15.7688 20.8833 15.7838 20.6371L16.7762 4.11579H4.00156ZM18.2466 4.11579L17.248 20.723C17.2109 21.339 16.9378 21.9177 16.4844 22.3409C16.0309 22.7641 15.4315 22.9999 14.8084 23H5.96933C5.3463 22.9999 4.74684 22.7641 4.29342 22.3409C3.84 21.9177 3.56685 21.339 3.52978 20.723L2.53122 4.11579H0V3.26842C0 3.1079 0.0643849 2.95394 0.17899 2.84044C0.293596 2.72693 0.449034 2.66316 0.611111 2.66316H10.3889H20.1667C20.3287 2.66316 20.4842 2.72693 20.5988 2.84044C20.7134 2.95394 20.7778 3.1079 20.7778 3.26842V4.11579H18.2466ZM12.8333 0C12.9954 0 13.1509 0.0637687 13.2655 0.177278C13.3801 0.290786 13.4444 0.444737 13.4444 0.605263V1.45263H7.33333V0.605263C7.33333 0.444737 7.39772 0.290786 7.51232 0.177278C7.62693 0.0637687 7.78237 0 7.94445 0H12.8333ZM7.33333 7.26316H8.8L9.41111 18.1579H7.94445L7.33333 7.26316ZM11.9778 7.26316H13.4444L12.8333 18.1579H11.3667L11.9778 7.26316Z"
                                                fill="#00AAFF" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary"
                                    style="background-color: #00AAFF; margin-right: 20px;">Continue</button>
                            </div>
                        </div>
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
