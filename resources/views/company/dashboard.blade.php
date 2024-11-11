@extends('company.layout.app')
@section('content')
    <!--   header -->
    <section class="main-content p-list-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 view_slider recommended">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>DASHBOARD COMPANY</h3>
                        </div>
                    </div>
                    <div class="chart-row">
                        <div class="card-item">
                            <div class="card-header">
                                <h6>All Projects</h6>
                                <i class="fa-solid fa-box fa-2x"></i>
                            </div>
                            <div class="card-body">
                                <h4>15</h4>
                            </div>
                        </div>
                        <div class="card-item">
                            <div class="card-header">
                                <h6>Project Done</h6>
                                <i class="fa-solid fa-check-square fa-2x"></i>
                            </div>
                            <div class="card-body">
                                <h4>15</h4>
                            </div>
                        </div>
                        <div class="card-item">
                            <div class="card-header">
                                <h6>Project Pending</h6>
                                <i class="fa-solid fa-hourglass-half fa-2x"></i>
                            </div>
                            <div class="card-body">
                                <h4>15</h4>
                            </div>
                        </div>

                    </div>
                    <div class="chart-row">
                        <div class="cardchart">
                            <h2>Chart Title</h2>
                            <div class="chart-container">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                        <div class="cardchart-donuts">
                            <h2>Chart Title</h2>
                            <div class="chart-donuts-container">
                                <canvas id="myChart1"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="chart-row">
                        <div class="col-md-4">
                            <a href="#">
                                <img class="img-fluid" src="images/list/v1.png" />
                            </a>
                            <div class="inner-slider">
                                <div class="inner-wrapper">
                                    <div class="d-flex align-items-center">
                                        <span class="seller-image">
                                            <img class="img-fluid" src="images/user/s1.png" alt='' />
                                        </span>
                                        <span class="seller-name">
                                            <a href="#">Stave Martin</a>
                                            <span class="level hint--top level-one-seller">
                                                Level 1 Seller
                                            </span>
                                        </span>
                                    </div>
                                    <h3>
                                        Contrary to popular belief, Lorem Ipsum is not simply...
                                    </h3>
                                    <div class="content-info">
                                        <div class="rating-wrapper">
                                            <span class="gig-rating text-body-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792"
                                                    width="15" height="15">
                                                    <path fill="currentColor"
                                                        d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                                    </path>
                                                </svg>
                                                5.0
                                                <span>(7)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                        <div class="price">
                                            <a href="#">
                                                Starting At <span> $1,205</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="#">
                                <img class="img-fluid" src="images/list/v2.png" />
                            </a>
                            <div class="inner-slider">
                                <div class="inner-wrapper">
                                    <div class="d-flex align-items-center">
                                        <span class="seller-image">
                                            <img class="img-fluid" src="images/user/s2.png" alt='' />
                                        </span>
                                        <span class="seller-name">
                                            <a href="#">Stave Martin</a>
                                            <span class="level hint--top level-one-seller">
                                                Level 1 Seller
                                            </span>
                                        </span>
                                    </div>
                                    <h3>
                                        Contrary to popular belief, Lorem Ipsum is not simply...
                                    </h3>
                                    <div class="content-info">
                                        <div class="rating-wrapper">
                                            <span class="gig-rating text-body-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792"
                                                    width="15" height="15">
                                                    <path fill="currentColor"
                                                        d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                                    </path>
                                                </svg>
                                                5.0
                                                <span>(7)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                        <div class="price">
                                            <a href="#">
                                                Starting At <span> $1,205</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="#">
                                <img class="img-fluid" src="images/list/v3.png" />
                            </a>
                            <div class="inner-slider">
                                <div class="inner-wrapper">
                                    <div class="d-flex align-items-center">
                                        <span class="seller-image">
                                            <img class="img-fluid" src="images/user/s3.png" alt='' />
                                        </span>
                                        <span class="seller-name">
                                            <a href="#">Stave Martin</a>
                                            <span class="level hint--top level-one-seller">
                                                Level 1 Seller
                                            </span>
                                        </span>
                                    </div>
                                    <h3>
                                        Contrary to popular belief, Lorem Ipsum is not simply...
                                    </h3>
                                    <div class="content-info">
                                        <div class="rating-wrapper">
                                            <span class="gig-rating text-body-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792"
                                                    width="15" height="15">
                                                    <path fill="currentColor"
                                                        d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                                    </path>
                                                </svg>
                                                5.0
                                                <span>(7)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                        <div class="price">
                                            <a href="#">
                                                Starting At <span> $1,205</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="#">
                                <img class="img-fluid" src="images/list/v3.png" />
                            </a>
                            <div class="inner-slider">
                                <div class="inner-wrapper">
                                    <div class="d-flex align-items-center">
                                        <span class="seller-image">
                                            <img class="img-fluid" src="images/user/s3.png" alt='' />
                                        </span>
                                        <span class="seller-name">
                                            <a href="#">Stave Martin</a>
                                            <span class="level hint--top level-one-seller">
                                                Level 1 Seller
                                            </span>
                                        </span>
                                    </div>
                                    <h3>
                                        Contrary to popular belief, Lorem Ipsum is not simply...
                                    </h3>
                                    <div class="content-info">
                                        <div class="rating-wrapper">
                                            <span class="gig-rating text-body-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792"
                                                    width="15" height="15">
                                                    <path fill="currentColor"
                                                        d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                                    </path>
                                                </svg>
                                                5.0
                                                <span>(7)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                        <div class="price">
                                            <a href="#">
                                                Starting At <span> $1,205</span>
                                            </a>
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
