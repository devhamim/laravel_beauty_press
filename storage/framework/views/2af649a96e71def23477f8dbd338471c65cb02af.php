
<?php $__env->startSection('content'); ?>
    
    <section class="xs-welcome-slider">
        <div class="xs-banner-slider owl-carousel">

            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="xs-welcome-content"
                    style="background-image: url(<?php echo e(asset('/setting/banner/' . $slider->image)); ?>);">
                    <div class="container">
                        <div class="xs-welcome-wraper color-white">

                            <h2><?php echo e($slider->header_title); ?></h2>
                            <p><?php echo e($slider->bottom_title); ?></p>
                            <div class="xs-btn-wraper">
                                
                                <a href="/donate" class="btn btn-primary">
                                    <span class="badge"><i class="fa fa-heart"></i></span> Donate Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="xs-black-overlay"></div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    

    
    <section class="xs-what-we-do-image" style=" background-color: <?php echo e(get_setting('about_bg_color')); ?>;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="xs-service-promo box-image"
                        style="background-image:url(../../<?php echo e(get_setting('highlight_image_1')); ?>);height: 280px;">

                        <span class=""></span>
                        <h5 style="color:<?php echo e(get_setting('text_color_1')); ?> !important;">
                            <?php echo e(get_setting('highlight_header_1')); ?></h5>
                        <p style="color:<?php echo e(get_setting('text_color_1')); ?> !important;">
                            <?php echo e(get_setting('highlight_description_1')); ?></p>
                        <div class="xs-black-overlay"
                            style="background-color:<?php echo e(get_setting('bg_color_1')); ?>;z-index: -1 !important;opacity: 0.7 !important;">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="xs-service-promo box-image"
                        style="background-image:url(../../<?php echo e(get_setting('highlight_image_2')); ?>);height: 280px;">

                        <span class=""></span>
                        <h5 style="color:<?php echo e(get_setting('text_color_2')); ?> !important;">
                            <?php echo e(get_setting('highlight_header_2')); ?></h5>
                        <p style="color:<?php echo e(get_setting('text_color_2')); ?> !important;">
                            <?php echo e(get_setting('highlight_description_2')); ?></p>
                        <div class="xs-black-overlay"
                            style="background-color:<?php echo e(get_setting('bg_color_2')); ?>;z-index: -1 !important;opacity: 0.7 !important;">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="xs-service-promo box-image"
                        style="background-image:url(../../<?php echo e(get_setting('highlight_image_3')); ?>);height: 280px;">

                        <span class=""></span>
                        <h5 style="color:<?php echo e(get_setting('text_color_3')); ?> !important;">
                            <?php echo e(get_setting('highlight_header_3')); ?></h5>
                        <p style="color:<?php echo e(get_setting('text_color_3')); ?> !important;">
                            <?php echo e(get_setting('highlight_description_3')); ?></p>
                        <div class="xs-black-overlay"
                            style="background-color:<?php echo e(get_setting('bg_color_3')); ?>;z-index: -1 !important;opacity: 0.7 !important;">
                        </div>
                    </div>
                </div>

            </div>
            <br>

        </div>

    </section>
    

    
    <section class="xs-about-v2">
        <div class="container-fulid">
            <div class="row" style=" background-color: <?php echo e(get_setting('about_bg_color')); ?>;">
                <div class="col-md-12 col-lg-6">
                    <div class="xs-about-content-img" style="background-image:url(<?php echo e(get_setting('banner_image_back')); ?>)">
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="p-3">
                        <div class="xs-heading">
                            <h2 class="xs-title" data-title=""><?php echo e(get_setting('banner_text_header')); ?></h2>
                        </div>
                        <p> <?php echo get_setting('banner_text_bottom'); ?></p>
                        <div class="text-left">
                            <a class="btn btn-primary" href="<?php echo e(get_setting('banner_link')); ?>">More</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    

    
    <section class="xs-section-padding" style=" background-color: <?php echo e(get_setting('event_bg_color')); ?>;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="xs-text-content xs-pr-20">
                        <h2 class="color-navy-blue"><?php echo e(get_setting('bottombanner_text_bottom')); ?></h2>
                        <p><?php echo e(get_setting('event_btn_des')); ?></p>
                        <div class="row">
                            <div class="col-lg-12 row xs-single-event event-green">
                                <div class="col-md-5">
                                    <div class="xs-event-image">
                                        <img id="myImg" src="<?php echo e(asset('/setting/banner/' . $event->image)); ?>"
                                            alt="Event">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="xs-event-content">

                                        <a href="/event/details/<?php echo e($event->id); ?>"
                                            style="margin-bottom:0px;"><?php echo e($event->title); ?></a>
                                        <p><b><?php echo e(Carbon\Carbon::parse($event->date)->format('d-F')); ?></b></p>
                                        <p><?php echo e($event->sort_para); ?></p>

                                        <a href="/event/details/<?php echo e($event->id); ?>"
                                            style="background-color:<?php echo e(get_setting('event_btn_color')); ?>;color:#fff "
                                            class="btn ">
                                            <?php echo e(get_setting('event_btn_name')); ?>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- The Modal -->
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                </div>
                <div class="col-md-6 col-lg-4">

                    <div class="xs-event-schedule-widget">
                        <div class="media xs-event-schedule" style="background-color: #002147;border-radius: 5px;">
                            <div class="d-flex" style="color: #fff;padding-left: 25px;">
                                <span
                                    style="font-size: 2.57143em;font-weight: 700;margin-bottom: 5px;"><?php echo e(Carbon\Carbon::parse($event->date)->format('d-F')); ?></span>

                            </div>

                        </div>
                        <ul class="list-group xs-list-group">
                            <li class="d-flex justify-content-between">
                                Organized by:
                                <span><?php echo e($event->organized_by); ?></span>
                            </li>
                            <li class="d-flex justify-content-between">
                                Start:
                                <span><?php echo e(optional($event)->start); ?></span>
                            </li>
                            <li class="d-flex justify-content-between text-lg-right">
                                Venue:
                                <span><?php echo e($event->venue); ?></span>
                            </li>
                            <li class="d-flex justify-content-between">
                                Phone:
                                <span><?php echo e($event->phone); ?></span>
                            </li>
                            <li class="d-flex justify-content-between">
                                Email:
                                <span><?php echo e($event->email); ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    
    <section class="parallax-window xs-become-a-volunteer xs-section-padding"
        style="background-image:url(../../<?php echo e(get_setting('volunteer_bg_image')); ?>)">
        <div class="container">
            <div class="row">s
                <div class="col-md-8 col-lg-7">
                    <div class="xs-volunteer-form-wraper volunteer-version-3">
                        <i class="icon-support icon-watermark"></i>
                        <h2><?php echo e(get_setting('volunteer_title')); ?></h2>
                        <p><?php echo e(get_setting('volunteer_description')); ?></p>
                        <form action="/volunteer/submit" method="POST" class="xs-volunteer-form">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" id="volunteer_name" name="name" class="form-control"
                                        placeholder="Your Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" id="volunteer_email" name="email" class="form-control"
                                        placeholder="Your Email">
                                </div>

                                <div class="col-lg-12 xs-mb-20">
                                    <div class="">
                                        <input type="text" id="" placeholder="Subject" class="form-control"
                                            name="subject">

                                    </div>
                                </div>
                            </div>
                            <textarea name="massage" id="massage" placeholder="Enter your massage" cols="30" class="form-control"
                                rows="10"></textarea>
                            <button type="submit" class="btn btn-primary bg-green">apply now</button>
                        </form>
                    </div>
                </div>
            </div>
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
        style="background-image: url('assets/images/map.png');    background-color: <?php echo e(get_setting('brand_bg_color')); ?>;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="xs-partner-content">
                        <div class="xs-heading xs-mb-40">
                            <h2 class="xs-mb-0 xs-title"><?php echo e(get_setting('about_text_bottom')); ?></span>
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

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/anandadhara/public_html/resources/views/frontend/index.blade.php ENDPATH**/ ?>