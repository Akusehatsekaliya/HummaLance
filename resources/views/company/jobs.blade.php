@extends('company.layout.app')
@section('content')
    <!--   header -->
    <div class="third-menu filter-options py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex align-items-center justify-content-between">
                    <div class="left">
                        <div class="dropdown-filters d-flex">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Seller Details
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="options">
                                        <h5>Main type</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="custom-checkbox">Mobile Apps
                                                    <span class="count">(150)</span>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="custom-checkbox">Email Templates
                                                    <span class="count">(150)</span>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="custom-checkbox">Landing pages
                                                    <span class="count">(150)</span>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="custom-checkbox">Websites
                                                    <span class="count">(150)</span>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="options">
                                        <h5>Image file format</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="custom-checkbox">jpg
                                                    <span class="count">(150)</span>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="custom-checkbox">png
                                                    <span class="count">(150)</span>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="custom-checkbox">psd
                                                    <span class="count">(150)</span>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="custom-checkbox">pdf
                                                    <span class="count">(150)</span>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown ml-4">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="budget"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Budget
                                </button>
                                <div class="dropdown-menu budget" aria-labelledby="budget">
                                    <div class="options">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Min.</label>
                                                <input type="text" placeholder="Any">
                                                <i class="fa fa-inr" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Min.</label>
                                                <input type="text" placeholder="Any">
                                                <i class="fa fa-inr" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown ml-4">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="delivery"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Delivery Time
                                </button>
                                <div class="dropdown-menu delivery" aria-labelledby="delivery">
                                    <div class="options">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="fake-radio-wrapper">
                                                    <div><input type="hidden"
                                                            name="gig_items[2][0007284419489][gig_item_id]"
                                                            value="117210558"><input type="hidden"
                                                            name="gig_items[2][0007284419489][quantity]" value="0">
                                                    </div>
                                                    <label class="fake-radio"><input type="radio" name="2"
                                                            value="0" checked=""><span
                                                            class="radio-img"></span><span>Express 24H</span></label><label
                                                        class="fake-radio"><input type="radio" name="2"
                                                            value="1"><span class="radio-img"></span><span>Up to 3
                                                            days</span>
                                                    </label>
                                                    <label class="fake-radio"><input type="radio" name="2"
                                                            value="1"><span class="radio-img"></span><span>Up to 7
                                                            days</span>
                                                    </label>
                                                    <label class="fake-radio"><input type="radio" name="2"
                                                            value="1"><span
                                                            class="radio-img"></span><span>Anytime</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="dropdown-filters d-flex">
                            <div class="dropdown">
                                <button class="btn btn-secondary" id="openModal">Add the Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-page best-selling main-content">
        <div class="view_slider recommended pt-5">
            <div class="container">
                <div class="sorting-div d-flex align-items-center justify-content-between">
                    <p class="mb-2">463 Services available</p>
                    <div class="sorting d-flex align-items-center">
                        <p>Sortby</p>
                        <select class="custom-select custom-select-sm border-0 shadow-sm ml-2">
                            <option>Best Selling</option>
                            <option>Recommended</option>
                            <option>Newest Arrivals</option>
                        </select>
                    </div>
                </div>
                <h3>Services In Web &amp; Mobile Design</h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="menu">
                            <div class="center-button" onclick="toggleMenu()"><i class="fa-solid fa-ellipsis-h"></i></div>
                            <div class="menu-item" style="--i: 3;"><button class="btn" id="openEditModal"><i class="fa-solid fa-edit"></i></button></div>
                            <div class="menu-item" style="--i: 4;"><a href="#"><i class="fa-solid fa-trash"></i></a></div>
                        </div> 
                        <a href="product-detail.html">                          
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
                </div>
            </div>
        </div>
        <div class="footer-pagination text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                            <!--                    <span class="sr-only"></span>-->
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                            <!--                    <span class="sr-only"></span>-->
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="modal" class="modal-form">
        <div class="modal-form-content">
            <button class="btn btn-danger close-modal" id="closeModal"><i class="fa-solid fa-times fa-2x"></i>
            </button>
            <div class="box-title border-bottom p-3">
                <h3 class="m-0">Edit Project</h3>
            </div>
            <div class="box-body px-3 pt-3 pb-0">
                <div class="row">
                    <div class="col-sm-6 mb-4">
                        <label id="FROM" class="form-label">Name</label>
                        <!-- Input -->
                            <input type="text" class="form-control" placeholder="From" aria-label="FROM" aria-describedby="FROM">
                        <!-- End Input -->
                    </div>
                    <div class="col-sm-6 mb-4">
                        <label id="TO" class="form-label">Category</label>
                        <!-- Input -->
                        <div class="row">
                            <!-- Input -->
                            <div class="mb-3 mb-sm-6" style="width:94%; margin-left:15px;">
                               <div class="js-form-message">
                                  <div class="form-group">
                                     <select class="form-control custom-select" required="" data-msg="Please select month." data-error-class="u-has-error" data-success-class="u-has-success">
                                        <option value="">Select month</option>
                                        <option value="birthMonthSelect1">January</option>
                                        <option value="birthMonthSelect2">February</option>
                                        <option value="birthMonthSelect3">March</option>
                                        <option value="birthMonthSelect4" selected="selected">April</option>
                                        <option value="birthMonthSelect5">May</option>
                                        <option value="birthMonthSelect6">June</option>
                                        <option value="birthMonthSelect7">July</option>
                                        <option value="birthMonthSelect8">August</option>
                                        <option value="birthMonthSelect9">September</option>
                                        <option value="birthMonthSelect10">October</option>
                                        <option value="birthMonthSelect11">November</option>
                                        <option value="birthMonthSelect12">December</option>
                                     </select>
                                  </div>
                               </div>
                            </div>
                        </div>
                        <!-- End Input -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-4">
                        <label id="companyLabel" class="form-label">Description</label>
                        <!-- Input -->
                        <div class="input-group">
                            <textarea class="form-control" rows="4" name="text" placeholder="Enter Bio"> </textarea>
                        </div>
                        <!-- End Input -->
                    </div>
                    <div class="col-sm-6 mb-4">
                        <label id="positionLabel" class="form-label">Budget</label>
                        <!-- Input -->
                        <div class="input-group">
                            <input type="number" class="form-control" placeholder="Enter your position" aria-label="Enter your position" aria-describedby="positionLabel">
                        </div>
                        <!-- End Input -->
                    </div>
                </div>
            </div>
            <button class="btn btn-secondary">Cencel</button>
            <button class="btn btn-success">Submit</button>
        </div>
    </div>

    <div id="editmodal" class="modal-form">
        <div class="modal-form-content">
            <button class="btn btn-danger close-modal" id="closeEditModal">
                <i class="fa-solid fa-times fa-2x"></i>
            </button>
            <div class="box-title border-bottom p-3">
                <h3 class="m-0">Edit Project</h3>
            </div>
            <div class="box-body px-3 pt-3 pb-0">
                <div class="row">
                    <div class="col-sm-6 mb-4">
                        <label id="FROM" class="form-label">Name</label>
                        <!-- Input -->
                            <input type="text" class="form-control" placeholder="From" aria-label="FROM" aria-describedby="FROM">
                        <!-- End Input -->
                    </div>
                    <div class="col-sm-6 mb-4">
                        <label id="TO" class="form-label">Category</label>
                        <!-- Input -->
                        <div class="row">
                            <!-- Input -->
                            <div class="mb-3 mb-sm-6" style="width:94%; margin-left:15px;">
                               <div class="js-form-message">
                                  <div class="form-group">
                                     <select class="form-control custom-select" required="" data-msg="Please select month." data-error-class="u-has-error" data-success-class="u-has-success">
                                        <option value="">Select month</option>
                                        <option value="birthMonthSelect1">January</option>
                                        <option value="birthMonthSelect2">February</option>
                                        <option value="birthMonthSelect3">March</option>
                                        <option value="birthMonthSelect4" selected="selected">April</option>
                                        <option value="birthMonthSelect5">May</option>
                                        <option value="birthMonthSelect6">June</option>
                                        <option value="birthMonthSelect7">July</option>
                                        <option value="birthMonthSelect8">August</option>
                                        <option value="birthMonthSelect9">September</option>
                                        <option value="birthMonthSelect10">October</option>
                                        <option value="birthMonthSelect11">November</option>
                                        <option value="birthMonthSelect12">December</option>
                                     </select>
                                  </div>
                               </div>
                            </div>
                        </div>
                        <!-- End Input -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-4">
                        <label id="companyLabel" class="form-label">Description</label>
                        <!-- Input -->
                        <div class="input-group">
                            <textarea class="form-control" rows="4" name="text" placeholder="Enter Bio"> </textarea>
                        </div>
                        <!-- End Input -->
                    </div>
                    <div class="col-sm-6 mb-4">
                        <label id="positionLabel" class="form-label">Budget</label>
                        <!-- Input -->
                        <div class="input-group">
                            <input type="number" class="form-control" placeholder="Enter your position" aria-label="Enter your position" aria-describedby="positionLabel">
                        </div>
                        <!-- End Input -->
                    </div>
                </div>
            </div>
            <button class="btn btn-secondary">Cancel</button>
            <button class="btn btn-success">Submit</button>
        </div>
    </div>
@endsection
