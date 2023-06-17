<style>
    @media  only screen and (min-width: 320px) and (max-width: 480px) {
        .mobilenone {
            display: none !important;
        }


        .mobileshow {
            display: inherit !important;
        }


        .mobile_padding_remove {
            padding-left: 0px;
            padding-right: 0px;
        }

        .xs-welcome-content {
            min-height: 565px !important;

        }



        .xs-welcome-wraper h2 {
            font-size: 33px !important;
            ;
            line-height: 40px !important;
            ;
        }

        /*
        .xs-banner-inner-section {
            padding-top: 150px !important;
            padding-bottom: 0px !important;

        } */

        .xs-about-content-img {

            min-height: 290px !important;
        }



        .img-c {
            width: 100% !important;
            height: 200px !important;
            margin-bottom: 20px !important;
        }

        .gallery {
            width: 100% !important;
        }

        .parallax-window {
            background-attachment: inherit !important;
        }

        .xs-banner-inner-section {
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        .xs-inner-banner-content h2 {
            font-size: 34px;
            padding-top: 35px;
            font-weight: 700;
            margin-bottom: 0px;

        }

        .xs-inner-banner-content p {
            font-size: 14px;
        }

        .xs-breadcumb li {
            padding: 7px 15px;
            margin-bottom: 15px;
            font-weight: 400;
            font-size: 12px;
        }

        .mrt {
            margin-top: 77px;
        }

        .xs-newsletter-content {
            margin-top: 20px;
        }

        .xs-event-schedule-widget {
            padding: 15px;
        }

        .xs-contact-container {
            padding: 15px;
            margin-top: 155px;
            margin-bottom: 0px;
        }




    }


    @media  only screen and (min-width: 320px) and (max-width: 880px) {

        .mobileshow {
            display: inherit !important;
        }

        .xs-top-bar {
            background-color: #fff !important;
        }

    }
</style>


<div class="xs-top-bar top-bar-second">
    <div class="container clearfix">
        <ul class="xs-top-social">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fa fa-wordpress"></i></a></li>
            <li><a href="#"><i class="fa fa-slack"></i></a></li>
        </ul>
        <a href="" class="xs-top-bar-mail mobilenone"><i class="fa fa-envelope-o"></i><span class="__cf_email__"
                data-cfemail="fd94939b8dbd98859c908d9198d39e9290"><?php echo e(get_setting('office_email')); ?></span></a>
    </div>
</div>
<header class="xs-header xs-fullWidth">
    <div class="container">
        <nav class="xs-menus">
            <div class="nav-header">
                <div class="nav-toggle"></div>
                <a href="/" class="xs-nav-logo">
                    <img src="<?php echo e(asset(get_setting('frontend_logo_menu'))); ?>" alt="">
                </a>
            </div>
            <div class="nav-menus-wrapper row">
                <div class="xs-logo-wraper col-lg-3">
                    <a class="nav-brand" href="/" style="height: 150px;weight:150px;">
                        <img src="<?php echo e(asset(get_setting('frontend_logo_menu'))); ?>" alt="">
                    </a>
                </div>
                <div class="col-lg-9">
                    
                    <ul class="nav-menu">
                        <?php
                            $headers = DB::table('pages')
                                ->where('hearder', 1)
                                ->get();
                        ?>
                        <li><a href="/">Home</a>
                        </li>
                        <?php $__currentLoopData = $headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e($header->slug); ?>"><?php echo e($header->title); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>





<div style="display: none;">
    <header class="xs-header header-transparent xs-box">
        <div class="container mobile_padding_remove" style="max-width: 1265px !important">
            <nav class="xs-menus">
                <div class="xs-top-bar clearfix">
                    
                    <a href="" class="xs-top-bar-mail mobilenone"><i class="fa fa-envelope-o"></i><span
                            class="__cf_email__"
                            data-cfemail="fd94939b8dbd98859c908d9198d39e9290"><?php echo e(get_setting('office_email')); ?></span></a>
                    <a href="/" class="mobileshow" style="display: none;">
                        <img src="<?php echo e(asset(get_setting('frontend_logo_menu'))); ?>" style="height:50px" alt="">
                    </a>
                </div>
                <div class="nav-header ">
                    <div class="nav-toggle"></div>
                    
                </div>
                <div class="nav-menus-wrapper row">
                    <div class="xs-logo-wraper col-lg-2 col-xl-2 xs-padding-0">
                        <a class="nav-brand mobilenone" href="/" style="paddig-top:8px">
                            <img src="<?php echo e(asset(get_setting('frontend_logo_menu'))); ?>" style="height:108px"
                                alt="">
                        </a>
                    </div>
                    <div class="col-lg-10 col-xl-8">
                        <ul class="nav-menu">
                            <?php
                                $headers = DB::table('pages')
                                    ->where('hearder', 1)
                                    ->get();
                            ?>
                            <li><a href="/">Home</a>
                            </li>
                            <?php $__currentLoopData = $headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e($header->slug); ?>"><?php echo e($header->title); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </li>
                        </ul>
                    </div>
                    <div class="xs-navs-button d-flex-center-end col-lg-3 col-xl-2 d-block d-lg-none d-xl-block">
                        <a href="/donate" class="btn btn-primary">
                            <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                        </a>
                    </div>

                </div>
            </nav>
        </div>
    </header>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Anandadhara/resources/views/frontend/layouts/header.blade.php ENDPATH**/ ?>