<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Beautypress SPA Theme By Xpeedstudio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="<?php echo e(asset('frontend_assets')); ?>/apple-touch-icon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700%7CNiconne"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo e(asset('frontend_assets')); ?>/favicon.ico">

    <link rel="stylesheet" href="<?php echo e(asset('frontend_assets')); ?>/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('frontend_assets')); ?>/css/bootstrap-datepicker.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('frontend_assets')); ?>/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('frontend_assets')); ?>/css/xs-icon.css">

    <link rel="stylesheet" href="<?php echo e(asset('frontend_assets')); ?>/css/themeSwither.css">

    <link rel="stylesheet" href="<?php echo e(asset('frontend_assets')); ?>/css/owl.carousel.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('frontend_assets')); ?>/css/isotope.css">

    <link rel="stylesheet" href="<?php echo e(asset('frontend_assets')); ?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo e(asset('frontend_assets')); ?>/css/plugins.css" />

    <link rel="stylesheet" href="<?php echo e(asset('frontend_assets')); ?>/css/style.css">

    <link rel="stylesheet" href="<?php echo e(asset('frontend_assets')); ?>/css/responsive.css" />
</head>

<body>


    


    <header
        class="beautypress-header-section beautypress-header-version-3 beautypress-header-version-2 header-height-calc-minus">
        <div class="beautypress-header-top bg-color-gray-2">
            <div class="container">
                <div class="beautypress-spilit-container beautypress-version-2">
                    <div class="beautypress-language-select-list">
                        <select name="lang-select" id="language-select">
                            <option value="eng" selected>english</option>
                            <option value="jap">japanese</option>
                            <option value="thai">thai</option>
                            <option value="chi">chinese</option>
                        </select>
                        <div class="beautypress-header-social-list">
                            <ul>
                                <li><a href="<?php echo e(get_setting('facebook')); ?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo e(get_setting('twitter')); ?>"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?php echo e(get_setting('linkedin')); ?>"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="<?php echo e(get_setting('instagram')); ?>"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="<?php echo e(get_setting('youtube')); ?>"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <ul class="beautypress-simple-iocn-list beautypress-version-1">
                        <li><i class="xsicon icon-call"></i><?php echo e(get_setting('office_phone')); ?></li>
                        <li><i class="xsicon icon-envelope"></i><a
                                href="https://demo.xpeedstudio.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="2d44434b426d555d4848495e5958494442034e4240"><?php echo e(get_setting('office_email')); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="beautypress-new-header color-grren xs-extra-css">
            <div class="container">
                <nav class="xs_nav_2 xs_nav-landscape">
                    <div class="nav-header">
                        <a class="nav-logo" href="/">
                            <img src="<?php echo e(asset(get_setting('frontend_logo_menu'))); ?>" alt="logo">
                        </a>
                        <div class="nav-toggle"></div>
                    </div>

                    <div class="nav-menus-wrapper">
                        <ul class="nav-menu nav-menu-centered">
                            <li>
                                <a href="<?php echo e(url('/')); ?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('about')); ?>">About</a>
                            </li>
                            <li><a href="#">services</a>
                                <ul class="nav-dropdown">
                                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a
                                                href="<?php echo e(route('service.view', $service->id)); ?>"><?php echo e($service->title); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>

                            <li>
                                <a href="<?php echo e(route('blog')); ?>">blog</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('contact')); ?>">Contact</a>
                            </li>

                        </ul>
                    </div>
                    <div class="nav-overlay-panel"></div>
                </nav>
            </div>
        </div>
    </header>
<?php /**PATH D:\beauty spa\beauty press\resources\views/frontend/layouts/header.blade.php ENDPATH**/ ?>