@extends('frontend.layouts.app')
@section('content')
    <section class="xs-banner-inner-section parallax-window mrt"
        style="background-image:url(../../{{ get_setting('work_image_1') }})">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2>Activities</h2>
                <p>{{ get_setting('work_text_header') }}</p>
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

                    @foreach ($activities as $activitie)
                        <div class="col-md-6 col-lg-4">
                            <div class="xs-single-causes text-center" style="border: 1px solid #fff;border-radius: 10px;">
                                <img src="{{ asset('/setting/banner/' . $activitie->image) }}" style="height: 250px; alt="">
                                <div class="xs-causes-footer" style="height: 200px;">
                                    <h2 class="color-light-red">{{ $activitie->title }}</h2>
                                    <p>{{ $activitie->sort_para }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endsection
