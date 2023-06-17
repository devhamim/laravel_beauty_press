@extends('frontend.layouts.app')

@section('content')
    <section class="beautypress-inner-welocme-section beautypress-bg parallax-bg" data-parallax="scroll"
        data-image-src="{{ asset('backend_img/about') }}/{{ $about_banner_imgs->first()->about_img }}">
        <div class="beautypress-black-overlay"></div>
        <div class="container">
            <div class="beautypress-inner-welcome-content">
                <img src="{{ asset('frontend_assets') }}/img/inner-welcome-icon.png" alt="">
                <h1 class="color-white">About Us</h1>
                <p class="color-white">{{ $about_banner_imgs->first()->about_title }}</p>
            </div>
            <div class="beautypress-inner-welcome-footer-content">
                <ul class="beautypress-breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="beautypress-team-section section-padding">
        <div class="container">
            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
                        <div class="beautypress-single-team beautypress-purple-overlay">
                            <img src="{{ asset('backend_img/about') }}/{{ $team->team_img }}" alt="">
                            <div class="beautypress-team-content">
                                <div class="beautypress-team-person-details">
                                    <h3>{{ $team->name }}</h3>
                                    <h4>{{ $team->position }}</h4>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="beautypress-shop-call-to-action-section beautypress-bg parallax-bg" data-parallax="scroll"
        data-image-src="img/shop-open-img.jpg">
        <div class="container">
            <div class="beautypress-shop-call-to-action-content">
                <h2 class="color-black"><strong>Welcome</strong> to our barbar shop</h2>
                <div class="beautypress-spilit-container">
                    <div class="beautypress-shop-text">
                        <p>Skilled and up to date with the latest hair styles, hair cuts, and color trends, our small
                            team of hair professionals are ready to help make you feel and look great.</p>
                        {{-- <div class="beautypress-btn-wraper">
                            <a href="#" class="xs-btn round-btn box-shadow-btn bg-color-purple purple-2">read
                                more <span></span></a>
                        </div> --}}
                    </div>
                    <div class="beautypress-shop-shedule">
                        <h3 class="color-black">Time Shedule</h3>
                        @foreach ($shedules as $shedule)
                            @if($shedule->time_form != null)
                                <p>{{ $shedule->shedule_form }} – {{ $shedule->shedule_to }} <span>{{ $shedule->time_form }} – {{ $shedule->time_to }}</span></p>
                            @else
                                <p>{{ $shedule->shedule_form }} <span class="text-danger">Closed</span></p>
                            @endif
                        @endforeach

                    </div>
                </div>
                <div class="beautypress-watermark-big-icon"></div>
            </div>
        </div>
    </section>

@endsection
