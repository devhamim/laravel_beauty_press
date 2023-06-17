<?php $__env->startSection('content'); ?>
    <section class="beautypress-inner-welocme-section beautypress-bg parallax-bg" data-parallax="scroll"
        data-image-src="<?php echo e(asset('setting/banner')); ?>/<?php echo e($services->first()->ban_img); ?>">
        <div class="beautypress-black-overlay"></div>
        <div class="container">
            <div class="beautypress-inner-welcome-content">
                <img src="img/inner-welcome-icon.png" alt="">
                <h1 class="color-white">Service Details</h1>
                <p class="color-white"><?php echo e($services->first()->ban_title); ?></p>
            </div>
            <div class="beautypress-inner-welcome-footer-content">
                <ul class="beautypress-breadcrumb">
                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <li><a href="#">Service Details</a></li>
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
                            <img src="<?php echo e(asset('setting/banner')); ?>/<?php echo e($services->first()->service_image); ?>" alt="">
                            <div class="beautypress-tag">
                                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(route('service.view', $service->id)); ?>"><?php echo e($service->service_title); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <h2><?php echo e($services->first()->service_title); ?></h2>
                            <p><?php echo e($services->first()->service_details); ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php7 laravel\Anandadhara\resources\views/frontend/content/services_view.blade.php ENDPATH**/ ?>