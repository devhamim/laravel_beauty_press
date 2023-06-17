@extends('frontend.layouts.app')

@section('content')
    <section class="beautypress-welcome-section beautypress-welcome-version-3 welcome-height-calc-minus">
        <div class="beautypress-welcome-slider-wraper">
            <div class="beautypress-welcome-slider owl-carousel">
                @foreach ($sliders as $slider)
                    <div class="beautypress-welcome-slider-item beautypress-bg"
                        style="background-image: url({{ asset('/setting/banner/' . $slider->image) }});">
                        <div class="container">
                            <div class="beautypress-welcome-content-group">
                                <div class="beautypress-welcome-container">
                                    <div class="beautypress-welcome-wraper">
                                        <h2 class="color-white">{{ $slider->header_title }}</h2>
                                        <h3 class="color-white">{{ $slider->bottom_title }}</h3>
                                        <p class="color-white">The bedding was hardly able to cover it and seemed ready to
                                            slide off any moment. <br> His many legs, pitifully thin compared.</p>
                                        <div class="beautypress-btn-wraper">
                                            <a href="#appointment"
                                                class="xs-btn bg-chocolate round-btn box-shadow-btn">phurchase<span></span></a>
                                            <a href="{{ route('about') }}"
                                                class="xs-btn bg-color-cyan round-btn box-shadow-btn">learn
                                                more<span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="beautypress-black-gradient-overlay"></div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


    <section class="beautypress-our-features-section beautypress-padding-bottom">
        <div class="container">
            <div class="beautypress-section-headinig beautypress-version-2">
                <h2>We are awesome</h2>
                <h3>Our Services</h3>
                <img src="{{ asset('frontend_assets') }}/img/section-heading-separetor.png" alt="">
            </div>
            <div class="row">
                @foreach ($services->slice(0, 6) as $service)
                    <div class="col-md-6 col-xl-4 col-lg-4 mb-4">
                        <div class="beautypress-single-our-feature beautypress-black-gradient-overlay">
                            {{-- <i class="xsicon icon-cosmetics"></i> --}}
                            <img src="{{ asset('/setting/banner/' . $service->service_image) }}" alt="">
                            <div class="beautypress-our-features-content">
                                <h3>{{ $service->title }}</h3>
                                <div class="xs-btn-wraper">
                                    <a href="{{ route('service.view', $service->id) }}"
                                        class="xs-btn round-btn box-shadow-btn bg-color-purple">read more
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


    <section class="beautypress-simple-text-with-img-section bg-color-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xl-6 col-lg-6">
                    <div class="beautypress-simple-text beautypress-watermark-icon">
                        <div class="beautypress-separetor-sub-heading">
                            <h2>Our About</h2>
                        </div>
                        <p>{{ $secrets->first()->secrets_des }}</p>
                        <div class="beautypress-btn-wraper">
                            <a href="{{ route('about') }}" class="xs-btn bg-color-cyan round-btn box-shadow-btn">learn more
                                <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
                    <div class='twentytwenty-container beautypress-before-after'>
                        <img src="{{ asset('backend_img/secrets/' . $secrets->first()->secrets_img_l) }}" alt="">
                        <img src="{{ asset('backend_img/secrets/' . $secrets->first()->secrets_img_r) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="beautypress-pricing-table-section beautypress-padding-bottom  beautypress-bg"
        style="background-image: url(img/pricing-bg.jpg)">
        <div class="container">
            <div class="beautypress-section-headinig beautypress-section-headinig-white">
                <h2>We are awesome</h2>
                <h3>Our Pricing</h3>
                <img src="{{ asset('frontend_assets') }}/img/section-heading-separetor.png" alt="">
            </div>
            <div class="row">
                @foreach ($pricings as $pricing)
                    <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
                        <div class="beautypress-single-pricing-table">
                            <div class="beautypress-pricing-header beautypress-purple-overlay">
                                <img src="{{ asset('backend_img/pricing') }}/{{ $pricing->image }}" alt="">
                                <div class="beautypress-pricing-header-content">
                                    <div class="beautypress-pricing-title">
                                        <h2>{{ $pricing->title }}</h2>
                                    </div>
                                    <div class="beautypress-pricing-price">
                                        <h4>Starting from</h4>
                                        <h5>{{ $pricing->price }}<span>TK</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="beautypress-pricing-footer">
                                {{-- <ul class="beautypress-both-side-list">
                                    <li>Teen's haircut<span>$45</span></li>
                                    <li>Men's haircut<span>$42</span></li>
                                    <li>Children's haircut<span>$56</span></li>
                                    <li>Women's haircut<span>$76</span></li>
                                </ul> --}}
                                <div class="beautypress-btn-wraper">
                                    <a href="#appointment"
                                        class="xs-btn round-btn box-shadow-btn bg-color-purple">Appointment
                                        Now
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="beautypress-black-overlay"></div>
    </section>

    <section class="beautypress-photo-gallery-section beautypress-version-2 beautypress-padding-bottom">
        <div class="container">
            <div class="beautypress-section-headinig beautypress-version-2">
                <h2>We are awesome</h2>
                <h3>Photo Gallery</h3>
                <img src="{{ asset('frontend_assets') }}/img/section-heading-separetor.png" alt="">
            </div>
            <div class="beautypress-photo-gallery-wraper">
                <div class="beautypress-portfolio-nav portfolio-menu">
                    <ul id="filters" class="option-set clearfix" data-option-key="filter">
                        <li><a href="#" data-option-value="*" class="selected">All item</a></li>
                        @foreach ($projects as $project)
                            <li><a href="#"
                                    data-option-value=".{{ $project->header_title }}">{{ $project->header_title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="beautypress-photo-gallery-grid">
                    @foreach ($projects as $project)
                        <div class="beautypress-photo-gallery-grid-item {{ $project->header_title }}">
                            <div class="beautypress-single-photo-gallery">
                                <img src="{{ asset('/setting/banner/' . $project->image) }}" alt="">
                                <div class="beautypress-photo-gallery-content">
                                    <a href="img/gallery-V3-1.jpg"
                                        class="beautypress-image-popup beautypress-iocn-btn full-round-btn bg-color-cyan">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#" class="beautypress-iocn-btn full-round-btn bg-chocolate">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                                <div class="beautypress-gallery-overlay"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="beautypress-photo-gallery-section beautypress-version-2 beautypress-padding-bottom">
        <div class="container">
            <div class="beautypress-section-headinig beautypress-version-2">
                <h2>We are awesome</h2>
                <h3>Videos Gallery</h3>
                <img src="{{ asset('frontend_assets') }}/img/section-heading-separetor.png" alt="">
            </div>
            <div class="beautypress-photo-gallery-wraper">

                <div class="beautypress-photo-gallery-grid">
                    @foreach ($videos as $video)
                        <div class="beautypress-photo-gallery-grid-item {{ $video->video_title }}">
                            <div class="beautypress-single-photo-gallery">
                                <div class="video_gallery">
                                    {!! $video->video_url !!}

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <section class="beautypress-call-to-action-section beautypress-bg parallax-bg" data-parallax="scroll"
        data-image-src="{{ asset('frontend_assets') }}/img/call-to-action.jpg">
        <div class="container">
            <div class="beautypress-call-to-action-content beautypress-version-2">
                <div class="beautypress-content-headinig">
                    <h2 class="color-purple">Need an awesome</h2>
                    <h3>Beauty Service</h3>
                </div>
                <a href="#appointment" class="xs-btn round-btn box-shadow-btn bg-chocolate">get appointment
                    <span></span></a>
            </div>
        </div>
    </section>

    <section
        class="beautypress-booking-section beautypress-bg beautypress-version-2 beautypress-padding-bottom parallax-bg"
        data-parallax="scroll" data-image-src="img/get_appoinment.jpg" id="appointment">
        <div class="container">
            <div class="beautypress-section-headinig beautypress-version-2">
                <h2>We are awesome</h2>
                <h3>Get Appoinment</h3>
                <img src="{{ asset('frontend_Assets') }}/img/section-heading-separetor.png" alt="">
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
                    <div class="beautypress-booking-text-wraper">
                        <div class="beautypress-booking-content-text beautypress-border beautypress-version-3">
                            <div class="beautypress-booking-text">
                                <h2>Time Shedule</h2>
                                <h3>Working Hours</h3>
                                <div class="beautypress-icon-bg-text">
                                    <p> It showed a lady fitted out with a fur hat and fur boa who sat upright, raising
                                        a heavy fur muff that covered the whole of her lower arm towards the viewer.</p>
                                </div>
                                @foreach ($shedules as $shedule)
                                    @if ($shedule->time_form != null)
                                        <p>{{ $shedule->shedule_form }} – {{ $shedule->shedule_to }}
                                            <span>{{ $shedule->time_form }} – {{ $shedule->time_to }}</span>
                                        </p>
                                    @else
                                        <p>{{ $shedule->shedule_form }} <span class="text-danger">Closed</span></p>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
                    <div class="beautypress-booking-form-wraper">
                        <form action="{{ route('appoinment.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="action" value="send_appointment_form" />
                            <div class="alert hidden" id="beautypress-form-msg"></div>
                            <div class="beautypress-service-and-date">
                                <h2>Service and Date</h2>
                                <div class="beautypress-select">
                                    <div class="input-group">
                                        <select name="appointment_service" id="appointment-service" class="form-control">
                                            <option value="">Select your service</option>
                                            @foreach ($services as $service)
                                                <option value="{{ $service->id }}">{{ $service->title }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="beautypress-spilit-container">
                                    <div class="beautypress-date-select beautypress-select">
                                        <div class="input-group">
                                            <input type="text" id="appointment-date" class="form-control datepicker"
                                                name="appointment_date" placeholder="Date Shedule">
                                        </div>
                                    </div>
                                    <div class="beautypress-select">
                                        <div class="input-group">
                                            <select name="appointment_time" id="appointment-time" class="form-control">
                                                <option value="">Time Shedule</option>
                                                <option value="12:00 AM">12:00 AM</option>
                                                <option value="12:30 AM">12:30 AM</option>
                                                <option value="01:00 AM">01:00 AM</option>
                                                <option value="01:30 AM">01:30 AM</option>
                                                <option value="02:00 AM">02:00 AM</option>
                                                <option value="02:30 AM">02:30 AM</option>
                                                <option value="03:00 AM">03:00 AM</option>
                                                <option value="03:30 AM">03:30 AM</option>
                                                <option value="04:00 AM">04:00 AM</option>
                                                <option value="04:30 AM">04:30 AM</option>
                                                <option value="05:00 AM">05:00 AM</option>
                                                <option value="05:30 AM">05:30 AM</option>
                                                <option value="06:00 AM">06:00 AM</option>
                                                <option value="06:30 AM">06:30 AM</option>
                                                <option value="07:00 AM">07:00 AM</option>
                                                <option value="07:30 AM">07:30 AM</option>
                                                <option value="08:00 AM">08:00 AM</option>
                                                <option value="08:30 AM">08:30 AM</option>
                                                <option value="09:00 AM">09:00 AM</option>
                                                <option value="09:30 AM">09:30 AM</option>
                                                <option value="10:00 AM">10:00 AM</option>
                                                <option value="10:30 AM">10:30 AM</option>
                                                <option value="11:00 AM">11:00 AM</option>
                                                <option value="11:30 AM">11:30 AM</option>
                                                <option value="12:00 PM">12:00 PM</option>
                                                <option value="12:30 PM">12:30 PM</option>
                                                <option value="01:00 PM">01:00 PM</option>
                                                <option value="01:30 PM">01:30 PM</option>
                                                <option value="02:00 PM">02:00 PM</option>
                                                <option value="02:30 PM">02:30 PM</option>
                                                <option value="03:00 PM">03:00 PM</option>
                                                <option value="03:30 PM">03:30 PM</option>
                                                <option value="04:00 PM">04:00 PM</option>
                                                <option value="04:30 PM">04:30 PM</option>
                                                <option value="05:00 PM">05:00 PM</option>
                                                <option value="05:30 PM">05:30 PM</option>
                                                <option value="06:00 PM">06:00 PM</option>
                                                <option value="06:30 PM">06:30 PM</option>
                                                <option value="07:00 PM">07:00 PM</option>
                                                <option value="07:30 PM">07:30 PM</option>
                                                <option value="08:00 PM">08:00 PM</option>
                                                <option value="08:30 PM">08:30 PM</option>
                                                <option value="09:00 PM">09:00 PM</option>
                                                <option value="09:30 PM">09:30 PM</option>
                                                <option value="10:00 PM">10:00 PM</option>
                                                <option value="10:30 PM">10:30 PM</option>
                                                <option value="11:00 PM">11:00 PM</option>
                                                <option value="11:30 PM">11:30 PM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="beautypress-personal-information">
                                <h2>Personal Information</h2>
                                <div class="beautypress-spilit-container">
                                    <div class="form-group first-name-group">
                                        <input type="text" name="name" class="form-control" id="first-name"
                                            placeholder="First Name....">
                                    </div>
                                    <div class="form-group email-group">
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Email Address....">
                                    </div>
                                </div>
                                <div class="form-group phone-group">
                                    <input type="number" name="number" class="form-control" id="phone"
                                        placeholder="Phone Number....">
                                </div>
                                <div class="form-group massage-gropu">
                                    <textarea name="message" class="form-control" rows="5" id="appointment-comment"
                                        placeholder="Enter Message...."></textarea>
                                </div>
                                <div class="form-group button-group">
                                    <input type="submit" name="submit" value="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
