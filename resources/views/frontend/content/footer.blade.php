<footer>
    <div class="footer-wrap pt-50" data-background="img/bg/footer_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-widget mb-50">
                        <div class="footer-logo mb-35">
                            <a href="{{ route('frontend.index') }}"><img
                                    src="{{ asset(get_setting('frontend_logo_footer')) }}" style="height: 108px"
                                    alt="img"></a>
                        </div>
                        <div class="footer-text">
                            <p><strong>Head Office</strong></p>
                            <p>{{ get_setting('office_address') }}</p>
                            <p><strong>Email</strong></p>
                            <p>{{ get_setting('office_email') }}</p>
                            <p><strong>Phone</strong></p>
                            <p>{{ get_setting('office_phone') }}</p>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-30">
                            <h5>CUSTOMER</h5>
                        </div>
                        <div class="fw-link">
                            <ul>
                                @php
                                    $footer_lefts = DB::table('pages')
                                        ->where('footer_left', 2)
                                        ->get();
                                @endphp
                                @foreach ($footer_lefts as $footer_left)
                                    <li><a href="/page/{{ $footer_left->slug }}"><i
                                                class="fas fa-caret-right"></i>{{ $footer_left->title }}</a></li>
                                    <!-- <li><a href="#"><i class="fas fa-caret-right"></i> Delivery Information</a>
                                    </li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Terms &amp;
                                            Conditions</a></li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Privacy Policy</a></li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Refund Policy</a></li> -->
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-30">
                            <h5>INFORMATION</h5>
                        </div>
                        <div class="fw-link">
                            <ul>
                                @php
                                    $footer_rights = DB::table('pages')
                                        ->where('footer_right', 3)
                                        ->get();
                                @endphp
                                @foreach ($footer_rights as $footer_right)
                                    <li><a href="/page/{{ $footer_right->slug }}"><i
                                                class="fas fa-caret-right"></i>{{ $footer_right->title }}</a>
                                    </li>
                                    <!-- <li><a href="#"><i class="fas fa-caret-right"></i> Delivery Information</a>
                                    </li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Terms &amp;
                                            Conditions</a></li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Privacy Policy</a></li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Refund Policy</a></li> -->
                                @endforeach
                                <!-- <li><a href="#"><i class="fas fa-caret-right"></i> About us</a></li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Delivery Information</a>
                                    </li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Terms &amp;
                                            Conditions</a></li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Privacy Policy</a></li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Refund Policy</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-30">
                            <h5>MOBILE APPS</h5>
                        </div>
                        <div class="f-support-content mb-30">
                            <a href="#" class="f-download-btn"><img
                                    src="{{ asset('assets/images/images-f_download_btn01.png') }}" alt="img"></a>
                            <a href="#" class="f-download-btn"><img
                                    src="{{ asset('assets/images/images-f_download_btn02.png') }}" alt="img"></a>
                        </div>
                        <div class="fw-title mb-30">
                            <h5>SOCIAL LINKS</h5>
                        </div>
                        <div class="f-support-content">
                            <div class="footer-social">
                                <ul>
                                    <li><a href="{{ get_setting('facebook') }}"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="{{ get_setting('twitter') }}"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li><a href="{{ get_setting('linkedin') }}"><i class="fab fa-pinterest-p"></i></a>
                                    </li>
                                    <li><a href="{{ get_setting('youtube') }}"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p>{{ get_setting('copyright_text') }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
