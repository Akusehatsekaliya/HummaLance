@extends('auth.layout.app')
@section('style')
<style>
    .card-overview {
    border-radius: 5%;
    border: 1px solid #ffffff;
    box-shadow: 0 3px 3px #b8b8b861;
    height: 23rem;
    width: 29rem;
}
.card-overview1 {
    border-radius: 5%;
    border: 1px solid #ffffff;
    box-shadow: 0 3px 3px #b8b8b861;
    height: 14rem;
    width: 15rem;
}
.img-bg1 {
    width: 100%;
    height: 5rem;
}

.img-profile1 {
    width: 64px;
    position: absolute;
    left: 65px;
    top: 48px;
    border: 0px solid #fff;
}

.overview h4 {

}

.img-about1 {
    height: 104px;
}

.overview{
    margin-left :64.5rem;
}
</style>
@endsection
@section('content')
<div class="col-lg-4 pb-4">
    <span style="font-weight: 600;">About You</span>
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
            data-bs-target="#staticBackdrop">
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

        {{-- Modal upload --}}
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered custom-modal-height custom-modal-width"
                style="max-width: 750px;">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container">
                            <div class="close-btn" data-bs-dismiss="modal" aria-label="Close">×</div>
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
                        <button type="button" class="btn btn-primary"
                            style="background-color: #00AAFF; margin-right: 20px;">Continue</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-outline-custom my-3">
        Fill in manually
    </button>
</div>
    <div class="col-lg-5 px-5 pb-4">
        <div class="card-overview">
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
                    <p class="text-justify mb-2">I am a graphic designer who is experienced in creating design feeds for social media, video editing for reels, and designing logos for yoru prduct.I am a graphic designer who is experienced in creating design feeds for social media, video editing for reels, and designing logos for yoru prduct. </p>
                </div>
            </div>
        </div>
    </div>

    <div class="overview">
        <div class="col-lg-3 px-2 pb-1"> <!-- Reduced horizontal padding -->
            <div class="card-overview1"> <!-- Reduced padding inside the card -->
                <div class="img-about1">
                    <img src="{{ asset('assets/images/bg-aboutyou.png') }}" class="img-bg1">
                    <img src="{{ asset('assets/images/profile.png') }}" class="img-profile1 rounded-circle">
                </div>
    
                <div class="px-3">
                    <h4 class="font-weight-bold overview">Ahmad Rifaldi K.</h4>
                    <div class="row px-3 text-secondary">
                        <h6 class="mr-2" style="margin-left: -17px;"> Graphic Designer (He/Him)</h6>
                    </div>
                    <div class="text-secondary">
                        <p class="text-justify mb-2">I am a graphic designer who is experienced in creating design feeds for social media, video editing for reels, and designing logos for your products, motion design animations for your logo.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 px-2 pb-1"> <!-- Reduced horizontal padding -->
            <div class="card-overview1"> <!-- Reduced padding inside the card -->
                <div class="img-about1">
                    <img src="{{ asset('assets/images/bg-aboutyou.png') }}" class="img-bg1">
                    <img src="{{ asset('assets/images/profile.png') }}" class="img-profile1 rounded-circle">
                </div>
    
                <div class="px-3">
                    <h4 class="font-weight-bold overview">Ahmad Rifaldi K.</h4>
                    <div class="row px-3 text-secondary">
                        <h6 class="mr-2" style="margin-left: -17px;"> Graphic Designer (He/Him)</h6>
                    </div>
                    <div class="text-secondary">
                        <p class="text-justify mb-2">I am a graphic designer who is experienced in creating design feeds for social media, video editing for reels, and designing logos for your products, motion design animations for your logo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection
