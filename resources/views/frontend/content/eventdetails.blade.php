@extends('frontend.layouts.app')
@section('content')
    <section class="xs-banner-inner-section parallax-window mrt"
        style="background-image:url(../../{{ get_setting('bottombanner_image') }})">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2>Event</h2>
                <p>{{ $event->title }}</p>
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
                    <div class="col-md-12">
                        <div class="xs-event-banner">
                            <img src="{{ asset('/setting/banner/' . $event->single_event_banner) }}" alt="">
                        </div>
                        <div class="row">
                            <div class="col-lg-8 xs-event-wraper">
                                <div class="xs-event-content">
                                    <h4>Event Detalis</h4>
                                    <p>{!! $event->description !!}</p>
                                </div>

                                <div class="xs-horizontal-tabs">

                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#facilities"
                                                role="tab">Facilities</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#mapLocation" role="tab">Map
                                                Location</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#contactUs" role="tab">Contact
                                                us</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="facilities" role="tabpanel">
                                            <p>{!! $event->facility !!}</p>

                                        </div>
                                        <div class="tab-pane" id="mapLocation" role="tabpanel">
                                            <div id="">{!! $event->map !!}</div>
                                        </div>
                                        <div class="tab-pane" id="contactUs" role="tabpanel">
                                            <div class="xs-contact-form-wraper">
                                                <form action="/event/submit" method="POST" class="xs-contact-form">
                                                    @csrf
                                                    <div class="input-group">
                                                        <input type="text" name="name" id="xs-name"
                                                            class="form-control" placeholder="Enter Your Name.....">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text"><i class="fa fa-user"></i></div>
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="email" name="email" id="xs-email"
                                                            class="form-control" placeholder="Enter Your Email.....">
                                                        <input type="hidden" name="subject" value="{{ $event->title }}">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text"><i class="fa fa-envelope-o"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="input-group massage-group">
                                                        <textarea name="massage" placeholder="Enter Your Message....." id="xs-massage" class="form-control" cols="30"
                                                            rows="10"></textarea>
                                                        <div class="input-group-append">
                                                            <div class="input-group-text"><i class="fa fa-pencil"></i></div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-success" type="submit">submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row xs-mb-60">
                                    <div class="col-md-6 xs-about-feature">
                                        <h3>{{ $event->event_title_1 }}</h3>
                                        <p>{{ $event->eventMission }}</p>
                                    </div>
                                    <div class="col-md-6 xs-about-feature">
                                        <h3>{{ $event->event_title_2 }}</h3>
                                        <p>{{ $event->eventVission }}</p>
                                    </div>
                                </div>
                                <div class="xs-about-feature xs-mb-30">
                                    <h3>{{ $event->event_title_3 }}</h3>
                                    <p class="lead">{{ $event->ourVission }}</p>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-md-4">
                                        <div class="xs-service-promo">
                                            <span class="icon-water color-orange"></span>
                                            <h5>Pure Water <br>For Poor People</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="xs-service-promo">
                                            <span class="icon-groceries color-red"></span>
                                            <h5>Healty Food <br>For Poor People</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="xs-service-promo">
                                            <span class="icon-open-book color-green"></span>
                                            <h5>Pure Education <br>For Every Children</h5>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="col-lg-4">

                                <div class="xs-event-schedule-widget">
                                    <div class="media xs-event-schedule">
                                        <div class="d-flex xs-evnet-meta-date">
                                            <span
                                                class="xs-event-date">{{ Carbon\Carbon::parse($event->date)->format('d') }}</span>
                                            <span
                                                class="xs-event-month">{{ Carbon\Carbon::parse($event->date)->format('F') }}</span>
                                        </div>
                                        <div class="media-body">
                                            <h5>{{ $event->title }}</h5>
                                        </div>
                                    </div>
                                    <ul class="list-group xs-list-group">
                                        <li class="d-flex justify-content-between">
                                            Organized by:
                                            <span>{{ $event->organized_by }}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            Start:
                                            <span>{{ $event->start }}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            Venue:
                                            <span>{{ $event->venue }}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            Phone:
                                            <span>{{ $event->phone }}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            Email:
                                            <span>{{ $event->email }}</span>
                                        </li>
                                    </ul>
                                </div>
                                {{-- <div class="xs-countdown-timer timer-style-2 xs-mb-30" data-countdown="2020/02/07"></div> --}}
                                @php
                                    $sponsors = DB::table('sponsors')
                                        ->where('event_id', $event->id)
                                        ->where('is_active', 1)
                                        ->get();
                                @endphp
                                <div class="xs-event-schedule-widget">
                                    <h3 class="widget-title">Event Sponsor</h3>
                                    <ul class="xs-event-sponsor clearfix">

                                        @foreach ($sponsors as $sponsor)
                                            @php
                                                $sponsorbrands = DB::table('brands')
                                                    ->where('id', $sponsor->sponsor_id)
                                                    ->first();
                                            @endphp
                                            <li><a href="#"><img
                                                        src="{{ asset('/setting/banner/' . $sponsorbrands->logo) }}"
                                                        alt=""></a></li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
