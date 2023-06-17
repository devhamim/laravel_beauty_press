{{-- @extends('frontend.layouts.app')
@include('frontend.style.style')
@section('title', get_setting('meta_title'))
@section('meta_title', get_setting('meta_title'))
@section('meta_description', get_setting('meta_description'))
@section('meta_image', asset(get_setting('meta_image')))

@php
    $catLoader = get_setting('category_image_loader');
    $productLoader = get_setting('product_image_loader');
    
@endphp

@section('content')


    <div id="app" class="flex-center position-ref full-height">

        <main class="wrapper">

            @include('frontend.content.header')

            <article>

                @include('frontend.content.banner')

                @include('frontend.content.trackproduct')

                @include('frontend.content.aboutus')

            </article>

            @include('frontend.content.footer')

            @include('frontend.auth.login')
            @include('frontend.pages.d2dpopup')

        </main>
        <div class="to-top theme-clr-bg transition"> <i class="fa fa-angle-up"></i> </div>



    </div> --}}


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

    <!-- preloader  -->
    <!-- <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="S" class="letters-loading">
                            S
                        </span>
                        <span data-text-preloader="T" class="letters-loading">
                            T
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="R" class="letters-loading">
                            R
                        </span>
                        <span data-text-preloader="T" class="letters-loading">
                            T
                        </span>
                        <span data-text-preloader="E" class="letters-loading">
                            E
                        </span>
                        <span data-text-preloader="S" class="letters-loading">
                            S
                        </span>
                        <span data-text-preloader="K" class="letters-loading">
                            K
                        </span>
                    </div>
                </div>
                <div class="loader">
                    <div class="row">
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- preloader end -->

    <header>
        @include('frontend.content.header')
    </header>

    <!-- main-area -->
    <main>
        <section style="background-image:url(../../{{ get_setting('notice_image') }});padding:50px 0px;">
        <div class="text-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="dots"></li>
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Information</li>
                                        <li class="dots2"></li>
                                    </ol>
                                </nav>
                                
                            </div>
        </section>

    <!-- slider-area -->
    <section class="banner" style="padding:30px 0px">
           
                <div class="container">
                    <div class="row">
                    <div class="col-md-8">
                    <img src="{{ asset('/setting/banner/'.$info->image) }}" width="800px" height="300px" alt="img"><br>
                    <span>{{ $info->updated_at }}</span><br><br>
                    <h3>  {{$info->title}}</h3><br>
                    {!! $info->description !!}
                        </div>
                        <div class="col-md-4">
                                <div class="widget mb-40">
                                    <div class="single-sidebar white-bg">
                                        <div class="sidebar-title mb-25">
                                            <h3>Recent Information</h3>
                                        </div>
                                        <div class="rc-post">
                                            <ul>
                                            @php
                                    $notices = DB::table('infos')
                                        ->where('is_active', 1)
                                        ->take(10)->orderBy('id', 'DESC')
                                        ->get();
                                @endphp
                                @foreach ($notices as $notice)
                                                <li>
                                                    <div class="rc-post-thumb">
                                                        <a href="/info/details/{{ $notice->id}}"><img src="{{ asset('/setting/banner/'.$notice->image) }}" style="height: 30px;width: 40px;" alt="img"></a>
                                                    </div>
                                                    <div class="rc-post-content">
                                                        <h5><a href="/info/details/{{ $notice->id}}">{{ $notice->title }}</a></h5>
                                                        <span>{{ $notice->updated_at }}</span>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </div>
            </div>
        </section>
        <!-- slider-area-end -->

     

    </main>
    <!-- main-area-end -->
   <!-- footer -->
   @include('frontend.content.footer')
    <!-- footer-end -->

</body>

</html>

<!--app-->
