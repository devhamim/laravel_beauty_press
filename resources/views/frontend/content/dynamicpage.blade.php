@extends('frontend.layouts.app')
@section('content')
    <style>
        .breadcrumb::after {
            border-width: 74px 25px 0 0 !important;
        }

        .breadcrumb::before {
            border-width: 0 0 74px 25px !important;
        }
    </style>
    <!-- main-area -->

    <section class="xs-banner-inner-section parallax-window mrt"
        style="background-image: url({{ asset('/setting/banner/' . $page->image) }});">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2>{{ $page->title }}</h2>

                <ul class="xs-breadcumb">
                    <li class="badge badge-pill badge-primary"><a href="index.html" class="color-white"> Home /</a>
                        {{ $page->title }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- slider-area -->
    <section class="banner">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    {!! $page->description !!}
                </div>

            </div>
        </div>
    </section>
    <!-- slider-area-end -->
@endsection
