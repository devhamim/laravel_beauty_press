@extends('frontend.layouts.app')

@section('content')
    <section class="beautypress-inner-welocme-section beautypress-bg parallax-bg" data-parallax="scroll"
        data-image-src="{{ asset('setting/banner') }}/{{ $services->first()->ban_img }}">
        <div class="beautypress-black-overlay"></div>
        <div class="container">
            <div class="beautypress-inner-welcome-content">
                <img src="img/inner-welcome-icon.png" alt="">
                <h1 class="color-white">Service Details</h1>
                <p class="color-white">{{ $services->first()->ban_title }}</p>
            </div>
            <div class="beautypress-inner-welcome-footer-content">
                <ul class="beautypress-breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="#">Service Details</a></li>
                </ul>
            </div>
        </div>
    </section>


    <section class="beautypress-blog-post-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-12 col-lg-12">
                    <div class="beautypress-blog-post-group">
                        <div class="beautypress-blog-post-wraper text-center">
                            <img src="{{ asset('setting/banner') }}/{{ $services->first()->service_image }}" alt="">
                            <div class="beautypress-tag">
                                @foreach ($services as $service)
                                    <a href="{{ route('service.view', $service->id) }}">{{ $service->service_title }}</a>
                                @endforeach
                            </div>
                            <h2>{{ $services->first()->service_title }}</h2>
                            <p>{{ $services->first()->service_details }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
