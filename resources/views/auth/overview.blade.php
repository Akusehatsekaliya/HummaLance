@extends('auth.layout.app')
@section('style')
    <style>
         .custom-hr {
            border: none;
            height: 0.8px;
            width: 100vw;
            background-color: #000;
            margin-left: -15.5%;
        }
        .card-overview {
            border-radius: 5%;
            border: 1px solid #ffffff;
            box-shadow: 0 3px 3px #b8b8b861;
            height: 22rem;
            width: 100%;
        }

        .card-overview1 {
            border-radius: 5%;
            border: 1px solid #ffffff;
            box-shadow: 0 3px 3px #b8b8b861;
            height: 15.5rem;
            width: 100%;
        }

        .img-bg1 {
            width: 100%;
            height: 5rem;
            border-radius: 15px 15px 0 0;
        }

        .img-profile1 {
            width: 64px;
            position: absolute;
            left: 27px;
            top: 44px;
            border: 0px solid #fff;
        }

        .overview p {
            font-size: 10px;
        }

        .overview h4 {
            font-size: 16px;
        }

        .overview h6 {
            font-size: 15px;
        }

        .img-about1 {
            height: 104px;
        }

        .overview {
            /* margin-left :64.5rem; */
        }


        .form-group {
            margin-bottom: 15px;
        }

        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 15px;
            font-size: 16px;
            outline: none;
        }

        .form-group textarea:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .form-group textarea {
            resize: none;
            height: 201px;
        }

        .form-group textarea::placeholder {
            color: #888;
            font-style: italic;
            font-size: 10px;
            transition: color 0.3s ease, transform 0.3s ease;
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

</style>
@endsection
@section('content')
    <div class="col-lg-5 px-5 pb-4">
        <span style="font-weight: 600;">Overview</span>
        <span style="margin-left: 320px; font-weight: 610; color: #000000; font-size: 0.8rem;">1/10</span>
        <h4 class="font-weight-bold my-3">Cool, now write a description that explains about yourself.</h4>
        <p>Write a description about yourself, it will make it easier for others to know what you are like, you can write
            about your experience, your area of ​​expertise, your abilities, your skills, and so on.</p>

        <div class="d-flex">
            <svg width="37" height="32" viewBox="0 0 37 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.21484 1.50342V4.24786" stroke="#423D55" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M4.58721 2.87573H1.84277" stroke="#423D55" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M33.6904 24.2188V26.9632" stroke="#423D55" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M35.0628 25.5911H32.3184" stroke="#423D55" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M4.58691 7.32959V8.86062" stroke="#423D55" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M5.35298 8.09546H3.82129" stroke="#423D55" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M31.2266 29.2344V30.7654" stroke="#423D55" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M31.992 29.9995H30.4609" stroke="#423D55" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M31.2266 10.1074V11.6385" stroke="#423D55" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M31.992 10.8733H30.4609" stroke="#423D55" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M5.35254 22.3027V23.8344" stroke="#423D55" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6.11795 23.0686H4.58691" stroke="#423D55" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M8.9375 25.0013V4.24805H27.2022V23.2957H11.7528" stroke="#423D55" stroke-width="1.5"
                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M8.93652 25.1104V25.0015" stroke="#423D55" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M27.2022 27.7523L11.4102 27.7451" stroke="#423D55" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M8.93699 25.258C8.92715 25.344 8.93699 25.4352 8.93699 25.5238C8.93699 26.7543 9.93449 27.7518 11.165 27.7518C12.3954 27.7518 13.3929 26.7543 13.3929 25.5238C13.3929 24.5611 12.7826 23.7414 11.9275 23.4297"
                    stroke="#423D55" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M27.2021 27.7523C28.4326 27.7523 29.4301 26.7548 29.4301 25.5243C29.4301 24.328 28.4871 23.3515 27.3039 23.2983"
                    stroke="#423D55" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M12.9629 10.2167L23.7654 10.2036" stroke="#423D55" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12.9629 12.5515L23.7654 12.5391" stroke="#423D55" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12.9629 14.887L23.7654 14.8745" stroke="#423D55" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12.9629 17.2226L23.7654 17.2095" stroke="#423D55" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12.9629 19.4116L23.7654 19.3984" stroke="#423D55" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <p class="font-weight-bold ms-2 mt-2">Tell as interesting a story as possible about yourself.</p>
        </div>
        <div class="d-flex ms-1">
            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M28 4.7H28.1V4.6V1V0.9H28H1H0.9V1V4.6V4.7H1H1.8V22.5H1.45C1.14644 22.5 0.9 22.7459 0.9 23.05C0.9 23.3541 1.14644 23.6 1.45 23.6H1.9H13.95V24.3877C13.1714 24.624 12.6 25.3432 12.6 26.2C12.6 27.2479 13.4521 28.1 14.5 28.1C15.5479 28.1 16.4 27.2479 16.4 26.2C16.4 25.3432 15.8286 24.624 15.05 24.3877V23.6H27.1H27.55C27.8536 23.6 28.1 23.3541 28.1 23.05C28.1 22.7459 27.8536 22.5 27.55 22.5H27.2V4.7H28ZM15.3 26.2C15.3 26.6411 14.9411 27 14.5 27C14.0589 27 13.7 26.6411 13.7 26.2C13.7 25.7589 14.0589 25.4 14.5 25.4C14.9411 25.4 15.3 25.7589 15.3 26.2ZM2 2H27V3.6H2V2ZM26.1 22.5H2.9V4.7H26.1V22.5Z"
                    fill="#423D55" stroke="#423D55" stroke-width="0.2" />
                <path
                    d="M23.5008 19.3502H16.7508C16.4472 19.3502 16.2008 19.5961 16.2008 19.9002C16.2008 20.2043 16.4472 20.4502 16.7508 20.4502H23.5008C23.8043 20.4502 24.0508 20.2043 24.0508 19.9002C24.0508 19.5961 23.8043 19.3502 23.5008 19.3502Z"
                    fill="#423D55" stroke="#423D55" stroke-width="0.2" />
                <path
                    d="M5.4998 17.2998H9.9998C10.3034 17.2998 10.5498 17.0539 10.5498 16.7498C10.5498 16.4457 10.3034 16.1998 9.9998 16.1998H5.4998C5.19624 16.1998 4.9498 16.4457 4.9498 16.7498C4.9498 17.0539 5.19624 17.2998 5.4998 17.2998Z"
                    fill="#423D55" stroke="#423D55" stroke-width="0.2" />
                <path
                    d="M14.4998 17.3H21.2498C21.5534 17.3 21.7998 17.0542 21.7998 16.75C21.7998 16.4459 21.5534 16.2 21.2498 16.2H14.4998C14.1962 16.2 13.9498 16.4459 13.9498 16.75C13.9498 17.0542 14.1962 17.3 14.4998 17.3Z"
                    fill="#423D55" stroke="#423D55" stroke-width="0.2" />
                <path
                    d="M11.8596 16.3598L11.8596 16.3598L11.8579 16.3616C11.7606 16.4637 11.6998 16.6004 11.6998 16.75C11.6998 16.8943 11.7603 17.0355 11.8577 17.1383L11.8576 17.1384L11.8615 17.1421C11.9643 17.2395 12.1055 17.3 12.2498 17.3C12.3941 17.3 12.5353 17.2395 12.6381 17.1421L12.6382 17.1422L12.6419 17.1383C12.7393 17.0355 12.7998 16.8943 12.7998 16.75C12.7998 16.6059 12.7394 16.4641 12.6417 16.3616L12.6417 16.3616L12.64 16.3598C12.5351 16.255 12.3901 16.2057 12.2498 16.2057C12.1095 16.2057 11.9645 16.255 11.8596 16.3598Z"
                    fill="#423D55" stroke="#423D55" stroke-width="0.2" />
                <path
                    d="M14.4998 19.35H7.7498C7.44624 19.35 7.1998 19.5958 7.1998 19.9C7.1998 20.2041 7.44624 20.45 7.7498 20.45H14.4998C14.8034 20.45 15.0498 20.2041 15.0498 19.9C15.0498 19.5958 14.8034 19.35 14.4998 19.35Z"
                    fill="#423D55" stroke="#423D55" stroke-width="0.2" />
                <path
                    d="M5.88808 20.292L5.88818 20.2921L5.8919 20.2881C5.9893 20.1853 6.0498 20.0441 6.0498 19.8999C6.0498 19.7565 5.98989 19.6138 5.89039 19.5145C5.68414 19.3034 5.31976 19.305 5.11054 19.5087L5.11049 19.5087L5.10789 19.5114C5.01021 19.614 4.9498 19.7557 4.9498 19.8999C4.9498 20.0441 5.01031 20.1853 5.10771 20.2881L5.1076 20.2882L5.11153 20.292C5.21434 20.3894 5.35553 20.4499 5.4998 20.4499C5.64408 20.4499 5.78527 20.3894 5.88808 20.292Z"
                    fill="#423D55" stroke="#423D55" stroke-width="0.2" />
                <path
                    d="M23.1115 16.3589L23.1115 16.3588L23.1089 16.3616C23.0116 16.4637 22.9508 16.6004 22.9508 16.75C22.9508 16.8943 23.0113 17.0355 23.1087 17.1383L23.1086 17.1384L23.1125 17.1421C23.2153 17.2395 23.3565 17.3 23.5008 17.3C23.6451 17.3 23.7862 17.2395 23.8891 17.1421L23.8892 17.1422L23.8929 17.1383C23.9903 17.0355 24.0508 16.8943 24.0508 16.75C24.0508 16.6059 23.9904 16.4641 23.8927 16.3616L23.8927 16.3616L23.891 16.3598C23.6849 16.1538 23.3208 16.1551 23.1115 16.3589Z"
                    fill="#423D55" stroke="#423D55" stroke-width="0.2" />
                <path
                    d="M23.5008 9.9H16.7508C16.4472 9.9 16.2008 10.1459 16.2008 10.45C16.2008 10.7541 16.4472 11 16.7508 11H23.5008C23.8043 11 24.0508 10.7541 24.0508 10.45C24.0508 10.1459 23.8043 9.9 23.5008 9.9Z"
                    fill="#423D55" stroke="#423D55" stroke-width="0.2" />
                <path
                    d="M23.4998 13.0499H18.9998C18.6962 13.0499 18.4498 13.2958 18.4498 13.5999C18.4498 13.904 18.6962 14.1499 18.9998 14.1499H23.4998C23.8034 14.1499 24.0498 13.904 24.0498 13.5999C24.0498 13.2958 23.8034 13.0499 23.4998 13.0499Z"
                    fill="#423D55" stroke="#423D55" stroke-width="0.2" />
                <path
                    d="M14.4998 14.1501H15.3998C15.7034 14.1501 15.9498 13.9043 15.9498 13.6001C15.9498 13.296 15.7034 13.0501 15.3998 13.0501H14.4998C14.1962 13.0501 13.9498 13.296 13.9498 13.6001C13.9498 13.9043 14.1962 14.1501 14.4998 14.1501Z"
                    fill="#423D55" stroke="#423D55" stroke-width="0.2" />
                <path
                    d="M14.4998 7.84985H21.2498C21.5534 7.84985 21.7998 7.604 21.7998 7.29985C21.7998 6.99571 21.5534 6.74985 21.2498 6.74985H14.4998C14.1962 6.74985 13.9498 6.99571 13.9498 7.29985C13.9498 7.604 14.1962 7.84985 14.4998 7.84985Z"
                    fill="#423D55" stroke="#423D55" stroke-width="0.2" />
                <path
                    d="M23.8891 7.69194L23.8891 7.69197L23.891 7.69005C23.9963 7.58475 24.0508 7.44184 24.0508 7.29984C24.0508 7.158 23.9964 7.01448 23.8908 6.90945L23.8908 6.90944L23.89 6.9087C23.6807 6.70491 23.3166 6.70357 23.1106 6.90963L23.1105 6.90961L23.1089 6.91138C23.0112 7.01394 22.9508 7.15571 22.9508 7.29984C22.9508 7.44412 23.0113 7.58531 23.1087 7.68812L23.1086 7.68822L23.1125 7.69194C23.2153 7.78934 23.3565 7.84984 23.5008 7.84984C23.6451 7.84984 23.7862 7.78934 23.8891 7.69194Z"
                    fill="#423D55" stroke="#423D55" stroke-width="0.2" />
                <path
                    d="M14.5607 10.0591L14.5607 10.059L14.5581 10.0618C14.4608 10.1639 14.4 10.3006 14.4 10.4502C14.4 10.5945 14.4605 10.7357 14.5579 10.8385L14.5578 10.8386L14.5617 10.8423C14.6645 10.9397 14.8057 11.0002 14.95 11.0002C15.0943 11.0002 15.2355 10.9397 15.3383 10.8423L15.3384 10.8424L15.3421 10.8385C15.4395 10.7357 15.5 10.5945 15.5 10.4502C15.5 10.3006 15.4392 10.1639 15.3419 10.0618L15.342 10.0617L15.3393 10.0591C15.1294 9.85478 14.7706 9.85478 14.5607 10.0591Z"
                    fill="#423D55" stroke="#423D55" stroke-width="0.2" />
                <path
                    d="M16.8098 13.2099L16.8098 13.2099L16.8081 13.2117C16.7104 13.3142 16.65 13.456 16.65 13.6001C16.65 13.7444 16.7105 13.8856 16.8079 13.9884L16.8078 13.9885L16.8117 13.9922C16.9145 14.0896 17.0557 14.1501 17.2 14.1501C17.3443 14.1501 17.4855 14.0896 17.5883 13.9922L17.5884 13.9923L17.5921 13.9884C17.6895 13.8856 17.75 13.7444 17.75 13.6001C17.75 13.456 17.6896 13.3142 17.5919 13.2117L17.5919 13.2117L17.5902 13.2099C17.4853 13.1051 17.3403 13.0558 17.2 13.0558C17.0597 13.0558 16.9147 13.1051 16.8098 13.2099Z"
                    fill="#423D55" stroke="#423D55" stroke-width="0.2" />
                <path
                    d="M12.3498 6.84961V6.74961H12.2498H5.0498H4.9498V6.84961V14.0496V14.1496H5.0498H12.2498H12.3498V14.0496V6.84961ZM11.2498 13.0496H6.0498V7.84961H11.2498V13.0496Z"
                    fill="#423D55" stroke="#423D55" stroke-width="0.2" />
            </svg>
            <p class="font-weight-bold ms-3 mt-2">Make sure that you add important details in your story</p>
        </div>
<div class="d-flex align-items-center my-3">
    <hr class="flex-grow-1 thick-line" style="height:3px;">

            <span class="mx-2 text-body-2 font-weight-bold " style="font-size:18px;">write below here</span>
            <hr class="flex-grow-1 thick-line" style="height:3px;">

</div>

        <div>
            <div class="form-group">
                <textarea id="message" name="message"
                    placeholder="Include your best skills in the description so people know what you are an expert in, and don't forget to add your experience too."
                    required></textarea>
            </div>
            <div class="d-flex justify-content-between">
                <span></span>
                    <span class="text-secondary ml-auto" style="font-size:12px;">At leat 100 character</span>
            </div>
        </div>
    </div>
    <div class="col-lg-5 px-4 pb-4">
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
                    <p class="text-justify mb-2">I am a graphic designer who is experienced in creating design feeds for
                        social media, video editing for reels, and designing logos for yoru prduct.I am a graphic designer
                        who is experienced in creating design feeds for social media, video editing for reels, and designing
                        logos for yoru prduct. </p>
                </div>
            </div>
        </div>

        <div class="overview d-flex justify-content-between mt-3">
            <div class="col-lg-6 pl-0 pr-2"> <!-- Reduced horizontal padding -->
                <div class="card-overview1"> <!-- Reduced padding inside the card -->
                    <div class="img-about1">
                        <img src="{{ asset('assets/images/bg-1.png') }}" class="img-bg1">
                        <img src="{{ asset('assets/images/469126931_1095838208845928_9027533803000913619_n.png') }}"
                            class="img-profile1 rounded-circle">
                    </div>

                    <div class="px-3">
                        <h4 class="font-weight-bold overview">Samuel De Fransisco</h4>
                        <div class="row px-3 text-secondary">
                            <h6 class="mr-2" style="margin-left: -17px;"> Chef (He/Him)</h6>
                        </div>
                        <div class="text-secondary">
                            <p class="text-justify mb-2">I am a graphic designer who is experienced in creating design
                                feeds for social media, video editing for reels, and designing logos for your products,
                                motion design animations for your logo.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pr-0 pl-2"> <!-- Reduced horizontal padding -->
                <div class="card-overview1"> <!-- Reduced padding inside the card -->
                    <div class="img-about1">
                        <img src="{{ asset('assets/images/bg-2.png') }}" class="img-bg1">
                        <img src="{{ asset('assets/images/461980620_557712786838977_8466767888813043427_n.png') }}"
                            class="img-profile1 rounded-circle">
                    </div>

                    <div class="px-3">
                        <h4 class="font-weight-bold overview">Lebron James</h4>
                        <div class="row px-3 text-secondary">
                            <h6 class="mr-2" style="margin-left: -17px;"> Programmer (He/Him)</h6>
                        </div>
                        <div class="text-secondary">
                            <p class="text-justify mb-2">I am a graphic designer who is experienced in creating design
                                feeds for social media, video editing for reels, and designing logos for your products,
                                motion design animations for your logo.</p>
                        </div>
                    </div>
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
