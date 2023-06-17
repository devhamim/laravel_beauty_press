@extends('frontend.layouts.app')
@section('content')
    <section class="xs-banner-inner-section parallax-window mrt"
        style="background-image:url(../../{{ get_setting('about_image_1') }})">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2>Brands</h2>
                <p>{{ get_setting('about_text_bottom') }}</p>
                <ul class="xs-breadcumb">
                    <li class="badge badge-pill badge-primary"><a href="index.html" class="color-white"> Home /</a> Causes</li>
                </ul>
            </div>
        </div>
    </section>

    <main class="xs-main">

        <section class="xs-content-section-padding">
            <div class="container">
                <div class="row">
                    @foreach ($brands as $brand)
                        <div class="col-md-6 col-lg-3">
                            <div class="xs-single-causes text-center p-5"
                                style="border: 1px solid #fff;border-radius: 10px;">
                                <img src="{{ asset('/setting/banner/' . $brand->logo) }}" style="height: 80px;"
                                    alt="">
                                {{-- <div class="xs-causes-footer">
                                    <h2 class="color-light-red">{{ $brand->title }}</h2>
                                </div> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endsection
