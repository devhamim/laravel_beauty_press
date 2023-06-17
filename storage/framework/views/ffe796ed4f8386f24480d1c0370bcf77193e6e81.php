<?php $__env->startSection('content'); ?>
    <section class="beautypress-inner-welocme-section beautypress-bg parallax-bg" data-parallax="scroll"
        data-image-src="<?php echo e(asset('backend_img/contact')); ?>/<?php echo e($contact_banner->first()->contact_img); ?>">
        <div class="beautypress-black-overlay"></div>
        <div class="container">
            <div class="beautypress-inner-welcome-content">
                <img src="img/inner-welcome-icon.png" alt="">
                <h1 class="color-white">contact</h1>
                <p class="color-white"><?php echo e($contact_banner->first()->contact_title); ?></p>
            </div>
            <div class="beautypress-inner-welcome-footer-content">
                <ul class="beautypress-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">contact</a></li>
                </ul>
            </div>
        </div>
    </section>


    <section class="beautypress-contact-us-section">
        <div class="container">
            <div class="beautypress-contact-wraper beautypress-version-2">
                <div class="row">
                    <div class="col-sm-12 col-lg-8 col-xl-8">
                        <div class="beautypress-contact-form">
                            <h2>Get In Touch</h2>
                            <form action="<?php echo e(route('contact.submit')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="beautypress-spilit-container">
                                    <div class="input-group">
                                        <input type="text" name="name" placeholder="Your name">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    </div>
                                    <div class="input-group">
                                        <input type="email" name="email" placeholder="Your email">
                                        <div class="input-group-addon"><i class="xsicon icon-envelope5"></i></div>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="subject" placeholder="Subject">
                                    <div class="input-group-addon"></div>
                                </div>
                                <div class="input-group">
                                    <textarea name="comments" cols="30" rows="10" placeholder="Your comments"></textarea>
                                    <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-xl-4">
                        <div class="beautypress-contact-details bg-color-purple">
                            <div class="beautypress-separetor-sub-heading beautypress-version-2">
                                <h2>Contact Us</h2>
                            </div>
                            <ul class="beautypress-icon-with-text">
                                <li><i class="fa fa-map-marker"></i><?php echo e(get_setting('office_address')); ?></li>
                                <li><i class="xsicon icon-phone3"></i>+91 00 00 00 00</li>
                                <li><i class="xsicon icon-envelope5"></i><a
                                        href="https://demo.xpeedstudio.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="137e727a7f53777c7e727a7d3d707c7e"><?php echo e(get_setting('office_email')); ?></a>
                                </li>
                                <li><a href="<?php echo e(get_setting('facebook')); ?>" style="display: flex; align-items: center">
                                        <div>
                                            <i class="fa fa-facebook" style="color: #fff"></i>
                                        </div>
                                        <div class="" style="margin-left: 30%; color: #fff">
                                            <span>facebok.com</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="beautypress_maps"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php7 laravel\Anandadhara\resources\views/frontend/content/contact.blade.php ENDPATH**/ ?>