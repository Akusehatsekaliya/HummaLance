@extends('auth.layout.app')
@section('style')
    <style>
        li {
            font-size: 16px;
            font-weight: 500;
        }
    </style>
    {{-- <style>
        /* Grid container */
        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr; /* Dua kolom */
            gap: 16px;
        }

        /* Card style */
        .card-option-container {
            position: relative;
            width: 100%;
            aspect-ratio: 1; /* Membuat card 1:1 */
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            cursor: pointer;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
        }

        /* Active card style when checked */
        .form-check-input:checked + .card-option-container {
            background-color: #d1ecf1; /* Biru muda */
            border-color: #0c5460;
            color: #0c5460;
        }

        .vector-icon {
            width: 60px;
            height: 60px;
            margin-bottom: 10px;
        }

        /* Radio button in the top-right corner */
        .form-check-input {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            width: 18px;
            height: 18px;
        }
    </style> --}}
    {{-- .grid-goals {
        display: grid;
        grid-template-columns: 2fr 1fr; /* Dua kolom */
        gap: 16px;
    }

    /* Card style */
    .card-option-container {
        position: relative;
        width: 100%;
        aspect-ratio: 1; /* Membuat card 1:1 */
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: #fff;
        cursor: pointer;
        text-align: center;
        font-size: 16px;
        font-weight: bold;
    }

    /* Active card style when checked */
    .form-check-input:checked + .card-option-container {
        border: none;
        background-color: #d1ecf1; /* Warna biru muda */
        color: #2b99ff; /* Teks biru */
        box-shadow: 0 3px 7px rgba(0, 0, 0, 0.15)
    }

    .vector-icon {
        width: 60px;
        height: 60px;
        margin-bottom: 10px;
    }


    .form-check-input {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        width: 18px;
        height: 18px;
        z-index: 10;
        opacity: 0;
    }

    /* Custom radio button style */
    .form-check-input:checked {
        content: "";
        position: absolute;
        top: 10px;
        right: 10px;
        width: 18px;
        height: 18px;
        border: 2px solid #ddd;
        background-color: #fff;
        z-index: 1;
    } --}}
    <style>
        .grid-goals {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        /* .card-option-container {
            position: relative;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            cursor: pointer;
            text-align: center;
            font-size: 15px;
            font-weight: 600;
            padding: 20px;
            transition: box-shadow 0.3s ease, background-color 0.3s ease;
        } */

        .card-option-container {
            position: relative;
            width: 100%;
            flex-direction: column;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            cursor: pointer;
            text-align: center;
            font-size: 15px;
            font-weight: 600;
            padding: 20px;
            transition: box-shadow 0.3s ease, background-color 0.3s ease;
        }

        .card-option-container input[type="radio"] {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }

        .card-option-container input[type="radio"]:checked+div {
            background-color: #d1ecf1;
            /* Light blue */
            box-shadow: 0 3px 7px rgba(0, 0, 0, 0.15);
            border-color: #007bff;
            /* Optional: change border color */
            color: #007bff;
            /* Optional: change text color */
        }

        .vector-icon {
            width: 60px;
            height: 60px;
            margin-bottom: 10px;
        }

        input[type="radio"] {
            box-sizing: border-box;
            padding: 0;
            position: absolute;
            right: 10px;
            top: 10px;
        }

        .card-option-container input[type="radio"] {
            position: absolute;
            opacity: 1;
            pointer-events: none;
        }

        .custom-hr {
            border: none;
            height: 0.8px;
            width: 100vw;
            background-color: #000;
            /* margin: 20px 0; */
            margin-left: -16.1%;
        }
    </style>
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
    </style>
@endsection
@section('content')
    <div class="col-lg-4 text-start ">
        <p style="font-size: 15px; font-weight:600;">Goals</p>
        <h3 class="font-weight-bold mb-3">What is your biggest goal in joining CLOCKER?</h3>
        <p>Many people come to clocker with a variety of goals and achievements they want to achieve, we want to highlight
            opportunities that match your biggest goals.</p>
        <ul>
            <li class="my-3">
                <svg class="mr-2" width="25" height="25" viewBox="0 0 31 31" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1507_4866)">
                        <path
                            d="M13.4346 13.4336C12.8846 13.9807 12.5742 14.7237 12.5713 15.4994C12.5713 16.2763 12.8799 17.0213 13.4292 17.5707C13.9785 18.12 14.7236 18.4286 15.5005 18.4286C16.2762 18.4257 17.0192 18.1152 17.5663 17.5653"
                            stroke="#423D55" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M15.5004 6.71191C13.7624 6.71191 12.0634 7.22729 10.6183 8.19287C9.17322 9.15846 8.04691 10.5309 7.3818 12.1366C6.7167 13.7423 6.54268 15.5092 6.88174 17.2138C7.22081 18.9184 8.05774 20.4842 9.28669 21.7131C10.5156 22.9421 12.0814 23.779 13.786 24.1181C15.4906 24.4571 17.2575 24.2831 18.8632 23.618C20.4689 22.9529 21.8414 21.8266 22.8069 20.3815C23.7725 18.9364 24.2879 17.2374 24.2879 15.4994"
                            stroke="#423D55" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M15.5003 0.853516C12.6037 0.853516 9.77204 1.71248 7.36354 3.32178C4.95505 4.93109 3.07786 7.21846 1.96935 9.89463C0.860838 12.5708 0.570802 15.5156 1.13591 18.3566C1.70103 21.1976 3.09591 23.8073 5.14416 25.8555C7.19242 27.9038 9.80206 29.2987 12.6431 29.8638C15.4841 30.4289 18.4289 30.1388 21.105 29.0303C23.7812 27.9218 26.0686 26.0446 27.6779 23.6361C29.2872 21.2276 30.1462 18.396 30.1462 15.4993M20.9347 10.0665L16.9649 14.0348"
                            stroke="#423D55" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M29.2832 6.00929L24.2882 6.71229L24.9912 1.71729C24.9964 1.65927 24.9841 1.60103 24.956 1.55002C24.9279 1.499 24.8852 1.45752 24.8334 1.43088C24.7816 1.40423 24.7231 1.39364 24.6652 1.40044C24.6074 1.40725 24.5529 1.43115 24.5087 1.46908L21.1972 4.76362C20.857 5.10621 20.6068 5.52756 20.4689 5.99018C20.3309 6.4528 20.3094 6.94236 20.4063 7.41529L20.9335 10.067L23.5852 10.5927C24.0581 10.6896 24.5477 10.6681 25.0103 10.5301C25.4729 10.3921 25.8943 10.1419 26.2369 9.80179L29.5299 6.49183C29.5679 6.44754 29.5919 6.39287 29.5987 6.33486C29.6054 6.27685 29.5947 6.21813 29.5679 6.16626C29.541 6.11439 29.4993 6.07173 29.448 6.04376C29.3967 6.01579 29.3383 6.00378 29.2801 6.00929"
                            stroke="#423D55" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1507_4866">
                            <rect width="25" height="25" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                Find your biggest goals
            </li>
            <li class="mb-3">
                <svg class="mr-2" width="25" height="28" viewBox="0 0 31 34" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M19.7746 17.0975C19.5276 16.3987 19.07 15.7937 18.4648 15.3658C17.8596 14.9379 17.1367 14.7082 16.3955 14.7083V13.8125H14.6038V14.7083C13.6535 14.7083 12.742 15.0859 12.07 15.7579C11.398 16.4299 11.0205 17.3413 11.0205 18.2917C11.0205 19.242 11.398 20.1535 12.07 20.8255C12.742 21.4975 13.6535 21.875 14.6038 21.875V25.4583C13.8245 25.4583 13.1607 24.9611 12.9134 24.2642C12.8767 24.1502 12.8175 24.0446 12.7394 23.9539C12.6612 23.8631 12.5656 23.789 12.4583 23.7358C12.351 23.6826 12.234 23.6515 12.1145 23.6443C11.9949 23.6371 11.8751 23.654 11.7622 23.6939C11.6492 23.7338 11.5455 23.7959 11.457 23.8766C11.3684 23.9574 11.297 24.055 11.2469 24.1638C11.1968 24.2726 11.169 24.3903 11.1652 24.5101C11.1614 24.6298 11.1817 24.7491 11.2248 24.8608C11.4718 25.5596 11.9294 26.1646 12.5345 26.5925C13.1397 27.0204 13.8627 27.2501 14.6038 27.25V28.1458H16.3955V27.25C17.3459 27.25 18.2573 26.8725 18.9293 26.2005C19.6013 25.5285 19.9788 24.617 19.9788 23.6667C19.9788 22.7163 19.6013 21.8049 18.9293 21.1329C18.2573 20.4609 17.3459 20.0833 16.3955 20.0833V16.5C16.766 16.4999 17.1275 16.6147 17.4301 16.8286C17.7326 17.0424 17.9615 17.3448 18.085 17.6941C18.1642 17.9182 18.329 18.1016 18.5434 18.2041C18.6496 18.2549 18.7647 18.2842 18.8821 18.2905C18.9996 18.2967 19.1172 18.2798 19.2281 18.2406C19.3391 18.2014 19.4412 18.1408 19.5287 18.0621C19.6162 17.9835 19.6874 17.8884 19.7381 17.7822C19.7888 17.6761 19.8182 17.561 19.8244 17.4435C19.8307 17.326 19.8138 17.2085 19.7746 17.0975ZM14.6038 16.5C14.1287 16.5 13.6729 16.6888 13.3369 17.0248C13.0009 17.3608 12.8122 17.8165 12.8122 18.2917C12.8122 18.7668 13.0009 19.2226 13.3369 19.5586C13.6729 19.8946 14.1287 20.0833 14.6038 20.0833V16.5ZM16.3955 25.4583C16.8707 25.4583 17.3264 25.2696 17.6624 24.9336C17.9984 24.5976 18.1872 24.1418 18.1872 23.6667C18.1872 23.1915 17.9984 22.7358 17.6624 22.3998C17.3264 22.0638 16.8707 21.875 16.3955 21.875V25.4583Z"
                        fill="#423D55" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M5.78255 3.72298C7.98093 2.64708 11.5876 1.375 15.5346 1.375C19.3992 1.375 22.9109 2.59423 25.0976 3.65579L25.2212 3.71581C25.8806 4.0419 26.4127 4.35006 26.7872 4.6L23.4779 9.4375C31.1069 17.2366 36.9997 33.6223 15.5346 33.6223C-5.93047 33.6223 -0.196239 17.534 7.49897 9.4375L4.21126 4.6C4.46478 4.43427 4.78639 4.24167 5.1698 4.03742C5.35972 3.93529 5.56397 3.82988 5.78255 3.72298ZM21.3512 9.3739L24.0002 5.50121C21.5367 5.67858 18.6055 6.25729 15.7836 7.07429C13.768 7.65658 11.5284 7.5679 9.45457 7.18538C8.93195 7.08861 8.41293 6.97328 7.89851 6.83958L9.61851 9.3721C13.3049 10.6845 17.664 10.6845 21.3512 9.3739ZM8.58382 10.8977C12.8973 12.564 18.0814 12.564 22.3949 10.8959C24.1949 12.7943 25.701 14.9511 26.8633 17.2949C28.0745 19.7656 28.7338 22.2354 28.6263 24.3639C28.5224 26.418 27.7143 28.173 25.8689 29.4773C23.9456 30.8363 20.7107 31.8306 15.5337 31.8306C10.3513 31.8306 7.10122 30.8533 5.15995 29.5095C3.30109 28.2222 2.48499 26.4906 2.36943 24.4642C2.24849 22.359 2.89349 19.9017 4.10018 17.414C5.25132 15.0418 6.85755 12.7584 8.58382 10.8977ZM7.55362 4.88308C8.27028 5.09629 9.0192 5.28173 9.77887 5.42237C11.7049 5.77712 13.6363 5.82908 15.2847 5.3516C17.2055 4.7918 19.1591 4.3517 21.1345 4.03383C19.4861 3.53754 17.5583 3.16667 15.5337 3.16667C12.4476 3.16667 9.56924 4.02756 7.55362 4.88308Z"
                        fill="#423D55" />
                </svg>
                Make your own income
            </li>
            <li class="mb-3">
                <svg class="mr-2" width="25" height="25" viewBox="0 0 32 34" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1507_4877)">
                        <path
                            d="M8.60293 21.3877C8.22324 21.3877 7.91387 21.6971 7.91387 22.0768V32.5674H2.7248V22.1049C2.7248 21.7252 2.41543 21.4158 2.03574 21.4158C1.65605 21.4158 1.34668 21.7252 1.34668 22.1049V33.2705C1.34668 33.6502 1.65605 33.9596 2.03574 33.9596H8.60293C8.98262 33.9596 9.29199 33.6502 9.29199 33.2705V22.0908C9.29199 21.6971 8.98262 21.3877 8.60293 21.3877Z"
                            fill="#423D55" />
                        <path
                            d="M19.2764 18.7158C18.8967 18.7158 18.5873 19.0252 18.5873 19.4049V32.5674H13.4123V21.4721C13.4123 21.0924 13.1029 20.783 12.7232 20.783C12.3436 20.783 12.0342 21.0924 12.0342 21.4721V33.2564C12.0342 33.6361 12.3436 33.9455 12.7232 33.9455H19.2904C19.6701 33.9455 19.9795 33.6361 19.9795 33.2564V19.4049C19.9795 19.0252 19.6701 18.7158 19.2764 18.7158Z"
                            fill="#423D55" />
                        <path
                            d="M29.9779 12.3457C29.5982 12.3457 29.2889 12.6551 29.2889 13.0348V32.5676H24.0998V17.127C24.0998 16.7473 23.7904 16.4379 23.4107 16.4379C23.0311 16.4379 22.7217 16.7473 22.7217 17.127V33.2566C22.7217 33.6363 23.0311 33.9457 23.4107 33.9457H29.9779C30.3576 33.9457 30.667 33.6363 30.667 33.2566V13.0488C30.667 12.6551 30.3576 12.3457 29.9779 12.3457Z"
                            fill="#423D55" />
                        <path
                            d="M31.0327 0.687695C31.0186 0.43457 30.8639 0.223633 30.653 0.111133C30.428 -0.00136717 30.1608 0.0126953 29.9639 0.15332L22.3983 5.1877C22.1874 5.32832 22.0749 5.56738 22.0889 5.80645C22.103 6.05957 22.2577 6.27051 22.4686 6.38301L25.8436 8.05645C22.2577 16.0158 10.5858 19.0955 1.14989 17.9283C0.770199 17.8721 0.418637 18.1533 0.376449 18.533C0.334262 18.9127 0.60145 19.2643 0.981137 19.3064C2.37332 19.4752 3.79364 19.5596 5.24207 19.5596C14.2983 19.5596 23.7343 16.1002 27.0952 8.66113L30.6249 10.4189C30.7233 10.4611 30.8218 10.4893 30.9343 10.4893C31.0749 10.4893 31.2014 10.4471 31.3139 10.3768C31.5249 10.2361 31.6374 9.99707 31.6233 9.75801L31.0327 0.687695ZM27.0108 7.08613C26.9968 7.07207 26.9968 7.08613 27.0108 7.08613C26.9968 7.07207 26.9968 7.07207 26.9968 7.07207L24.1843 5.67988L29.7389 1.98145L30.1749 8.64707L27.0108 7.08613Z"
                            fill="#423D55" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1507_4877">
                            <rect width="32" height="34" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                Growth your career
            </li>
            <li class="mb-3">
                <svg class="mr-2" width="25" height="28" viewBox="0 0 32 35" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1507_4883)">
                        <path
                            d="M13.967 0.700195H12.6117C5.88606 0.700195 0.414062 6.3527 0.414062 13.3002V34.3002H13.967V30.1002H26.1646V22.4002H31.4103L26.1633 13.1091C26.0637 6.24909 20.631 0.700195 13.967 0.700195ZM24.8094 21.0002V28.7002H12.6117V32.9002H1.76936V13.3002C1.76936 7.1248 6.63351 2.1002 12.6117 2.1002H13.967C19.9452 2.1002 24.8094 7.1248 24.8094 13.3002V13.4899L29.0507 21.0002H24.8094Z"
                            fill="#423D55" />
                        <path
                            d="M16.1983 14.4945L17.1565 13.5047L13.2892 9.50977L9.42188 13.5047L10.3801 14.4945L12.6116 12.1894V25.1996H13.9669V12.1894L16.1983 14.4945Z"
                            fill="#423D55" />
                        <path
                            d="M13.2899 3.5C8.43251 3.5 4.48047 7.5824 4.48047 12.6C4.48047 16.4416 6.84071 19.887 10.353 21.1715L10.8056 19.852C7.83279 18.7649 5.83576 15.8508 5.83576 12.6C5.83576 8.3545 9.17995 4.9 13.2899 4.9C17.3998 4.9 20.744 8.3545 20.744 12.6C20.744 15.8508 18.747 18.7649 15.7741 19.852L16.2268 21.1715C19.739 19.887 22.0993 16.4416 22.0993 12.6C22.0993 7.5824 18.1473 3.5 13.2899 3.5Z"
                            fill="#423D55" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1507_4883">
                            <rect width="32" height="35" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                Increase your work experience
            </li>
        </ul>
    </div>
    <div class="col-lg-5 grid-goals px-4 pb-4">
        <!-- Card 1 -->
        {{-- <div> --}}
        <form action="{{ route('update-goal') }}" method="post" style="
        display: contents;">
            @csrf
            <label class="card-option-container" for="goal1">
                <input type="radio" class="form-check-input" name="goal"
                    value="{{ App\Constract\Enums\UserGoalEnum::SIDE->value }}" id="goal1">
                <img src="{{ asset('assets/svg/register/Coins-amico.svg') }}" alt="icon">
                <br>
                <span>To find income and side jobs</span>
            </label>
            {{-- </div> --}}

            <!-- Card 2 -->
            {{-- <div class="card-options"> --}}
            <label class="card-option-container" for="goal2">
                <input type="radio" name="goal" id="goal2"
                    value="{{ App\Constract\Enums\UserGoalEnum::STEADY->value }}">
                <x-svg class="vector-icon">{{ asset('assets/svg/register/Group63.svg') }}</x-svg>
                <br>
                <span>To get a job and a steady income</span>
            </label>
            {{-- </div> --}}

            <!-- Card 3 -->
            {{-- <div class=""> --}}
            <label class="card-option-container " data-color="#000" for="goal3">
                <input type="radio" name="goal" id="goal3"
                    value="{{ App\Constract\Enums\UserGoalEnum::EXPERIENCE->value }}">
                <x-svg class="vector-icon">{{ asset('assets/svg/register/group64.svg') }}</x-svg>
                <br>
                <span>To find income and side jobs</span>
            </label>
            {{-- </div> --}}

            <!-- Card 4 -->
            {{-- <div> --}}
            <label class="card-option-container" for="goal4">
                <input type="radio" name="goal" id="goal4"
                    value="{{ App\Constract\Enums\UserGoalEnum::NOTHING->value }}">
                <x-svg class="vector-icon">{{ asset('assets/svg/register/goals-yet.svg') }}</x-svg>
                <br>
                <span>To get a job and a steady income</span>
            </label>
            {{-- </div> --}}
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
        <button class="custom-button" type="submit" style="background-color: #00AAFF; color: white;" id="nextBtn">
            Next
        </button>
        </form>
    </div>
@endsection

@section('script')
    <script>
        document.querySelectorAll('input[name="goal"]').forEach((input) => {
            input.addEventListener('change', function() {
                // Hapus gaya aktif pada semua card
                document.querySelectorAll('.card-option-container').forEach((card) => {
                    card.style.backgroundColor = '#fff';
                });

                // Tambahkan gaya aktif pada card yang terpilih
                const container = this.closest('.card-option-container');
                container.style.backgroundColor = '#d1ecf1'; // Light blue
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
