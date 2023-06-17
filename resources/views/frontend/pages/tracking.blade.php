<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Skytrack - Tracking Solution</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicons/2157-img-favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    {{-- @extends('frontend.layouts.app') --}}
    {{-- @include('frontend.style.style') --}}
    <link rel="stylesheet" href="{{ asset('assets/css/css-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css-animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css-magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css-fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css-aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css-nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css-flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css-meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css-slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css-default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css-responsive.css') }}">
</head>

<body>


    <!-- header-start -->
    <header>
        <header>

            <div id="header-sticky" class="main-header">
                <div class="container-fluid header-container-p">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="logo">
                                <a href="{{ route('frontend.index') }}"><img
                                        src="{{ asset('assets/img/logo/logo.png') }}" class="mobile-logo"
                                        alt="Logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6 d-none d-md-block">
                            <div class="menu-area">
                                <div class="main-menu">
                                    <div class="mean-push"></div>
                                    <nav id="mobile-menu" style="display: none;">
                                        <ul>
                                            <li class="active"><a href="{{ route('frontend.index') }}">Home</a></li>
                                            <li><a href="{{ route('frontend.auth.login') }}">Login</a></li>
                                            <li><a href="{{ route('frontend.auth.register') }}">Register</a></li>
                                            <li><a href="{{ route('frontend.pages.tracking') }}">Tracking</a></li>
                                            <li><a href="#">Support</a></li>

                                        </ul>
                                    </nav>
                                </div>

                                <div class="header-btn">
                                    <!-- <a href="#" class="btn" data-toggle="modal" data-target="#exampleModalLong"><img src="img/icon/calculator-symbols.png" alt="icon">Get Fare Rate</a> -->
                                    <a href="{{ route('frontend.auth.login') }}" class="btn"
                                        data-target="#exampleModalLong">Login/Register</a>
                                    <a href="{{ route('frontend.pages.tracking') }}" class="btn"
                                        data-target="#exampleModalLong">Track Your
                                        Order</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu mean-container">

                            </div>
                        </div>
                        <!-- Modal Search -->
                        <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form>
                                        <input type="text" placeholder="Search here..." spellcheck="false"
                                            data-ms-editor="true">
                                        <button><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content fare-rate-modal">
                                    <ul class="nav nav-tabs setup-panel">
                                        <li class="nav-item single-steps">
                                            <a class="nav-link btn-blue-grey btn-amber" href="#step-1">Select Your
                                                Destination</a>
                                        </li>
                                        <li class="nav-item single-steps">
                                            <a class="nav-link btn-blue-grey" href="#step-2">ITEMS TO BE SHIPPED</a>
                                        </li>
                                        <li class="nav-item single-steps">
                                            <a class="nav-link btn-blue-grey" href="#step-3">tracking information</a>
                                        </li>
                                    </ul>
                                    <form action="#" method="post">
                                        <div class="single-setup" id="step-1" style="display: block;">
                                            <div class="fare-rate-tab-content">
                                                <div class="modal-shipping-info">
                                                    <ul>
                                                        <li>
                                                            <div class="shipping-step-count">
                                                                <h5>A</h5>
                                                            </div>
                                                            <div class="shipping-address-form">
                                                                <div class="shipping-country-box form-group">
                                                                    <label for="from-country">from country</label>
                                                                    <input type="text" required="required"
                                                                        id="from-country"
                                                                        placeholder="Select Your Destination"
                                                                        spellcheck="false" data-ms-editor="true">
                                                                </div>
                                                                <div class="shipping-address-box form-group">
                                                                    <label for="from-country-location">add your
                                                                        location</label>
                                                                    <input type="text" required="required"
                                                                        id="from-country-location"
                                                                        placeholder="Select Your Destination"
                                                                        spellcheck="false" data-ms-editor="true">
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="shipping-step-count">
                                                                <h5>B</h5>
                                                            </div>
                                                            <div class="shipping-address-form">
                                                                <div class="shipping-country-box form-group">
                                                                    <label for="to-country">TO country</label>
                                                                    <input type="text" required="required"
                                                                        id="to-country"
                                                                        placeholder="Select Your Destination"
                                                                        spellcheck="false" data-ms-editor="true">
                                                                </div>
                                                                <div class="shipping-address-box form-group">
                                                                    <label for="to-country-location">add your
                                                                        location</label>
                                                                    <input type="text" required="required"
                                                                        id="to-country-location"
                                                                        placeholder="Select Your Destination"
                                                                        spellcheck="false" data-ms-editor="true">
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="modal-shipping-more-list">
                                                    <ul>
                                                        <li><a href="#"><i class="flaticon-credit-card"></i>
                                                                Don't
                                                                have an account? No problem Pay by credit card or
                                                                cash.</a>
                                                        </li>
                                                        <li><a href="#"><i class="flaticon-sings"></i> Get a
                                                                quick
                                                                quote and start shipping</a></li>
                                                        <li><a href="#"><i class="flaticon-track"></i> Consult
                                                                your
                                                                packaging and delivery options</a></li>
                                                    </ul>
                                                </div>
                                                <button class="btn f-right nextBtn-2 btn-success" type="button">one
                                                    more
                                                    step</button>
                                            </div>
                                        </div>
                                        <div class="single-setup" id="step-2" style="display: none;">
                                            <div class="fare-rate-tab-content">
                                                <div class="modal-shipping-details">
                                                    <div class="modal-shipping-title">
                                                        <h2>items <span>details</span></h2>
                                                        <h2 class="f-right">total cost : <span>$ 19.00</span></h2>
                                                    </div>
                                                    <div class="shipping-details-info">
                                                        <div class="single-shipping-details-box">
                                                            <label for="packaging-size">packaging size</label>
                                                            <select class="custom-select" id="packaging-size">
                                                                <option selected="">Standart Size ( 42” x 36” )
                                                                </option>
                                                                <option>Standart Size ( 82” x 86” )</option>
                                                                <option>Standart Size ( 102” x 165” )</option>
                                                                <option>Standart Size ( 110” x 205” )</option>
                                                                <option>Standart Size ( 120” x 250” )</option>
                                                            </select>
                                                        </div>
                                                        <div class="single-shipping-details-box shipping-qty">
                                                            <label for="QTY-number">QTY</label>
                                                            <input type="number" value="1" id="QTY-number"
                                                                required="required">
                                                        </div>
                                                        <div class="single-shipping-details-box shipping-weight">
                                                            <label for="packaging-weight">TOTAL WEIGHT</label>
                                                            <select class="custom-select" id="packaging-weight">
                                                                <option selected="">KG</option>
                                                                <option>20KG</option>
                                                                <option>30KG</option>
                                                                <option>50KG</option>
                                                                <option>80KG</option>
                                                                <option>100KG</option>
                                                            </select>
                                                        </div>
                                                        <div class="single-shipping-details-box shipping-transport">
                                                            <label for="cargo-transport">cargo transport</label>
                                                            <select class="custom-select" id="cargo-transport">
                                                                <option selected="">IN</option>
                                                                <option>1500in</option>
                                                                <option>2000in</option>
                                                                <option>2500in</option>
                                                                <option>3000in</option>
                                                                <option>3500in</option>
                                                                <option>4000in</option>
                                                            </select>
                                                        </div>
                                                        <div class="single-shipping-details-box shipping-product">
                                                            <label for="product-category">product category</label>
                                                            <select class="custom-select" id="product-category">
                                                                <option selected="">Glass Product</option>
                                                                <option>Glass Product</option>
                                                                <option>Glass Product</option>
                                                                <option>Glass Product</option>
                                                                <option>Glass Product</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" required="required"
                                                            class="custom-control-input" id="customControlInline">
                                                        <label class="custom-control-label"
                                                            for="customControlInline">Logistics is generally the
                                                            detailed
                                                            organization and implementation of a complex operation. In a
                                                            general business sense, logistics is the management of the
                                                            flow
                                                            of things between the point of origin and the point</label>
                                                    </div>
                                                </div>
                                                <button class="btn f-left prevBtn-2 btn-success"
                                                    type="button">Previous</button>
                                                <button class="btn f-right nextBtn-2 btn-success"
                                                    type="button"><span>$19.00</span> Booking</button>
                                            </div>
                                        </div>
                                        <div class="single-setup" id="step-3" style="display: none;">
                                            <div class="fare-rate-tab-content">
                                                <div class="modal-shipping-details">
                                                    <div class="modal-shipping-title">
                                                        <h2>tracking <span>information</span></h2>
                                                    </div>
                                                    <div class="f-left pr-20">
                                                        <div class="shipping-details-info shipping-tracking-info">
                                                            <div class="modal-tracking-info">
                                                                <label for="invoice-id">invoice Id</label>
                                                                <input type="text" id="invoice-id"
                                                                    placeholder="Enter Your Id" spellcheck="false"
                                                                    data-ms-editor="true">
                                                            </div>
                                                            <div class="modal-tracking-info">
                                                                <label>Search invoice</label>
                                                                <button class="btn nextBtn-2 btn-success">find your
                                                                    product</button>
                                                            </div>
                                                        </div>
                                                        <div class="tracking-quots-board">
                                                            <label>your happiness quotes</label>
                                                            <div class="tracking-quots-board-info">
                                                                <img src="img/bg/board_bg.jpg" alt="img">
                                                                <h5>On Board Your Products. Now Product is
                                                                    Malaysia Ocean</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tracking-modal-map">
                                                        <div id="contact-map"
                                                            style="position: relative; overflow: hidden;">
                                                            <div
                                                                style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                                                <div style="overflow: hidden;"></div>
                                                                <div class="gm-style"
                                                                    style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                                                    <div tabindex="0" aria-label="Map"
                                                                        aria-roledescription="map" role="region"
                                                                        style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
                                                                        <div
                                                                            style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                                                            <div
                                                                                style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                                                <div
                                                                                    style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                                    <div
                                                                                        style="position: absolute; z-index: 989; transform: matrix(1, 0, 0, 1, -93, -84);">
                                                                                        <div
                                                                                            style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                                                            <div
                                                                                                style="width: 256px; height: 256px;">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;">
                                                                            </div>
                                                                            <div
                                                                                style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;">
                                                                            </div>
                                                                            <div
                                                                                style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                                                <div
                                                                                    style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                                                    <div
                                                                                        style="position: absolute; z-index: 989; transform: matrix(1, 0, 0, 1, -93, -84);">
                                                                                        <div
                                                                                            style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    style="width: 33px; height: 44px; overflow: hidden; position: absolute; left: -17px; top: -44px; z-index: 0;">
                                                                                    <img alt=""
                                                                                        src="img/icon/map_icon.png"
                                                                                        draggable="false"
                                                                                        style="position: absolute; left: 0px; top: 0px; user-select: none; width: 33px; height: 44px; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                                                            <div
                                                                                style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                                                                <div
                                                                                    style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;">
                                                                                </div>
                                                                                <div
                                                                                    style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;">
                                                                                </div>
                                                                                <div
                                                                                    style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                                                                    <span
                                                                                        id="A9AB3AD4-6DF7-416E-9903-90BF9D64736D"
                                                                                        style="display: none;">To
                                                                                        navigate,
                                                                                        press the arrow keys.</span>
                                                                                    <div title="Makplus"
                                                                                        aria-label="Makplus"
                                                                                        role="img"
                                                                                        style="width: 49px; height: 60px; overflow: hidden; position: absolute; cursor: pointer; touch-action: none; left: -25px; top: -52px; z-index: 0;"
                                                                                        tabindex="-1"><img
                                                                                            alt=""
                                                                                            src="https://maps.gstatic.com/mapfiles/transparent.png"
                                                                                            draggable="false"
                                                                                            style="width: 49px; height: 60px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="gm-style-moc"
                                                                            style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                                                                            <p class="gm-style-mot"></p>
                                                                        </div>
                                                                    </div><iframe aria-hidden="true" frameborder="0"
                                                                        tabindex="-1"
                                                                        style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
                                                                    <div
                                                                        style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </header>
    </header>
    <!-- header-start-end -->

    <!-- main-area -->
    <main>


        <div class="tracking-area pt-95 pb-115">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="tracking-id-info text-center">
                            <p>Enter Your Cargo Tracking, Door to Door Office <a href="#">Order Number.</a></p>
                            <form action="#" class="tracking-id-form">
                                <input type="text" placeholder="Tracking id" spellcheck="false"
                                    data-ms-editor="true">
                                <button class="btn red-btn">Tracking</button>
                            </form>
                            <div class="tracking-list">
                                <ul>
                                    <li>
                                        <div class="tracking-list-icon">
                                            <i class="flaticon-box"></i>
                                        </div>
                                        <div class="tracking-list-content">
                                            <p>Dispatch</p>
                                        </div>
                                    </li>
                                    <li class="active">
                                        <div class="tracking-list-icon">
                                            <i class="flaticon-warehouse"></i>
                                        </div>
                                        <div class="tracking-list-content">
                                            <p>departed country</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tracking-list-icon">
                                            <i class="flaticon-placeholder"></i>
                                        </div>
                                        <div class="tracking-list-content">
                                            <p>Destination</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tracking-list-icon">
                                            <i class="flaticon-audit"></i>
                                        </div>
                                        <div class="tracking-list-content">
                                            <p>Successful</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tracking-help">
                                <p>MULTIPLE TRACKING NUMBERS | <a href="#">NEED HELP?</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer>
        <div class="footer-wrap pt-50" data-background="img/bg/footer_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-50">
                            <div class="footer-logo mb-35">
                                <a href="{{ route('frontend.index') }}"><img
                                        src="{{ asset('assets/images/logo-w_logo.png') }}" alt="img"></a>
                            </div>
                            <div class="footer-text">
                                <p><strong>Head Office</strong></p>
                                <p>House#42, Road-3/A, Dhanmondi, Dhaka-1209, Bangladesh</p>
                                <p><strong>Email</strong></p>
                                <p>info@skytrackbd.com</p>
                                <p><strong>Phone</strong></p>
                                <p>09613828606</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-50">
                            <div class="fw-title mb-30">
                                <h5>CUSTOMER</h5>
                            </div>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> About us</a></li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Delivery Information</a>
                                    </li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Terms &amp;
                                            Conditions</a></li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Privacy Policy</a></li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Refund Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-50">
                            <div class="fw-title mb-30">
                                <h5>INFORMATION</h5>
                            </div>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> About us</a></li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Delivery Information</a>
                                    </li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Terms &amp;
                                            Conditions</a></li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Privacy Policy</a></li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Refund Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-50">
                            <div class="fw-title mb-30">
                                <h5>MOBILE APPS</h5>
                            </div>
                            <div class="f-support-content mb-30">
                                <a href="#" class="f-download-btn"><img
                                        src="{{ asset('assets/images/images-f_download_btn01.png') }}"
                                        alt="img"></a>
                                <a href="#" class="f-download-btn"><img
                                        src="{{ asset('assets/images/images-f_download_btn02.png') }}"
                                        alt="img"></a>
                            </div>
                            <div class="fw-title mb-30">
                                <h5>SOCIAL LINKS</h5>
                            </div>
                            <div class="f-support-content">
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <p>Copyright&copy; <span>Sky Track </span> | All Rights Reserved</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->




    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor-jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/334-js-popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/3741-js-bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/5085-js-isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/3435-js-slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/312-js-jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/9446-js-ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/2815-js-wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/7036-js-aos.js') }}"></script>
    <script src="{{ asset('assets/js/8726-js-paroller.js') }}"></script>
    <script src="{{ asset('assets/js/2092-js-jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/2012-js-jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/2735-js-jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/7521-js-jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/js/8228-js-imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/788-js-jquery.magnific-popup.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
    <script src="{{ asset('assets/js/9626-js-plugins.js') }}"></script>
    <script src="{{ asset('assets/js/2325-js-main.js') }}"></script>
</body>

</html>
