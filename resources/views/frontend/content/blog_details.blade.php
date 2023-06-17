@extends('frontend.layouts.app')

@section('content')
    <section class="beautypress-inner-welocme-section beautypress-bg parallax-bg" data-parallax="scroll"
        data-image-src="{{ asset('backend_img/blogs') }}/{{ $blogs_details->first()->blog_ban_img }}">
        <div class="beautypress-black-overlay"></div>
        <div class="container">
            <div class="beautypress-inner-welcome-content">
                <img src="img/inner-welcome-icon.png" alt="">
                <h1 class="color-white">Blog Details</h1>
                <p class="color-white">{{ $blogs_details->first()->blog_title }}</p>
            </div>
            <div class="beautypress-inner-welcome-footer-content">
                <ul class="beautypress-breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="#">Blog Details</a></li>
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
                            <img src="{{ asset('backend_img/blogs') }}/{{ $blogs_details->first()->blog_img }}"
                                alt="">
                            <div class="beautypress-tag">

                            </div>
                            <h2>{{ $blogs_details->first()->blog_title }}</h2>
                            <p>{{ $blogs_details->first()->blog_long }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
