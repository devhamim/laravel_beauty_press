@extends('frontend.layouts.app')

@section('content')
    <section class="beautypress-inner-welocme-section beautypress-bg parallax-bg" data-parallax="scroll"
        data-image-src="{{ asset('backend_img/blogs') }}/{{ $blogs->first()->blog_ban_img }}">
        <div class="beautypress-black-overlay"></div>
        <div class="container">
            <div class="beautypress-inner-welcome-content">
                <img src="img/inner-welcome-icon.png" alt="">
                <h1 class="color-white">Blog Post</h1>
                <p class="color-white">One morning, when Gregor Samsa woke from troubled dreams, he found himself
                    transformed in his bed into a horrible vermin. He lay on his armour-like back.</p>
            </div>
            <div class="beautypress-inner-welcome-footer-content">
                <ul class="beautypress-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">blog</a></li>
                </ul>
            </div>
        </div>
    </section>


    <div class="beautypress-newsfeed-section beautypress-no-bg section-padding">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-md-12 col-sm-12 col-xl-4 col-lg-4">
                        <div class="beautypress-single-newsletter mb-30">
                            <div class="beautypress-newsfeed-header beautypress-black-gradient-overlay">
                                <img src="{{ asset('backend_img/blogs') }}/{{ $blog->blog_img }}" alt="">
                                {{-- <div class="beautypress-newsfeed-header-content">
                                    <div class="beautypress-newsfeed-img">
                                        <img src="img/avatar-1.jpg" alt="">
                                        <a href="#">By Zulia</a>
                                    </div>
                                    <div class="beautypress-dates">
                                        <p class="bg-color-purple">27<strong>Jan</strong></p>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="beautypress-newsfeed-footer">
                                <a href="{{ route('blog.details', $blog->id) }}">{{ $blog->blog_title }}</a>
                                <p>{{ $blog->blog_sort }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
