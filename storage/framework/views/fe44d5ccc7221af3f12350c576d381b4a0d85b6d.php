<?php $__env->startSection('content'); ?>
    <style>
        .gallery {
            width: 100%;
            margin: auto;
            border-radius: 3px;
            overflow: hidden;
        }

        .img-c {
            width: 215px;
            height: 200px;
            float: left;
            position: relative;
            overflow: hidden;
        }

        .img-w {
            position: relative;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            cursor: pointer;
            transition: transform ease-in-out 300ms;
        }

        .img-w img {
            display: none;
        }

        .img-c {
            transition: width ease 400ms, height ease 350ms, left cubic-bezier(0.4, 0, 0.2, 1) 420ms, top cubic-bezier(0.4, 0, 0.2, 1) 420ms;
        }

        .img-c:hover .img-w {
            transform: scale(1.08);
            transition: transform cubic-bezier(0.4, 0, 0.2, 1) 450ms;
        }

        .img-c.active {
            width: 1000px !important;
            height: 70vw !important;
            position: absolute;
            z-index: 2;

        }

        .img-c.postactive {
            position: absolute;
            z-index: 2;
            pointer-events: none;
        }

        .img-c.active.positioned {
            left: 0 !important;
            top: 0 !important;
            transition-delay: 50ms;
        }
    </style>
    
    <main class="xs-main">
        <section class="xs-banner-inner-section parallax-window"
            style="background-image: url(<?php echo e(asset('/setting/banner/' . $blog->banner)); ?>);">
            <div class="xs-black-overlay"></div>
            <div class="container">
                <div class="color-white xs-inner-banner-content">
                    <h2><?php echo e($blog->banner_text); ?></h2>
                    
                </div>
            </div>
        </section>
        <div class="xs-content-section-padding xs-blog-single">
            <div class="container" style="max-width: 90%;">
                <div class="row">
                    <div class="col-md-12 col-lg-8">

                        <article class="post format-standard hentry xs-blog-post-details">
                            <div class="post-media post-image">
                                <img src="<?php echo e(asset('/setting/banner/' . $blog->detail_img)); ?>" class="img-responsive"
                                    alt="">
                            </div>
                            <div class="post-body xs-border xs-padding-40">
                                <div class="entry-header">
                                    <div class="post-meta row">
                                        <div class="col-md-2 xs-padding-0">
                                            <span
                                                class="post-meta-date"><b><?php echo e(date('d', strtotime($blog->created_at))); ?></b>
                                                <?php echo e(date('M', strtotime($blog->created_at))); ?></span>
                                        </div>
                                        <div class="col-md-10 d-flex align-items-end xs-post-meta-list">
                                            <span class="post-cat">
                                                <i class="fa fa-user"></i><a href="#"><?php echo e($blog->user_name); ?> </a>
                                            </span>
                                            <span class="tags-links">
                                                <i class="fa fa-tags"></i>
                                                <?php echo e($blog->categories); ?>

                                            </span>
                                            
                                        </div>
                                    </div>
                                    <h2 class="entry-title xs-post-entry-title">
                                        
                                        <?php echo e($blog->title); ?>


                                    </h2>
                                </div>
                                <div class="entry-content">
                                    <p class="paragraph"><?php echo e($blog->details); ?> </p>
                                </div>
                            </div>
                        </article>

                    </div>
                    <div class="col-md-12 col-lg-4">

                        <div class="sidebar sidebar-right">

                            <div class="widget widget_categories xs-sidebar-widget">
                                <h3 class="widget-title">Categories</h3>
                                <ul class="xs-side-bar-list">
                                    <?php $__currentLoopData = $count; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a
                                                href="#"><span><?php echo e($cat); ?></span><span>(<?php echo e($value); ?>)</span></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <div class="widget widget_call_to_action">
                                <a href="#" class="d-block">
                                    <img src="<?php echo e(asset('/setting/banner/' . $blog->promotion_img)); ?>" alt="">
                                </a>
                            </div>

                            <div class="widget widget_categories xs-sidebar-widget">
                                <h3 class="widget-title">Archives</h3>
                                <ul class="xs-side-bar-list">
                                    <?php $__currentLoopData = $archive; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arc => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a
                                                href="#"><span><?php echo e($arc); ?></span><span>(<?php echo e($val); ?>)</span></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Anandadhara/resources/views/frontend/content/blogdetails.blade.php ENDPATH**/ ?>