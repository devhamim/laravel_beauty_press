@extends('frontend.layouts.app')
@section('content')
    <style>
        .breadcrumb::after {
            border-width: 74px 25px 0 0 !important;
        }

        .breadcrumb::before {
            border-width: 0 0 74px 25px !important;
        }

        .xs-pricing-header h2 {
            font-size: 3.14286em !important;
            font-weight: 500 !important;
        }
    </style>
    <!-- main-area -->

    <section class="xs-banner-inner-section parallax-window mrt"
        style="background-image:url(../../{{ get_setting('donates_image_1') }})">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2>Donate Now</h2>
                <ul class="xs-breadcumb">
                    <li class="badge badge-pill badge-primary"><a class="color-white"> Home /</a> Donate</li>
                </ul>
            </div>
        </div>
    </section>

    <main class="xs-main">

        <div class="xs-newsletter-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="xs-newsletter-content text-center"
                            style=" background-color: {{ get_setting('donates_title_bg_color') }};">

                            <h2>{{ get_setting('donates_text_header') }}</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="xs-content-section-padding">
            <div class="container">
                <div class="row col-md-11 mx-auto">
                    <div class="col-lg-3">
                        <ul class="nav flex-column xs-nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <li class="nav-item">
                                <a class="nav-link active show" data-toggle="pill" href="#credit">Credit Card</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#bank">Bank Transfer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#cash">Cash</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane slideUp active show" id="credit" role="tabpanel">
                                <div class="row">

                                    @foreach ($donates as $donate)
                                        <div class="col-md-6 col-lg-4" style="padding-bottom: 10px;">
                                            <div class="xs-single-pricing-table">
                                                <div class="xs-pricing-header"
                                                    style="background-image:url(../../{{ 'setting/banner/' . $donate->image }});height: 250px;";>
                                                    <h2>
                                                        $ {{ $donate->title }}
                                                    </h2>
                                                    <br>
                                                    <a href="{{ $donate->link }}" target="_blank" class="btn btn-primary">
                                                        Donate Now
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane slideUp" id="bank" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="xs-tab-content">

                                            <p>{!! get_setting('bank') !!}</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane slideUp" id="cash" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="xs-tab-content">

                                            <p>{!! get_setting('cash') !!}</p>
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
