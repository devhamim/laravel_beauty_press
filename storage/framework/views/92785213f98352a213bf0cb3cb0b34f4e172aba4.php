
<?php $__env->startSection('content'); ?>
    <style>
        .breadcrumb::after {
            border-width: 74px 25px 0 0 !important;
        }

        .breadcrumb::before {
            border-width: 0 0 74px 25px !important;
        }

        .xs-pricing-header h2 {
            font-size: 3.14286em !important;
            font-weight: 500 !important;
        }
    </style>
    <!-- main-area -->

    <section class="xs-banner-inner-section parallax-window mrt"
        style="background-image:url(../../<?php echo e(get_setting('donates_image_1')); ?>)">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2>Donate Now</h2>
                <ul class="xs-breadcumb">
                    <li class="badge badge-pill badge-primary"><a class="color-white"> Home /</a> Donate</li>
                </ul>
            </div>
        </div>
    </section>

    <main class="xs-main">

        <div class="xs-newsletter-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="xs-newsletter-content text-center"
                            style=" background-color: <?php echo e(get_setting('donates_title_bg_color')); ?>;">

                            <h2><?php echo e(get_setting('donates_text_header')); ?></h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="xs-content-section-padding">
            <div class="container">
                <div class="row col-md-11 mx-auto">
                    <div class="col-lg-3">
                        <ul class="nav flex-column xs-nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <li class="nav-item">
                                <a class="nav-link active show" data-toggle="pill" href="#credit">Credit Card</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#bank">Bank Transfer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#cash">Cash</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane slideUp active show" id="credit" role="tabpanel">
                                <div class="row">

                                    <?php $__currentLoopData = $donates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-6 col-lg-4" style="padding-bottom: 10px;">
                                            <div class="xs-single-pricing-table">
                                                <div class="xs-pricing-header"
                                                    style="background-image:url(../../<?php echo e('setting/banner/' . $donate->image); ?>);height: 250px;";>
                                                    <h2>
                                                        $ <?php echo e($donate->title); ?>

                                                    </h2>
                                                    <br>
                                                    <a href="<?php echo e($donate->link); ?>" target="_blank" class="btn btn-primary">
                                                        Donate Now
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <div class="tab-pane slideUp" id="bank" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="xs-tab-content">

                                            <p><?php echo get_setting('bank'); ?></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane slideUp" id="cash" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="xs-tab-content">

                                            <p><?php echo get_setting('cash'); ?></p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abubd/anandadhara.abubd.co/resources/views/frontend/content/donatenow.blade.php ENDPATH**/ ?>