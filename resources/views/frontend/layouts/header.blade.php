<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Beautypress SPA Theme By Xpeedstudio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{ asset('frontend_assets') }}/apple-touch-icon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700%7CNiconne"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('frontend_assets') }}/favicon.ico">

    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/bootstrap-datepicker.min.css">

    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/xs-icon.css">

    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/themeSwither.css">

    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/owl.carousel.min.css">

    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/isotope.css">

    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/plugins.css" />

    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/style.css">

    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/responsive.css" />
</head>

<body>


    {{-- <div id="preloader">
        <div class="preloader-window left-window"></div>
        <div class="preloader-window right-window"></div>
        <div class="preloader-content">
            <img src="img/prelaoder-logo.png" alt="">
            <h2>Beautypress</h2>
        </div>
        <div class="spinner-block">
            <div class="spinner-eff spinner-eff-3">
                <div class="circle circle-1"></div>
                <div class="circle circle-2"></div>
                <div class="circle circle-3"></div>
            </div>
        </div>
    </div> --}}


    <header
        class="beautypress-header-section beautypress-header-version-3 beautypress-header-version-2 header-height-calc-minus">
        <div class="beautypress-header-top bg-color-gray-2">
            <div class="container">
                <div class="beautypress-spilit-container beautypress-version-2">
                    <div class="beautypress-language-select-list">
                        <select name="lang-select" id="language-select">
                            <option value="eng" selected>english</option>
                            <option value="jap">japanese</option>
                            <option value="thai">thai</option>
                            <option value="chi">chinese</option>
                        </select>
                        <div class="beautypress-header-social-list">
                            <ul>
                                <li><a href="{{ get_setting('facebook') }}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{ get_setting('twitter') }}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{ get_setting('linkedin') }}"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="{{ get_setting('instagram') }}"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="{{ get_setting('youtube') }}"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <ul class="beautypress-simple-iocn-list beautypress-version-1">
                        <li><i class="xsicon icon-call"></i>{{ get_setting('office_phone') }}</li>
                        <li><i class="xsicon icon-envelope"></i><a
                                href="https://demo.xpeedstudio.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="2d44434b426d555d4848495e5958494442034e4240">{{ get_setting('office_email') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="beautypress-new-header color-grren xs-extra-css">
            <div class="container">
                <nav class="xs_nav_2 xs_nav-landscape">
                    <div class="nav-header">
                        <a class="nav-logo" href="/">
                            <img src="{{ asset(get_setting('frontend_logo_menu')) }}" alt="logo">
                        </a>
                        <div class="nav-toggle"></div>
                    </div>

                    <div class="nav-menus-wrapper">
                        <ul class="nav-menu nav-menu-centered">
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">About</a>
                            </li>
                            <li><a href="#">services</a>
                                <ul class="nav-dropdown">
                                    @foreach ($services as $service)
                                        <li>
                                            <a
                                                href="{{ route('service.view', $service->id) }}">{{ $service->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('blog') }}">blog</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>

                        </ul>
                    </div>
                    <div class="nav-overlay-panel"></div>
                </nav>
            </div>
        </div>
    </header>
