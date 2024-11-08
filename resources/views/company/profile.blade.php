@extends('company.layout.app')
@section('content')
<section class="main-content p-list-two">
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <aside class="col col-xl-4 order-xl-1 col-lg-12 order-lg-1 col-12">
                <div class="box mb-3 shadow-sm rounded bg-white profile-box text-center">
                    <div class="py-4 px-3 border-bottom">
                        <img src="{{ asset('avatar.jpg') }}" class="img-fluid mt-2 rounded-circle" alt="Company Logo" width="100px" height="100px">
                        <h5 class="font-weight-bold text-dark mb-1 mt-4">Osahan Solutions</h5>
                        <p class="mb-0 text-muted">Innovative Software Solutions</p>
                        <p class="mt-4 text-muted">Osahan Solutions is a leading software development company that provides innovative solutions to businesses.</p>
                    </div>
                    <div class="d-flex">
                        <div class="col-6 border-right p-3">
                            <h6 class="font-weight-bold text-dark mb-1">50</h6>
                            <p class="mb-0 text-black-50 small">Employees</p>
                        </div>
                        <div class="col-6 p-3">
                            <h6 class="font-weight-bold text-dark mb-1">100+</h6>
                            <p class="mb-0 text-black-50 small">Projects Completed</p>
                        </div>
                    </div>
                   
                </div>
                <div class="box shadow-sm rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Company Skills</h6>
                    </div>
                    <div class="box-body">
                        <div class="d-flex align-items-center osahan-post-header p-3 border-bottom people-list">
                            {{-- <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="images/skills/web-development.png" alt="">
                            </div> --}}
                            <div class="font-weight-bold">
                                <div class="text-truncate">Web Development <span class="badge badge-dark ml-1">10</span></div>
                                <div class="small text-muted">Endorsed by 5 connections</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center osahan-post-header p-3 border-bottom people-list">
                            {{-- <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="images/skills/cloud-computing.png" alt="">
                            </div> --}}
                            <div class="font-weight-bold">
                                <div class="text-truncate">Cloud Computing <span class="badge badge-danger ml-1">8</span></div>
                                <div class="small text-muted">Endorsed by 3 connections</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center osahan-post-header p-3 people-list">
                            {{-- <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="images/skills/ui-ux.png" alt="">
                            </div> --}}
                            <div class="font-weight-bold">
                                <div class="text-truncate">UI/UX Design <span class="badge badge-info ml-1">6</span></div>
                                <div class="small text-muted">Endorsed by 4 connections</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box shadow-sm mb-3 rounded bg-white ads-box text-center overflow-hidden">
                    <img src="images/job1.png" class="img-fluid" alt="Responsive image">
                    <div class="p-3 border-bottom">
                        <h6 class="font-weight-bold text-dark">Looking for Talent?</h6>
                        <p class="mb-0 text-muted">Join our team and grow with us!</p>
                    </div>
                    <div class="p-3">
                        <button type="button" class="btn btn-outline-success pl-4 pr-4"> POST A JOB </button>
                    </div>
                </div>
            </aside>
            <main class="col col-xl-8 order-xl-2 col-lg-12 order-lg-2 col-md-12 col-sm-12 col-12">
                <div class="box shadow-sm rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3">
                        <h6 class="m-0">About Us</h6>
                    </div>
                    <div class="box-body p-3">
                        <p>At Osahan Solutions, we specialize in providing innovative software solutions tailored to meet the unique needs of our clients. Our team is dedicated to excellence and committed to delivering high-quality products that drive results.</p>
                        <p class="mb-0">With a diverse portfolio of successful projects and a strong focus on customer satisfaction, we are proud to be a leader in the tech industry. Join us as we continue to push the boundaries of technology and creativity.</p>
                    </div>
                </div>
                <div class="box shadow-sm rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Our Projects</h6>
                    </div>
                    <div class="box-body p-3 border-bottom">
                        <div class="d-flex align-items-top job-item-header pb-2">
                            <div class="mr-2">
                                <h6 class="font-weight-bold text-dark mb-0">E-Commerce Platform</h6>
                                <div class="text-truncate text-primary">Client: XYZ Corp</div>
                                <div class="small text-gray-500">Jan 2022 - Present</div>
                            </div>
                            <img class="img-fluid ml-auto mb-auto" src="{{ asset('assets_landing/images/bg3.jpeg') }}" alt="">
                        </div>
                        <p class="mb-0">Developed a full-featured e-commerce platform that has increased client sales by 30%.</p>
                    </div>
                    <div class="box-body p-3 border-bottom">
                        <div class="d-flex align-items-top job-item-header pb-2">
                            <div class="mr-2">
                                <h6 class="font-weight-bold text-dark mb-0">Mobile App Development</h6>
                                <div class="text-truncate text-primary">Client: ABC Ltd</div>
                                <div class="small text-gray-500">Mar 2021 - Dec 2021</div>
                            </div>
                            <img class="img-fluid ml-auto mb-auto" src="{{ asset('assets_landing/images/bg3.jpeg') }}" alt="">
                        </div>
                        <p class="mb-0">Created a mobile application that has received over 10,000 downloads in the first month.</p>
                    </div>
                    <div class="box-body p-3">
                        <div class="d-flex align-items-top job-item-header pb-2">
                            <div class="mr-2">
                                <h6 class="font-weight-bold text-dark mb-0">Cloud Solutions</h6>
                                <div class="text-truncate text-primary">Client: DEF Inc</div>
                                <div class="small text-gray-500">Jun 2020 - Feb 2021</div>
                            </div>
                            <img class="img-fluid ml-auto mb-auto" src="{{ asset('assets_landing/images/bg3.jpeg') }}" alt="">
                        </div>
                        <p class="mb-0">Implemented cloud solutions that improved operational efficiency by 40%.</p>
                    </div>
                </div>
                <div class="box shadow-sm rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Education & Certifications</h6>
                    </div>
                    <div class="box-body p-3 border-bottom">
                        <div class="d-flex align-items-top job-item-header pb-2">
                            <div class="mr-2">
                                <h6 class="font-weight-bold text-dark mb-0">Certified Scrum Master</h6>
                                <div class="text-truncate text-primary">Scrum Alliance</div>
                                <div class="small text-gray-500">Completed: Jan 2021</div>
                            </div>
                            <img class="img-fluid ml-auto mb-auto" src="{{ asset('assets_landing/images/bg3.jpeg') }}" alt="">
                        </div>
                        <p class="mb-0">Certification in Agile project management methodologies.</p>
                    </div>
                    <div class="box-body p-3">
                        <div class="d-flex align-items-top job-item-header pb-2">
                            <div class="mr-2">
                                <h6 class="font-weight-bold text-dark mb-0">AWS Certified Solutions Architect</h6>
                                <div class="text-truncate text-primary">Amazon Web Services</div>
                                <div class="small text-gray-500">Completed: May 2022</div>
                            </div>
                            <img class="img-fluid ml-auto mb-auto" src="{{ asset('assets_landing/images/bg3.jpeg') }}" alt="">
                        </div>
                        <p class="mb-0">Certification demonstrating expertise in designing distributed systems on AWS.</p>
                    </div>
                </div>
            </main>
            {{-- <aside class="col col-xl-3 order-xl-3 col-lg-12 order-lg-3 col-12">
                <div class="box shadow-sm rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Recent Visitors</h6>
                    </div>
                    <div class="box-body p-3">
                        <div class="d-flex align-items-center osahan-post-header mb-3 people-list">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="images/user/visitor1.png" alt="">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold mr-2">
                                <div class="text-truncate">Alice Johnson</div>
                                <div class="small text-gray-500">@TechReviewer</div>
                            </div>
                            <span class="ml-auto"><button type="button" class="btn btn-light btn-sm">Connect</button></span>
                        </div>
                        <div class="d-flex align-items-center osahan-post-header mb-3 people-list">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="images/user/visitor2.png" alt="">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold mr-2">
                                <div class="text-truncate">Mark Smith</div>
                                <div class="small text-gray-500">@Developer</div>
                            </div>
                            <span class="ml-auto"><button type="button" class="btn btn-light btn-sm">Connect</button></span>
                        </div>
                        <div class="d-flex align-items-center osahan-post-header mb-3 people-list">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="images/user/visitor3.png" alt="">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold mr-2">
                                <div class="text-truncate">Emma Brown</div>
                                <div class="small text-gray-500">@Designer</div>
                            </div>
                            <span class="ml-auto"><button type="button" class="btn btn-light btn-sm">Connect</button></span>
                        </div>
                    </div>
                </div>
                <div class="box shadow-sm mb-3 rounded bg-white ads-box text-center overflow-hidden">
                    <img src="images/ads2.png" class="img-fluid" alt="Responsive image">
                    <div class="p-3 border-bottom">
                        <h6 class="font-weight-bold text-gold">Become a Premium Member</h6>
                        <p class="mb-0 text-muted">Unlock exclusive features and benefits!</p>
                    </div>
                    <div class="p-3">
                        <button type="button" class="btn btn-outline-gold pl-4 pr-4">ACTIVATE</button>
                    </div>
                </div>
            </aside> --}}
        </div>
    </div>
</section>
@endsection
