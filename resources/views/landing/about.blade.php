<style>
.homepage-search-block {
    height: 100%;
}

    .svg-first,
    .svg-second,
    .svg-three,
    .svg-four {
        position: relative;
        z-index: 3;
        max-width: 100%;
        height: auto;
    }

    .svg-first {
        top: -60px;
        left: 40%;
        transform: translateX(-40%);
    }

    .svg-second {
        top: -9px;
        transform: translatex(152%);
    }

    .svg-three {
        left: 27%;
        bottom: 105px;
    }

    .svg-four {
        bottom: 145px;
        transform: translatex(165px);
    }

    @media (max-width: 768px) {
        .svg-first {
            top: -23px;
            left: 23%;
            width: 205px;
            height: auto;
        }

        .svg-second {
            top: 10px;
            right: 25%;
            width: 90px;
            height: auto;
        }

        .svg-three {
            left: 3%;
            bottom: 51px;
            width: 185px;
            height: auto;
        }

        .svg-four {
            bottom: 80px;
            transform: translateX(2%);
            width: 164px;
            height: auto;
        }
    }

    .col-lg-6 {
        width: 100%;
        max-width: 600px;
        position: relative;
    }

    .homepage-search-block1 {
        height: 175px;
        margin-top: -150px;
    }

    .icon-with-text {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .text-content {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    h6 {
        margin: 0;
        font-size: 1.50rem;
        font-weight: bold;
    }

    span-1 {
        font-size: 0.875rem;
    }

    .homepage-search-block {
        overflow: visible;
    }
</style>


<section class="py-5 homepage-search-block bg-landing bg-about position-relative">
    <div class="container">
        <div class="row py-lg-5 justify-content-center d-flex align-items-center">
            <div class="homepage mt-3 text-center">
                <h3 class="text-white font-weight-bold">About Us</h3>
                <p class="text-white">
                    Home
                    <x-svg>{{ asset('assets/svg/icons-12/chevron-double-right.svg') }}</x-svg>
                    <a href="#" style="color: rgb(255, 255, 255); text-decoration: none;">About Us</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 position-relative bg-line">
    <div class="view_slider recommended position-relative">
        <div class="container ">
            <div class="row justify-content-center d-flex ">
                <div class="col-lg-6">
                    <div style="display: flex; align-items: center;">

                        <x-svg>{{ asset('assets/svg/landing/about/stats/logo-blue.svg') }}</x-svg>
                        <h6 class="text-landing ml-2 mb-0">About Us</h6>
                    </div>

                    <h3 style="margin-top: 25px; font-size: 25px;">Success With <span
                            class="text-landing">Clocker</span>
                    </h3>
                    <p>Clocker is an online platform designed to connect freelancers and job seekers with relevant,
                        quality opportunities. Founded in November 2024, Clocker aims to provide a space for individuals
                        who want to offer their skills independently, as well as for those who are looking for work
                        either full time, part time or specific projects.</p>
                    <p>As a website that facilitates three parties—freelancers, job seekers, and companies—Clocker
                        offers various innovative features such as personalized job searches, an easy-to-access profile
                        system, and transaction security mechanisms that ensure the comfort of every user. Companies can
                        easily find the right candidates for permanent positions or freelance projects, while
                        freelancers and job seekers can find opportunities that match their skills and interests.</p>
                    <p>Clocker is more than just a platform—it’s a global gateway where talent and opportunity converge.
                        Freelancers can connect with international clients, unlocking global markets and limitless
                        growth. Job seekers gain access to roles with leading companies worldwide, transforming their
                        careers through diverse experiences. Businesses tap into a global pool of skilled professionals,
                        building world-class teams that drive success. By erasing borders and bridging cultures, Clocker
                        creates an inclusive space where people and businesses thrive, innovate, and shape the future of
                        work together.</p>
                </div>
                <div class="col-lg-6">
                    {{-- 22222 --}}
                    <x-svg>{{ asset('assets/svg/landing/about/contents/group1.svg') }}</x-svg>

                    {{-- 33333 --}}
                    <x-svg>{{ asset('assets/svg/landing/about/contents/group2.svg') }}</x-svg>

                    {{-- 44444 --}}
                    <x-svg>{{ asset('assets/svg/landing/about/contents/group3.svg') }}</x-svg>

                    {{-- 55555 --}}
                    <x-svg>{{ asset('assets/svg/landing/about/contents/group4.svg') }}</x-svg>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 homepage-search-block1 bg-landing bg-user position-relative">
    <div class="container">
        <div class="row justify-content-center d-flex text-center">

            <div class="col-lg-3 justify-content-center d-flex align-items-center my-2">
                <x-svg>{{ asset('assets/svg/landing/about/stats/user-group-20-solid.svg') }}</x-svg>
                <div class="text-content ml-3 text-white">
                    <h6>999+</h6>
                    <span class="span-1">User</span>
                </div>
            </div>

            <div class="col-lg-3 justify-content-center d-flex  align-items-center my-2">
                <x-svg>{{ asset('assets/svg/landing/about/stats/work.svg') }}</x-svg>
                <div class="text-content ml-3 text-white">
                    <h6>999+</h6>
                    <span class="span-1">Company</span>
                </div>
            </div>

            <div class="col-lg-3 justify-content-center d-flex align-items-center my-2">
                <x-svg>{{ asset('assets/svg/landing/about/stats/workbox.svg') }}</x-svg>
                <div class="text-content ml-3 text-white">
                    <h6>999+</h6>
                    <span class="span-1">Freelancer</span>
                </div>
            </div>

            <div class="col-lg-3 justify-content-center d-flex  align-items-center my-2">
                <x-svg>{{ asset('assets/svg/landing/about/stats/job.svg') }}</x-svg>
                <div class="text-content ml-3 text-white">
                    <h6>999+</h6>
                    <span class="span-1">Job</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="fitur-clocker">
            <div class="svg-container2">

                <svg width="1920" height="222" viewBox="0 0 1920 222" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M-47 197.501C-15 148.501 290.5 197.501 104 218C-82.5 238.499 458.068 36.9713 539.5 104.5C724 257.5 1289 -131 1452.37 103.338C1615.74 337.676 1977.88 -9.9241 2007 3.28184"
                        stroke="#CAEEFF" stroke-width="4" stroke-linecap="round" stroke-dasharray="10 10" />
                </svg>

            </div>
            <div class="fitur-text">
                <h4>Benefit</h4>
                <h2>These are some of the benefits you get from joining clocker</h2>
            </div>
            <div class="row-fitur">
                <div class="fitur-item">
                    <div class="row">
                        <div class="card-fitur-item1">
                            <div class="main-fitur">
                                <x-svg>{{ asset('assets/svg/landing/about/main-fitur/Self Development.svg') }}</x-svg>

                                <h5>Self Development</h5>
                                <p>By joining clocker you can develop yourself further in your work and hone your
                                    skills.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fitur-item">
                    <div class="row">
                        <div class="card-fitur-item">
                            <div class="main-fitur">
                                <x-svg>{{ asset('assets/svg/landing/about/main-fitur/Time Management.svg') }}</x-svg>

                                <h5>Time Management</h5>
                                <p>in clocker you can manage your time more efficiently with various working hours from
                                    many vacancies</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fitur-item">
                    <div class="row">
                        <div class="card-fitur-item2">
                            <div class="main-fitur">
                                <x-svg>{{ asset('assets/svg/landing/about/main-fitur/Career Growth.svg') }}</x-svg>

                                <h5>Career Growth</h5>
                                <p>At clocker you can grow your career more rapidly for your future</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fitur-item">
                    <div class="row">
                        <div class="card-fitur-item">
                            <div class="main-fitur">
                                <x-svg>{{ asset('assets/svg/landing/about/main-fitur/Global Networking.svg') }}</x-svg>

                                <h5>Global Networking</h5>
                                <p>Connect with clients and other professionals worldwide, opening doors to long-term
                                    partnerships.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-landing">
    <div class="container">
        <div class="row py-lg-5 justify-content-center d-flex">
            <div class="col-lg-5 text-white">
                <h2 class="font-weight-bold">This is why you need to use a clocker</h2>
                <p style="font-size: 20px; font-weight:300;">At Clocker you can find many job vacancies with the working hours and skills
                    you want</p>
                <a href="#" class="btn btn-outline-landing1 text-center" style="font-size: 14px; font-weight: bold;">
                    Try Clocker Now
                    <x-svg>{{ asset('assets/svg/icons-24/icon-next.svg') }}</x-svg>
                </a>
            </div>
            <div class="col-lg-6">
                <div class="card-about-grid" style="z-index:1; position:absolute; margin-top:-20px;">
                    <div class="card-about-item">
                        <x-svg>{{ asset('assets/svg/landing/about/card-about-item/Easy To Use.svg') }}</x-svg>

                        <h5 >Easy To Use</h5>
                        <span class="font-italic">By joining clocker you can develop yourself further in </span>
                    </div>

                    <div class="card-about-item">
                        <x-svg>{{ asset('assets/svg/landing/about/card-about-item/Varied work.svg') }}</x-svg>

                        <h5>Varied work</h5>
                        <span class="font-italic">By joining clocker you can develop yourself further in </span>
                    </div>

                    <div class="card-about-item">
                        <x-svg>{{ asset('assets/svg/landing/about/card-about-item/Diverse companies.svg') }}</x-svg>

                        <h5>Diverse companies</h5>
                        <span class="font-italic">By joining clocker you can develop yourself further in </span>
                    </div>

                    <div class="card-about-item ">
                        <x-svg>{{ asset('assets/svg/landing/about/card-about-item/Various Working Hours.svg') }}</x-svg>

                        <h5>Various Working Hours</h5>
                        <span class="font-italic">By joining clocker you can develop yourself further in </span>
                    </div>

                    <div class="card-about-item ">
                        <x-svg>{{ asset('assets/svg/landing/about/card-about-item/Various Freelancer Services.svg') }}
                        </x-svg>

                        <h5 >Various Freelancer Services</h5>
                        <span class="font-italic">By joining clocker you can develop yourself further in </span>
                    </div>
                    <div class="card-about-item ">
                        <x-svg>{{ asset('assets/svg/landing/about/card-about-item/Used By Many People.svg') }}</x-svg>

                        <h5 >Used By Many People</h5>
                        <span class="font-italic">By joining clocker you can develop yourself further in </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="line-about bg-line9">
</section>
