@extends('home.layout.app')
@section('content')
    <section class="py-5">
        <div class="view_slider recommended">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <div style="display: flex; align-items: center;">
                            <h3 style="font-size: 1.5em; font-weight: bold;">Jobs you can apply for</h3>
                        </div>
                        <ul class="custom-navbar">
                            <li class="custom-nav-item" style="color: #01ABFE">
                                <a class="custom-nav-link">Jobs</a>
                            </li>
                        </ul>
                        <br>
                        <br>

                        {{-- 1111111 --}}
                        <div class="freelancer1">
                            <div class="inner-slider">
                                <div class="inner-wrapper">
                                    <div class="d-flex align-items-center">
                                        <a>
                                            <img class="img-clocker"
                                                src="{{ asset('assets_landing/images/ClockerHome.png') }}" />
                                        </a>
                                        <span class="seller-name"
                                            style="margin-left: 12px; top: -6px; height: 110px; position: relative; padding-right: 12px;">
                                            <a style="font-size: 20px; display: inline-block; margin-bottom: 6px;">
                                                Graphic Designer Needed for Instagram Content
                                            </a>

                                            <span class="level hint--top level-one-seller">
                                                <x-svg>{{ asset('assets/svg/home/apply/work.svg') }}</x-svg>
                                                <a style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                    Creative work studio
                                                </a>
                                            </span>
                                            <span class="level hint--top level-one-seller"
                                                style="display: inline-block; margin-bottom: 3px; color: #423D55; font-size: 14px;">
                                                <x-svg>{{ asset('assets/svg/home/apply/partTime.svg') }}</x-svg>
                                                <span class="badge"
                                                    style="margin-right: 20px; margin-top: 4px; padding: 5px 14px; font-size: 9px; font-weight: medium; color: #1ABAED; background-color: #C2EEFF;">
                                                    Work From Home
                                                </span>
                                                <span class="badge badge-success"
                                                    style="margin-left: -15px; margin-top: 4px; padding: 5px 14px; font-size: 9px; font-weight: 500; color: #1ABAED; background-color: #C2EEFF;">
                                                    Part Time
                                                </span>
                                            </span>
                                            <span class="level hint--top level-one-seller">
                                                <x-svg>{{ asset('assets/svg/home/apply/time.svg') }}</x-svg>

                                                {{-- <div class="d-flex"> --}}
                                                <a style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                    Jakarta, Indonesia,
                                                </a>
                                                <a
                                                    style="display: inline-block; margin-bottom: 5px; font-weight: 500; color:#00AAFF;">
                                                    5 people applied for this job
                                                </a>
                                                <a style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                    , 8 hours ago
                                                </a>
                                                {{-- </div> --}}
                                            </span>
                                            <span class="level hint--top level-one-seller" style="margin-left:-3px">
                                                <x-svg>{{ asset('assets/svg/home/apply/salary.svg') }}</x-svg>
                                                <a style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                    salary is not shown
                                                </a>
                                            </span>
                                        </span>
                                        <div class="button-container">
                                            <button class="button like">
                                                <i class="fa fa-thumbs-up"></i>
                                            </button>
                                            <button class="button heart">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <a
                                        style="display: inline-block; margin-bottom: 10px; margin-top: 30px; margin-left: 20px; font-weight: bold; font-size: 16px;">
                                        Required Skills
                                    </a>
                                    <div>
                                        <p class="badge2" style="font-size: 12px">
                                            Adobe Ilustrator
                                        </p>
                                        <p class="badge2" style="font-size: 12px">
                                            Adobe Ilustrator
                                        </p>
                                        <p class="badge2" style="font-size: 12px">
                                            Adobe Ilustrator
                                        </p>
                                        <p class="badge2" style="font-size: 12px">
                                            Adobe Ilustrator
                                        </p>
                                        <p class="badge2" style="font-size: 12px">
                                            Adobe Ilustrator
                                        </p>
                                        <p class="badge2" style="font-size: 12px">
                                            Adobe Ilustrator
                                        </p>
                                        <p class="badge2" style="font-size: 12px">
                                            Adobe Ilustrator
                                        </p>
                                        <a href="#" class="badge2"
                                            style="font-size: 12px; border: 1px solid transparent;">
                                            Show More
                                            <i class="fas fa-chevron-right" style="margin-left: 8px;"></i>
                                        </a>
                                    </div>
                                    <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                        <p style="text-align: left; padding-left: 10px; font-weight: bold;"></p>
                                        <button class="btn btn-success2 button-apply" type="submit">
                                            <x-svg>{{ asset('assets/svg/home/apply/fastApply.svg') }}</x-svg>
                                            Fast Apply
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: 90px;">
                <div class="row ">
                    <div class="col-lg-12">
                        <div style="display: flex; align-items: center;">
                            <h3 style="font-size: 1.5em; font-weight: bold;">A job that might be suitable for you</h3>
                        </div>
                        <ul class="custom-navbar1">
                            <li class="custom-nav-item1" style="color: #01ABFE">
                                <a class="custom-nav-link1">Recommended for you</a>
                            </li>
                        </ul>
                        <br>
                        <br>
                        {{-- 222222 --}}
                        <div class="freelancer1">
                            <div class="inner-slider">
                                <div class="inner-wrapper">
                                    <div class="d-flex align-items-center">
                                        <a>
                                            <img class="img-clocker"
                                                src="{{ asset('assets_landing/images/ClockerHome.png') }}" />
                                        </a>
                                        <div class="seller-name"
                                            style="margin-left: 12px; top: 1px; position: relative; padding-right: 12px;">
                                            <a style="font-size: 20px; display: inline-block; margin-bottom: 6px;">
                                                Graphic Designer Needed for Instagram Content
                                            </a>

                                            <span class="level hint--top level-one-seller">
                                                <x-svg>{{ asset('assets/svg/home/apply/work.svg') }}</x-svg>
                                                <a style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                    Creative work studio
                                                </a>
                                            </span>
                                            <span class="level hint--top level-one-seller"
                                                style="display: inline-block; margin-bottom: 3px; color: #423D55; font-size: 14px;">
                                                <x-svg>{{ asset('assets/svg/home/apply/partTime.svg') }}</x-svg>
                                                <span class="badge"
                                                    style="margin-right: 20px; margin-top: 4px; padding: 5px 14px; font-size: 9px; font-weight: medium; color: #1ABAED; background-color: #C2EEFF;">
                                                    Work From Home
                                                </span>
                                                <span class="badge badge-success"
                                                    style="margin-left: -15px; margin-top: 4px; padding: 5px 14px; font-size: 9px; font-weight: 500; color: #1ABAED; background-color: #C2EEFF;">
                                                    Part Time
                                                </span>
                                            </span>
                                            <span class="level hint--top level-one-seller">
                                                <x-svg>{{ asset('assets/svg/home/apply/time.svg') }}</x-svg>
                                                {{-- <div class="d-flex"> --}}
                                                <a style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                    Jakarta, Indonesia,
                                                </a>
                                                <a
                                                    style="display: inline-block; margin-bottom: 5px; font-weight: 500; color:#00AAFF;">
                                                    5 people applied for this job
                                                </a>
                                                <a style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                    , 8 hours ago
                                                </a>
                                                {{-- </div> --}}
                                            </span>
                                            <span class="level hint--top level-one-seller" style="margin-left:-3px">
                                                <x-svg>{{ asset('assets/svg/home/apply/salary.svg') }}</x-svg>
                                                <a style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                    salary is not shown
                                                </a>
                                            </span>
                                        </div>
                                        <div class="button-container">
                                            <button class="button like">
                                                <i class="fa-regular fa-thumbs-up"></i>
                                            </button>
                                            <button class="button heart">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <a
                                        style="display: inline-block; margin-bottom: 10px; margin-top: 30px; margin-left: 20px; font-weight: bold; font-size: 16px;">
                                        Required Skills
                                    </a>
                                    <div>
                                        <p class="badge2" style="font-size: 12px">
                                            Adobe Ilustrator
                                        </p>
                                        <p class="badge2" style="font-size: 12px">
                                            Adobe Ilustrator
                                        </p>
                                        <p class="badge2" style="font-size: 12px">
                                            Adobe Ilustrator
                                        </p>
                                        <p class="badge2" style="font-size: 12px">
                                            Adobe Ilustrator
                                        </p>
                                        <p class="badge2" style="font-size: 12px">
                                            Adobe Ilustrator
                                        </p>
                                        <p class="badge2" style="font-size: 12px">
                                            Adobe Ilustrator
                                        </p>
                                        <p class="badge2" style="font-size: 12px">
                                            Adobe Ilustrator
                                        </p>
                                        <a href="#" class="badge2"
                                            style="font-size: 12px; border: 1px solid transparent;">
                                            Show More
                                            <i class="fas fa-chevron-right" style="margin-left: 8px;"></i>
                                        </a>
                                    </div>
                                    <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                        <p style="text-align: left; padding-left: 10px; font-weight: bold;"></p>
                                        <button class="btn btn-success2 button-apply" type="submit">
                                            <x-svg>{{ asset('assets/svg/home/apply/fastApply.svg') }}</x-svg>
                                            Fast Apply
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- 333333 --}}
                        <div class="graphic">
                            <div class="freelancer1">
                                <div class="inner-slider">
                                    <div class="inner-wrapper">
                                        <div class="d-flex align-items-center">
                                            <a>
                                                <img class="img-clocker"
                                                    src="{{ asset('assets_landing/images/ClockerHome.png') }}" />
                                            </a>
                                            <div class="seller-name"
                                                style="margin-left: 12px; top: 1px; position: relative; padding-right: 12px;">
                                                <a style="font-size: 20px; display: inline-block; margin-bottom: 6px;">
                                                    Graphic Designer Needed for Instagram Content
                                                </a>

                                                <span class="level hint--top level-one-seller">
                                                    <x-svg>{{ asset('assets/svg/home/apply/work.svg') }}</x-svg>
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                        Creative work studio
                                                    </a>
                                                </span>
                                                <span class="level hint--top level-one-seller"
                                                    style="display: inline-block; margin-bottom: 3px; color: #423D55; font-size: 14px;">
                                                    <x-svg>{{ asset('assets/svg/home/apply/partTime.svg') }}</x-svg>
                                                    <span class="badge"
                                                        style="margin-right: 20px; margin-top: 4px; padding: 5px 14px; font-size: 9px; font-weight: medium; color: #1ABAED; background-color: #C2EEFF;">
                                                        Work From Home
                                                    </span>
                                                    <span class="badge badge-success"
                                                        style="margin-left: -15px; margin-top: 4px; padding: 5px 14px; font-size: 9px; font-weight: 500; color: #1ABAED; background-color: #C2EEFF;">
                                                        Part Time
                                                    </span>
                                                </span>
                                                <span class="level hint--top level-one-seller">
                                                    <x-svg>{{ asset('assets/svg/home/apply/time.svg') }}</x-svg>
                                                    {{-- <div class="d-flex"> --}}
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                        Jakarta, Indonesia,
                                                    </a>
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500; color:#00AAFF;">
                                                        5 people applied for this job
                                                    </a>
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                        , 8 hours ago
                                                    </a>
                                                    {{-- </div> --}}
                                                </span>
                                                <span class="level hint--top level-one-seller" style="margin-left:-3px">
                                                    <x-svg>{{ asset('assets/svg/home/apply/salary.svg') }}</x-svg>
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                        salary is not shown
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="button-container">
                                                <button class="button like">
                                                    <i class="fa fa-thumbs-up"></i>
                                                </button>
                                                <button class="button heart">
                                                    <i class="fa fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a
                                            style="display: inline-block; margin-bottom: 10px; margin-top: 30px; margin-left: 20px; font-weight: bold; font-size: 16px;">
                                            Required Skills
                                        </a>
                                        <div>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <a href="#" class="badge2"
                                                style="font-size: 12px; border: 1px solid transparent;">
                                                Show More
                                                <i class="fas fa-chevron-right" style="margin-left: 8px;"></i>
                                            </a>
                                        </div>
                                        <div
                                            style="display: flex; justify-content: space-between; align-items: flex-start;">
                                            <p style="text-align: left; padding-left: 10px; font-weight: bold;"></p>
                                            <button class="btn btn-success2 button-apply" type="submit">
                                                <x-svg>{{ asset('assets/svg/home/apply/fastApply.svg') }}</x-svg>
                                                Fast Apply
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- 333333 --}}
                        <div class="graphic">
                            <div class="freelancer1">
                                <div class="inner-slider">
                                    <div class="inner-wrapper">
                                        <div class="d-flex align-items-center">
                                            <a>
                                                <img class="img-clocker"
                                                    src="{{ asset('assets_landing/images/ClockerHome.png') }}" />
                                            </a>
                                            <div class="seller-name"
                                                style="margin-left: 12px; top: 1px; position: relative; padding-right: 12px;">
                                                <a style="font-size: 20px; display: inline-block; margin-bottom: 6px;">
                                                    Graphic Designer Needed for Instagram Content
                                                </a>

                                                <span class="level hint--top level-one-seller">
                                                    <x-svg>{{ asset('assets/svg/home/apply/work.svg') }}</x-svg>
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                        Creative work studio
                                                    </a>
                                                </span>
                                                <span class="level hint--top level-one-seller"
                                                    style="display: inline-block; margin-bottom: 3px; color: #423D55; font-size: 14px;">
                                                    <x-svg>{{ asset('assets/svg/home/apply/partTime.svg') }}</x-svg>
                                                    <span class="badge"
                                                        style="margin-right: 20px; margin-top: 4px; padding: 5px 14px; font-size: 9px; font-weight: medium; color: #1ABAED; background-color: #C2EEFF;">
                                                        Work From Home
                                                    </span>
                                                    <span class="badge badge-success"
                                                        style="margin-left: -15px; margin-top: 4px; padding: 5px 14px; font-size: 9px; font-weight: 500; color: #1ABAED; background-color: #C2EEFF;">
                                                        Part Time
                                                    </span>
                                                </span>
                                                <span class="level hint--top level-one-seller">
                                                    <x-svg>{{ asset('assets/svg/home/apply/time.svg') }}</x-svg>
                                                    {{-- <div class="d-flex"> --}}
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                        Jakarta, Indonesia,
                                                    </a>
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500; color:#00AAFF;">
                                                        5 people applied for this job
                                                    </a>
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                        , 8 hours ago
                                                    </a>
                                                    {{-- </div> --}}
                                                </span>
                                                <span class="level hint--top level-one-seller" style="margin-left:-3px">
                                                    <x-svg>{{ asset('assets/svg/home/apply/salary.svg') }}</x-svg>
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                        salary is not shown
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="button-container">
                                                <button class="button like">
                                                    <i class="fa fa-thumbs-up"></i>
                                                </button>
                                                <button class="button heart">
                                                    <i class="fa fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a
                                            style="display: inline-block; margin-bottom: 10px; margin-top: 30px; margin-left: 20px; font-weight: bold; font-size: 16px;">
                                            Required Skills
                                        </a>
                                        <div>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <a href="#" class="badge2"
                                                style="font-size: 12px; border: 1px solid transparent;">
                                                Show More
                                                <i class="fas fa-chevron-right" style="margin-left: 8px;"></i>
                                            </a>
                                        </div>
                                        <div
                                            style="display: flex; justify-content: space-between; align-items: flex-start;">
                                            <p style="text-align: left; padding-left: 10px; font-weight: bold;"></p>
                                            <button class="btn btn-success2 button-apply" type="submit">
                                                <x-svg>{{ asset('assets/svg/home/apply/fastApply.svg') }}</x-svg>
                                                Fast Apply
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- 333333 --}}
                        <div class="graphic">
                            <div class="freelancer1">
                                <div class="inner-slider">
                                    <div class="inner-wrapper">
                                        <div class="d-flex align-items-center">
                                            <a>
                                                <img class="img-clocker"
                                                    src="{{ asset('assets_landing/images/ClockerHome.png') }}" />
                                            </a>
                                            <div class="seller-name"
                                                style="margin-left: 12px; top: 1px; position: relative; padding-right: 12px;">
                                                <a style="font-size: 20px; display: inline-block; margin-bottom: 6px;">
                                                    Graphic Designer Needed for Instagram Content
                                                </a>

                                                <span class="level hint--top level-one-seller">
                                                    <x-svg>{{ asset('assets/svg/home/apply/work.svg') }}</x-svg>
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                        Creative work studio
                                                    </a>
                                                </span>
                                                <span class="level hint--top level-one-seller"
                                                    style="display: inline-block; margin-bottom: 3px; color: #423D55; font-size: 14px;">
                                                    <x-svg>{{ asset('assets/svg/home/apply/partTime.svg') }}</x-svg>
                                                    <span class="badge"
                                                        style="margin-right: 20px; margin-top: 4px; padding: 5px 14px; font-size: 9px; font-weight: medium; color: #1ABAED; background-color: #C2EEFF;">
                                                        Work From Home
                                                    </span>
                                                    <span class="badge badge-success"
                                                        style="margin-left: -15px; margin-top: 4px; padding: 5px 14px; font-size: 9px; font-weight: 500; color: #1ABAED; background-color: #C2EEFF;">
                                                        Part Time
                                                    </span>
                                                </span>
                                                <span class="level hint--top level-one-seller">
                                                    <x-svg>{{ asset('assets/svg/home/apply/time.svg') }}</x-svg>
                                                    {{-- <div class="d-flex"> --}}
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                        Jakarta, Indonesia,
                                                    </a>
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500; color:#00AAFF;">
                                                        5 people applied for this job
                                                    </a>
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                        , 8 hours ago
                                                    </a>
                                                    {{-- </div> --}}
                                                </span>
                                                <span class="level hint--top level-one-seller" style="margin-left:-3px">
                                                    <x-svg>{{ asset('assets/svg/home/apply/salary.svg') }}</x-svg>
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                        salary is not shown
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="button-container">
                                                <button class="button like">
                                                    <i class="fa fa-thumbs-up"></i>
                                                </button>
                                                <button class="button heart">
                                                    <i class="fa fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a
                                            style="display: inline-block; margin-bottom: 10px; margin-top: 30px; margin-left: 20px; font-weight: bold; font-size: 16px;">
                                            Required Skills
                                        </a>
                                        <div>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <a href="#" class="badge2"
                                                style="font-size: 12px; border: 1px solid transparent;">
                                                Show More
                                                <i class="fas fa-chevron-right" style="margin-left: 8px;"></i>
                                            </a>
                                        </div>
                                        <div
                                            style="display: flex; justify-content: space-between; align-items: flex-start;">
                                            <p style="text-align: left; padding-left: 10px; font-weight: bold;"></p>
                                            <button class="btn btn-success2 button-apply" type="submit">
                                                <x-svg>{{ asset('assets/svg/home/apply/fastApply.svg') }}</x-svg>
                                                Fast Apply
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- 333333 --}}
                        <div class="graphic">
                            <div class="freelancer1">
                                <div class="inner-slider">
                                    <div class="inner-wrapper">
                                        <div class="d-flex align-items-center">
                                            <a>
                                                <img class="img-clocker"
                                                    src="{{ asset('assets_landing/images/ClockerHome.png') }}" />
                                            </a>
                                            <div class="seller-name"
                                                style="margin-left: 12px; top: 1px; position: relative; padding-right: 12px;">
                                                <a style="font-size: 20px; display: inline-block; margin-bottom: 6px;">
                                                    Graphic Designer Needed for Instagram Content
                                                </a>

                                                <span class="level hint--top level-one-seller">
                                                    <x-svg>{{ asset('assets/svg/home/apply/work.svg') }}</x-svg>
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                        Creative work studio
                                                    </a>
                                                </span>
                                                <span class="level hint--top level-one-seller"
                                                    style="display: inline-block; margin-bottom: 3px; color: #423D55; font-size: 14px;">
                                                    <x-svg>{{ asset('assets/svg/home/apply/partTime.svg') }}</x-svg>
                                                    <span class="badge"
                                                        style="margin-right: 20px; margin-top: 4px; padding: 5px 14px; font-size: 9px; font-weight: medium; color: #1ABAED; background-color: #C2EEFF;">
                                                        Work From Home
                                                    </span>
                                                    <span class="badge badge-success"
                                                        style="margin-left: -15px; margin-top: 4px; padding: 5px 14px; font-size: 9px; font-weight: 500; color: #1ABAED; background-color: #C2EEFF;">
                                                        Part Time
                                                    </span>
                                                </span>
                                                <span class="level hint--top level-one-seller">
                                                    <x-svg>{{ asset('assets/svg/home/apply/time.svg') }}</x-svg>
                                                    {{-- <div class="d-flex"> --}}
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                        Jakarta, Indonesia,
                                                    </a>
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500; color:#00AAFF;">
                                                        5 people applied for this job
                                                    </a>
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                        , 8 hours ago
                                                    </a>
                                                    {{-- </div> --}}
                                                </span>
                                                <span class="level hint--top level-one-seller" style="margin-left:-3px">
                                                    <x-svg>{{ asset('assets/svg/home/apply/salary.svg') }}</x-svg>
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                        salary is not shown
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="button-container">
                                                <button class="button like">
                                                    <i class="fa fa-thumbs-up"></i>
                                                </button>
                                                <button class="button heart">
                                                    <i class="fa fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a
                                            style="display: inline-block; margin-bottom: 10px; margin-top: 30px; margin-left: 20px; font-weight: bold; font-size: 16px;">
                                            Required Skills
                                        </a>
                                        <div>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <a href="#" class="badge2"
                                                style="font-size: 12px; border: 1px solid transparent;">
                                                Show More
                                                <i class="fas fa-chevron-right" style="margin-left: 8px;"></i>
                                            </a>
                                        </div>
                                        <div
                                            style="display: flex; justify-content: space-between; align-items: flex-start;">
                                            <p style="text-align: left; padding-left: 10px; font-weight: bold;"></p>
                                            <button class="btn btn-success2 button-apply" type="submit">
                                                <x-svg>{{ asset('assets/svg/home/apply/fastApply.svg') }}</x-svg>
                                                Fast Apply
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- 333333 --}}
                        <div class="graphic">
                            <div class="freelancer1">
                                <div class="inner-slider">
                                    <div class="inner-wrapper">
                                        <div class="d-flex align-items-center">
                                            <a>
                                                <img class="img-clocker"
                                                    src="{{ asset('assets_landing/images/ClockerHome.png') }}" />
                                            </a>
                                            <div class="seller-name"
                                                style="margin-left: 12px; top: 1px; position: relative; padding-right: 12px;">
                                                <a style="font-size: 20px; display: inline-block; margin-bottom: 6px;">
                                                    Graphic Designer Needed for Instagram Content
                                                </a>

                                                <span class="level hint--top level-one-seller">
                                                    <x-svg>{{ asset('assets/svg/home/apply/work.svg') }}</x-svg>
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                        Creative work studio
                                                    </a>
                                                </span>
                                                <span class="level hint--top level-one-seller"
                                                    style="display: inline-block; margin-bottom: 3px; color: #423D55; font-size: 14px;">
                                                    <x-svg>{{ asset('assets/svg/home/apply/partTime.svg') }}</x-svg>
                                                    <span class="badge"
                                                        style="margin-right: 20px; margin-top: 4px; padding: 5px 14px; font-size: 9px; font-weight: medium; color: #1ABAED; background-color: #C2EEFF;">
                                                        Work From Home
                                                    </span>
                                                    <span class="badge badge-success"
                                                        style="margin-left: -15px; margin-top: 4px; padding: 5px 14px; font-size: 9px; font-weight: 500; color: #1ABAED; background-color: #C2EEFF;">
                                                        Part Time
                                                    </span>
                                                </span>
                                                <span class="level hint--top level-one-seller">
                                                    <x-svg>{{ asset('assets/svg/home/apply/time.svg') }}</x-svg>
                                                    {{-- <div class="d-flex"> --}}
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                        Jakarta, Indonesia,
                                                    </a>
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500; color:#00AAFF;">
                                                        5 people applied for this job
                                                    </a>
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                        , 8 hours ago
                                                    </a>
                                                    {{-- </div> --}}
                                                </span>
                                                <span class="level hint--top level-one-seller" style="margin-left:-3px">
                                                    <x-svg>{{ asset('assets/svg/home/apply/salary.svg') }}</x-svg>
                                                    <a
                                                        style="display: inline-block; margin-bottom: 5px; font-weight: 500;">
                                                        salary is not shown
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="button-container">
                                                <button class="button like">
                                                    <i class="fa fa-thumbs-up"></i>
                                                </button>
                                                <button class="button heart">
                                                    <i class="fa fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a
                                            style="display: inline-block; margin-bottom: 10px; margin-top: 30px; margin-left: 20px; font-weight: bold; font-size: 16px;">
                                            Required Skills
                                        </a>
                                        <div>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <p class="badge2" style="font-size: 12px">
                                                Adobe Ilustrator
                                            </p>
                                            <a href="#" class="badge2"
                                                style="font-size: 12px; border: 1px solid transparent;">
                                                Show More
                                                <i class="fas fa-chevron-right" style="margin-left: 8px;"></i>
                                            </a>
                                        </div>
                                        <div
                                            style="display: flex; justify-content: space-between; align-items: flex-start;">
                                            <p style="text-align: left; padding-left: 10px; font-weight: bold;"></p>
                                            <button class="btn btn-success2 button-apply" type="submit">
                                                <x-svg>{{ asset('assets/svg/home/apply/fastApply.svg') }}</x-svg>
                                                Fast Apply
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
