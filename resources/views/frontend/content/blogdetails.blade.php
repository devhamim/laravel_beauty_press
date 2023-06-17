@extends('frontend.layouts.app')
@section('content')
    <style>
        .gallery {
            width: 100%;
            margin: auto;
            border-radius: 3px;
            overflow: hidden;
        }

        .img-c {
            width: 215px;
            height: 200px;
            float: left;
            position: relative;
            overflow: hidden;
        }

        .img-w {
            position: relative;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            cursor: pointer;
            transition: transform ease-in-out 300ms;
        }

        .img-w img {
            display: none;
        }

        .img-c {
            transition: width ease 400ms, height ease 350ms, left cubic-bezier(0.4, 0, 0.2, 1) 420ms, top cubic-bezier(0.4, 0, 0.2, 1) 420ms;
        }

        .img-c:hover .img-w {
            transform: scale(1.08);
            transition: transform cubic-bezier(0.4, 0, 0.2, 1) 450ms;
        }

        .img-c.active {
            width: 1000px !important;
            height: 70vw !important;
            position: absolute;
            z-index: 2;

        }

        .img-c.postactive {
            position: absolute;
            z-index: 2;
            pointer-events: none;
        }

        .img-c.active.positioned {
            left: 0 !important;
            top: 0 !important;
            transition-delay: 50ms;
        }
    </style>
    {{-- @dd($blog); --}}
    <main class="xs-main">
        <section class="xs-banner-inner-section parallax-window"
            style="background-image: url({{ asset('/setting/banner/' . $blog->banner) }});">
            <div class="xs-black-overlay"></div>
            <div class="container">
                <div class="color-white xs-inner-banner-content">
                    <h2>{{ $blog->banner_text }}</h2>
                    {{-- <p>{{ $blog->banner_text }}</p> --}}
                </div>
            </div>
        </section>
        <div class="xs-content-section-padding xs-blog-single">
            <div class="container" style="max-width: 90%;">
                <div class="row">
                    <div class="col-md-12 col-lg-8">

                        <article class="post format-standard hentry xs-blog-post-details">
                            <div class="post-media post-image">
                                <img src="{{ asset('/setting/banner/' . $blog->detail_img) }}" class="img-responsive"
                                    alt="">
                            </div>
                            <div class="post-body xs-border xs-padding-40">
                                <div class="entry-header">
                                    <div class="post-meta row">
                                        <div class="col-md-2 xs-padding-0">
                                            <span
                                                class="post-meta-date"><b>{{ date('d', strtotime($blog->created_at)) }}</b>
                                                {{ date('M', strtotime($blog->created_at)) }}</span>
                                        </div>
                                        <div class="col-md-10 d-flex align-items-end xs-post-meta-list">
                                            <span class="post-cat">
                                                <i class="fa fa-user"></i><a href="#">{{ $blog->user_name }} </a>
                                            </span>
                                            <span class="tags-links">
                                                <i class="fa fa-tags"></i>
                                                {{ $blog->categories }}
                                            </span>
                                            {{-- <span class="post-comment">
                                                <i class="fa fa-envelope-o"></i>
                                                <a href="#">39 Comments</a>
                                            </span> --}}
                                        </div>
                                    </div>
                                    <h2 class="entry-title xs-post-entry-title">
                                        {{-- <a href="#">{{ $blog->title }}</a> --}}
                                        {{ $blog->title }}

                                    </h2>
                                </div>
                                <div class="entry-content">
                                    <p class="paragraph">{{ $blog->details }} </p>
                                </div>
                            </div>
                        </article>

                    </div>
                    <div class="col-md-12 col-lg-4">

                        <div class="sidebar sidebar-right">

                            <div class="widget widget_categories xs-sidebar-widget">
                                <h3 class="widget-title">Categories</h3>
                                <ul class="xs-side-bar-list">
                                    @foreach ($count as $cat => $value)
                                        <li><a
                                                href="#"><span>{{ $cat }}</span><span>({{ $value }})</span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget widget_call_to_action">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('/setting/banner/' . $blog->promotion_img) }}" alt="">
                                </a>
                            </div>

                            <div class="widget widget_categories xs-sidebar-widget">
                                <h3 class="widget-title">Archives</h3>
                                <ul class="xs-side-bar-list">
                                    @foreach ($archive as $arc => $val)
                                        <li><a
                                                href="#"><span>{{ $arc }}</span><span>({{ $val }})</span></a>
                                        </li>
                                    @endforeach


                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
