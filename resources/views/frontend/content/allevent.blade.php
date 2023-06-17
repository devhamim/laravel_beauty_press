@extends('frontend.layouts.app')
@section('content')
    <section class="xs-banner-inner-section parallax-window mrt"
        style="background-image:url(../../{{ get_setting('bottombanner_image') }})">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2>Events</h2>
                {{-- <p>{{ get_setting('bottombanner_text_bottom') }}</p> --}}
                <ul class="xs-breadcumb">
                    <li class="badge badge-pill badge-primary"><a href="index.html" class="color-white"> Home /</a> Events</li>
                </ul>
            </div>
        </div>
    </section>

    <main class="xs-main">

        <section class="xs-content-section-padding">
            <div class="container">
                <div class="row">
                    @foreach ($events as $event)
                        <div class="col-lg-6 row xs-single-event event-green">
                            <div class="col-md-5">
                                <div class="xs-event-image">
                                    <img src="{{ asset('/setting/banner/' . $event->image) }}" style="height: 220px;"
                                        alt="">
                                    <div class="xs-entry-date">
                                        <span
                                            class="entry-date-day">{{ Carbon\Carbon::parse($event->date)->format('d') }}</span>
                                        <span
                                            class="entry-date-month">{{ Carbon\Carbon::parse($event->date)->format('F') }}</span>
                                        <span class="entry-date-month">
                                            @if ($event->status == 1)
                                                Upcomming..
                                            @else
                                                Completed
                                            @endif
                                        </span>
                                    </div>
                                    <div class="xs-black-overlay"></div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="xs-event-content">
                                    <a href="/event/details/{{ $event->id }}">{{ $event->title }}</a>
                                    <p>{{ $event->sort_para }}</p>
                                    {{-- <div class="xs-countdown-timer" data-countdown="2020/01/24"></div> --}}
                                    <a href="/event/details/{{ $event->id }}" class="btn btn-primary">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </section>
    @endsection
