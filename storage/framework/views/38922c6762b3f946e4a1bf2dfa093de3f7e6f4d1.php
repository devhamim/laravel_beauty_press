<?php $__env->startSection('content'); ?>
    <section class="beautypress-inner-welocme-section beautypress-bg parallax-bg" data-parallax="scroll"
        data-image-src="<?php echo e(asset('backend_img/blogs')); ?>/<?php echo e($blogs_details->first()->blog_ban_img); ?>">
        <div class="beautypress-black-overlay"></div>
        <div class="container">
            <div class="beautypress-inner-welcome-content">
                <img src="img/inner-welcome-icon.png" alt="">
                <h1 class="color-white">Blog Details</h1>
                <p class="color-white"><?php echo e($blogs_details->first()->blog_title); ?></p>
            </div>
            <div class="beautypress-inner-welcome-footer-content">
                <ul class="beautypress-breadcrumb">
                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <li><a href="#">Blog Details</a></li>
                </ul>
            </div>
        </div>
    </section>


    <section class="beautypress-blog-post-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-12 col-lg-12">
                    <div class="beautypress-blog-post-group">
                        <div class="beautypress-blog-post-wraper text-center">
                            <img src="<?php echo e(asset('backend_img/blogs')); ?>/<?php echo e($blogs_details->first()->blog_img); ?>"
                                alt="">
                            <div class="beautypress-tag">

                            </div>
                            <h2><?php echo e($blogs_details->first()->blog_title); ?></h2>
                            <p><?php echo e($blogs_details->first()->blog_long); ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/frontend/content/blog_details.blade.php ENDPATH**/ ?>