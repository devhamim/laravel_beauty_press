<footer class="beautypress-footer-section beautypress-version-3">
    <div class="container">
        <div class="beautypress-footer-content">
            <div class="beautypress-footer-logo">
                <a href="index-2.html">
                    <img src="{{ asset(get_setting('frontend_logo_footer')) }}" alt="">
                </a>
            </div>
            {{-- <div class="beautypress-subscribe-wraper">
                <h3>Subscribe For More Updates</h3>
                <form action="#" method="POST" class="mc-form">
                    <div class="beautypress-subscribe">
                        <input type="email" placeholder="Enter your email address....." id="mc-email">
                        <input type="submit" value="subscribe" class="beautypress-sub bg-color-cyan">
                        <label for="mc-email"></label>
                    </div>
                </form>
            </div> --}}
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
                    <div class="beautypress-single-footer">
                        <p>{{ get_setting('footer_description') }}</p>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
                    <div class="beautypress-single-footer beautypress-single-footer-group">
                        {{-- <p>Mon-Fri: 9 AM – 6 PM</p>
                        <p>Saturday: 9 AM – 4 PM</p>
                        <p>Sunday: Closed</p> --}}
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
                    <div class="beautypress-single-footer beautypress-single-footer-group">
                        <p>{{ get_setting('office_address') }}</p>
                        <p>Email: <a href="https://demo.xpeedstudio.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="4f262129200f36203a3d3c263b2a612c2022">{{ get_setting('office_email') }}</a>
                        </p>
                        <p>{{ get_setting('office_phone') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="beautypress-copyright-content">
        <div class="container">
            <div class="beautypress-copyright-text">
                <p><a href="https://xpeedstudio.com/" class="color-purple"></a>{{ get_setting('copyright_text') }}</p>
            </div>
        </div>
    </div>
</footer>

<script data-cfasync="false" src="{{ asset('frontend_assets/cloudflare-static/email-decode.min.js') }}"></script>
<script src="{{ asset('frontend_assets') }}/js/jquery-3.2.1.min.js"></script>
<script src="{{ asset('frontend_assets') }}/js/plugins.js"></script>
<script src="{{ asset('frontend_assets') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('frontend_assets') }}/js/bootstrap-datepicker.min.js"></script>
<script src="{{ asset('frontend_assets') }}/js/isotope.pkgd.min.js"></script>
<script src="{{ asset('frontend_assets') }}/js/jquery.ajaxchimp.min.js"></script>
<script src="{{ asset('frontend_assets') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('frontend_assets') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('frontend_assets') }}/js/appear.js"></script>
<script src="{{ asset('frontend_assets') }}/js/spectragram.min.js"></script>
<script src="{{ asset('frontend_assets') }}/js/themeSwither.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>
<script src="{{ asset('frontend_assets') }}/js/main.js"></script>
</body>

<!-- Mirrored from demo.xpeedstudio.com/html/beautypress/index-v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 May 2023 07:01:56 GMT -->

</html>
