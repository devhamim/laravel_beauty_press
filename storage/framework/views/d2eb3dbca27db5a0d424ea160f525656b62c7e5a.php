<footer class="xs-footer-section ">
    <div class="container">
        <div class="xs-footer-top-layer">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-widget xs-pr-20">
                    <a href="/" class="xs-footer-logo footmobile">
                        <img src="<?php echo e(asset(get_setting('frontend_logo_footer'))); ?>" style="height: 110px;" alt="">
                    </a>
                    <p><?php echo e(get_setting('footer_description')); ?></p>
                </div>
                
                <div class="col-lg-4 col-md-6 footer-widget">
                    <h3 class="widget-title">Contact Us</h3>
                    <ul class="xs-info-list">
                        <li><i class="fa fa-home bg-red"></i><?php echo e(get_setting('office_address')); ?></li>
                        <li><i class="fa fa-phone bg-green"></i><?php echo e(get_setting('office_phone')); ?></li>
                        <li><i class="fa fa-envelope-o bg-blue"></i><a href=""><span class="__cf_email__"
                                    data-cfemail="dea7b1abacb0bfb3bb9ebab1b3bfb7b0f0bdb1b3"><?php echo e(get_setting('office_email')); ?></span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-widget">
                    <h3 class="widget-title">Follow Us</h3>
                    <div class="facebook-page">
                        <?php echo get_setting('g_map_iframe_url'); ?>

                    </div>

                </div>


            </div>
        </div>
    </div>
    <div class="container">
        <div class="xs-copyright">
            <div class="row">
                <div class="col-md-6">
                    <div class="xs-copyright-text">
                        <p><?php echo e(get_setting('copyright_text')); ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <nav class="xs-footer-menu">
                        <ul>
                            <?php
                                $footer_lefts = DB::table('pages')
                                    ->where('footer_right', 3)
                                    ->get();
                            ?>
                            <?php $__currentLoopData = $footer_lefts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footer_left): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e($footer_left->slug); ?>"><?php echo e($footer_left->title); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="xs-back-to-top-wraper">
        <a href="#" class="xs-back-to-top"><i class="fa fa-angle-up"></i></a>
    </div>
</footer>
<?php /**PATH /home/anandadhara/public_html/resources/views/frontend/layouts/footer.blade.php ENDPATH**/ ?>