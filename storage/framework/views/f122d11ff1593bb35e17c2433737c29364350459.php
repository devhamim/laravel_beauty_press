
<?php $__env->startSection('content'); ?>
    
    
    
    <section class="xs-welcome-slider">
        <div class="xs-banner-slider owl-carousel">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="xs-welcome-content"
                    style="background-image: url(<?php echo e(asset('/setting/banner/' . $slider->image)); ?>);">
                    <div class="container row">
                        <div class="xs-welcome-wraper banner-verion-2 color-white col-md-8 content-left">
                            <p class="pb-3"><?php echo e($slider->bottom_title); ?></p>
                            <h2><?php echo e($slider->header_title); ?></h2>
                            <div class="xs-btn-wraper">
                                <a href="#" class="btn btn-primary">
                                    <span class="badge"></span> Our Projects
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="xs-black-overlay"></div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    

    <section class="xs-content-section-padding">
        <div class="container" style="max-width: 90%;">
            <div class="row">
                <div class="col-lg-7">
                    <div class="xs-feature-text-content">
                        <div class="xs-heading">
                            <h3 class="xs-title"><?php echo e(get_setting('banner_text_header')); ?></h3>
                            <span class="xs-separetor bg-bondiBlue"></span>
                        </div>
                        <p> <?php echo get_setting('banner_text_bottom'); ?></p>
                        <a href="<?php echo e(get_setting('banner_link')); ?>" class="btn btn-secondary bg-bondiBlue">see more
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="xs-about-content-img" style="background-image:url(<?php echo e(get_setting('banner_image_back')); ?>)">
                    </div>

                </div>
            </div>
        </div>
    </section>
    
    
    <?php if($service_count != 0): ?>
        <section class="xs-content-section-padding" style="background-color: #f1f1f1">
            <div class="container" style="max-width: 90%;">
                <div class="xs-heading">
                    <h1 class="xs-title"><?php echo e($service_header->title); ?></h1>
                    <span class="xs-separetor bg-bondiBlue"></span>
                    <p class="paragraph" style="padding-bottom: 60px;"><?php echo e($service_header->description); ?></p>
                </div>
                <div class="row">
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 col-lg-4">
                            <div class="xs-single-causes">
                                <img class="round-img" src="<?php echo e(asset('/setting/banner/' . $service->service_image)); ?>"
                                    alt="">
                                <div class="xs-causes-footer">
                                    <h4 class="color-light-red"><?php echo e($service->service_title); ?></h4>
                                    <p><?php echo e($service->service_details); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    

    
    <section class="xs-content-section-padding">
        <div class="container" style="max-width: 90%;">
            <div class="xs-heading">
                <h1 class="xs-title">OUR PROJECTS</h1>
                <span class="xs-separetor bg-bondiBlue"></span>
            </div>
            <div class="row" style="padding-top: 50px;">
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="xs-single-causes" style="height: 100%">
                            <img src="<?php echo e(asset('/setting/banner/' . $service->image)); ?>" alt="">
                            <div class="xs-causes-footer">
                                <h2 class="color-light-red"><?php echo e($service->header_title); ?></h2>
                                <p><?php echo e($service->bottom_title); ?></p>
                                <div style="margin-top: 15px;">
                                    <a href="/project/details/<?php echo e($service->id); ?>" class="btn-sm btn-primary">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        </div>
    </section>
    
    <section class="parallax-window xs-become-a-volunteer xs-section-padding"
        style="background-image:url(../../<?php echo e(get_setting('volunteer_bg_image')); ?>)">
        <div class="container" style="max-width: 90%;">
            <div class="row">
                <div class="col-md-10 col-lg-10" style="padding-top:100px;padding-bottom: 100px">
                    <div class="volunteer-version-3">
                        
                        
                        <h1 style="color: #1E73BE;">Ready To Start Your Dream PROJECT?</h1>
                        
                        <h5 style="color: #1E73BE;">Ask Us How We Can Help</h5>
                        
                        
                        <div class="xs-btn-wraper" style="margin:50px;">
                            <a href="#" class="btn btn-primary">
                                <span class="badge"></span> Request a quote
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style>
        .heading {
            text-align: center;
            color: #454343;
            font-size: 30px;
            font-weight: 700;
            position: relative;
            margin-bottom: 70px;
            text-transform: uppercase;
            z-index: 999;
        }

        .white-heading {
            color: #1E73BE;
        }

        .heading:after {
            content: ' ';
            position: absolute;
            top: 100%;
            left: 50%;
            height: 40px;
            width: 180px;
            border-radius: 4px;
            transform: translateX(-50%);
            /* background: url(img/heading-line.png); */
            background-repeat: no-repeat;
            background-position: center;
        }

        .white-heading:after {
            background: url(https://i.ibb.co/d7tSD1R/heading-line-white.png);
            background-color: #1E73BE;
            background-repeat: no-repeat;
            background-position: center;
        }

        .heading span {
            font-size: 18px;
            display: block;
            font-weight: 500;
        }

        .white-heading span {
            color: #1E73BE;
        }

        /*-----Testimonial-------*/

        .testimonial:after {
            position: absolute;
            top: -0 !important;
            left: 0;
            content: " ";
            background: url(img/testimonial.bg-top.png);
            background-size: 100% 100px;
            width: 100%;
            height: 100px;
            float: left;
            z-index: 99;
        }

        .testimonial {
            min-height: 375px;
            position: relative;
            /* background: url(https://i.ibb.co/PTJDkgb/testimonials.jpg); */
            background-color: #f9f9f9;
            padding-top: 50px;
            padding-bottom: 50px;
            background-position: center;
            background-size: cover;
        }

        #testimonial4 .carousel-inner:hover {
            cursor: -moz-grab;
            cursor: -webkit-grab;

        }

        #testimonial4 .carousel-inner:active {
            cursor: -moz-grabbing;
            cursor: -webkit-grabbing;
        }

        #testimonial4 .carousel-inner .item {
            overflow: hidden;
        }

        .testimonial4_indicators .carousel-indicators {
            left: 0;
            margin: 0;
            width: 100%;
            font-size: 0;
            height: 20px;
            bottom: 15px;
            padding: 0 5px;
            cursor: e-resize;
            overflow-x: auto;
            overflow-y: hidden;
            position: absolute;
            text-align: center;
            white-space: nowrap;

        }

        .testimonial4_indicators .carousel-indicators li {
            padding: 0;
            width: 14px;
            height: 14px;
            border: none;
            text-indent: 0;
            margin: 2px 3px;
            cursor: pointer;
            display: inline-block;
            background-color: #9dd3af;
            background: #1E73BE;
            -webkit-border-radius: 100%;
            border-radius: 100%;


        }

        .testimonial4_indicators .carousel-indicators .active {
            padding: 0;
            width: 14px;
            height: 14px;
            border: none;
            margin: 2px 3px;
            background-color: #9dd3af;
            -webkit-border-radius: 100%;
            border-radius: 100%;
        }

        .testimonial4_indicators .carousel-indicators::-webkit-scrollbar {
            height: 3px;
        }

        .testimonial4_indicators .carousel-indicators::-webkit-scrollbar-thumb {
            background: #1E73BE;
            -webkit-border-radius: 0;
            border-radius: 0;
        }

        .testimonial4_control_button .carousel-control {
            top: 175px;
            opacity: 1;
            width: 40px;
            bottom: auto;
            height: 40px;
            font-size: 10px;
            cursor: pointer;
            font-weight: 700;
            overflow: hidden;
            line-height: 38px;
            text-shadow: none;
            text-align: center;
            position: absolute;
            background: transparent;
            border: 2px solid #1E73BE;
            text-transform: uppercase;
            -webkit-border-radius: 100%;
            border-radius: 100%;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-transition: all 0.6s cubic-bezier(0.3, 1, 0, 1);
            transition: all 0.6s cubic-bezier(0.3, 1, 0, 1);
        }

        .testimonial4_control_button .carousel-control.left {
            left: 7%;
            top: 50%;
            right: auto;
        }

        .testimonial4_control_button .carousel-control.right {
            right: 7%;
            top: 50%;
            left: auto;
        }

        .testimonial4_control_button .carousel-control.left:hover,
        .testimonial4_control_button .carousel-control.right:hover {
            color: #000;
            background: #1E73BE;
            border: 2px solid #1E73BE;
        }

        .testimonial4_header {
            top: 0;
            left: 0;
            bottom: 0;
            width: 550px;
            display: block;
            margin: 30px auto;
            text-align: center;
            position: relative;
        }

        .testimonial4_header h4 {
            color: #1E73BE;
            font-size: 30px;
            font-weight: 600;
            position: relative;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .testimonial4_slide {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 70%;
            margin: auto;
            padding: 20px;
            position: relative;
            text-align: center;
        }

        .testimonial4_slide img {
            top: 0;
            left: 0;
            right: 0;
            width: 136px;
            height: 136px;
            margin: auto;
            display: block;
            color: #1E73BE;
            font-size: 18px;
            line-height: 46px;
            text-align: center;
            position: relative;
            border-radius: 50%;
            box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
            -moz-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
            -o-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
            -webkit-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
        }

        .testimonial4_slide p {
            color: #1E73BE;
            font-size: 20px;
            line-height: 1.4;
            margin: 40px 0 20px 0;
        }

        .testimonial4_slide h4 {
            color: #1E73BE;
            font-size: 22px;
        }

        .testimonial .carousel {
            padding-bottom: 50px;
        }

        .testimonial .carousel-control-next-icon,
        .testimonial .carousel-control-prev-icon {
            width: 35px;
            height: 35px;
            margin: 10px;
            background-color: #1E73BE;
        }

        /* ------testimonial  close-------*/
    </style>

    <section class="testimonial text-center">
        <div class="container" style="max-width: 90%;">

            <div class="heading white-heading">
                What our customers are saying
            </div>
            <div id="testimonial4"
                class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x"
                data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

                <div class="carousel-inner" role="listbox">
                    
                    <div class="carousel-item active">
                        <div class="testimonial4_slide">
                            
                            <p>We loved the workmanship SBS provided. They have excellent communication, are tidy, friendly,
                                professional and provide precise work."</p>
                            <h4>M. Lewis</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            
                            <p>The work was completed to a high standard and well within schedule. SBS have competitive
                                pricing, good workmanship and always kept me informed on progress and issues requiring a
                                decision by me. I was very pleased the bulkhead that was part of the original plan was able
                                to be avoided. This showed excellent flexibility to produce a better result. I am very happy
                                with the result of the renovation.</p>
                            <h4>W. Dundas</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            
                            <p>We wanted to say thankyou so much for the great work you and your team have done for us - the
                                result is far greater than we expected. It has always been a pleasure dealing with you and
                                your staff. It was great to have such a trustworthy and tidy bunch of tradies working in our
                                home. We always felt completely comfortable. Our new front deck looks amazing. We have no
                                hesitation recommending you to anyone who needs a builder and we look forward to doing
                                business with SBS again.</p>
                            <h4>T&S. Andrews</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            
                            <p>We loved the quality of the finished work and the willingness of the crew to clean up every
                                day after work. They have top quality workmanship and the 'can do' attitude, always willing
                                to listen to our concerns and fixing any issue that came up. I was impressed by the
                                professionalism of the crew – on time, friendly and hard working.</p>
                            <h4>B. Govindasamy</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            
                            <p>SBS Building had great communication, reasonable charges and great service. The staff were
                                all very friendly.</p>
                            <h4>M&S. Bryant</h4>
                        </div>
                    </div>
                </div>


            </div>
            <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
            <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                
                <i style="color: #1E73BE" class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                
                <i style="color: #1E73BE" class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
        </div>

    </section>

    

    

    
    <style>
        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {
            opacity: 0.7;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9);
            /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content,
        #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes  zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media  only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }
    </style>
    
    <section class=" xs-partner-section"
        style="background-image: url('assets/images/map.png');  background-color: <?php echo e(get_setting('brand_bg_color')); ?>;">
        <div class="container" style="max-width: 90%;">
            <div class="xs-heading">
                <h1 class="xs-title">NEWS</h1>
                <span class="xs-separetor bg-bondiBlue"></span>
            </div>
            
            <div class="row" style="padding-top: 50px;">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="/blog/details/<?php echo e($blog->id); ?>">
                        <div class="col-lg-4 col-md-6">
                            <div class="xs-box-shadow xs-single-journal xs-mb-30">
                                <div class="entry-thumbnail ">
                                    <img src="<?php echo e(asset('/setting/banner/' . $blog->image)); ?>" alt="">
                                    <div class="post-author">
                                        
                                        
                                    </div>
                                </div>
                                <div class="entry-header">
                                    <div class="entry-meta">
                                        <span class="date">
                                            <a href="/blog/details/<?php echo e($blog->id); ?>" rel="bookmark"
                                                class="entry-date">
                                                <?php echo e(date('M d, Y', strtotime($blog->created_at))); ?>

                                            </a>
                                        </span>
                                    </div>
                                    <h4 class="entry-title">
                                        <a href="/blog/details/<?php echo e($blog->id); ?>"><?php echo e($blog->description); ?></a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            

            <div class="row">
                <div class="col-lg-5">
                    <div class="xs-partner-content">
                        <div class="xs-heading xs-mb-40">
                            <h2 class="xs-mb-0 xs-title">
                                <?php echo e(get_setting('about_text_bottom')); ?></span>
                            </h2>
                        </div>
                        <p><?php echo e(get_setting('about_text_details')); ?></p>
                        <a href="/all/brand" class="btn btn-primary bg-orange">
                            More
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <ul class="fundpress-partners">
                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="#"><img src="<?php echo e(asset('/setting/banner/' . $brand->logo)); ?>"
                                        style="height: 60px;" alt=""></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Anandadhara/resources/views/frontend/index.blade.php ENDPATH**/ ?>