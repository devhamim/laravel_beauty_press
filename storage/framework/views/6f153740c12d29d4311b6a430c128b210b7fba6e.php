<?php $__env->startSection('content'); ?>
    <section class="beautypress-inner-welocme-section beautypress-bg parallax-bg" data-parallax="scroll"
        data-image-src="<?php echo e(asset('backend_img/about')); ?>/<?php echo e($about_banner_imgs->first()->about_img); ?>">
        <div class="beautypress-black-overlay"></div>
        <div class="container">
            <div class="beautypress-inner-welcome-content">
                <img src="<?php echo e(asset('frontend_assets')); ?>/img/inner-welcome-icon.png" alt="">
                <h1 class="color-white">About Us</h1>
                <p class="color-white"><?php echo e($about_banner_imgs->first()->about_title); ?></p>
            </div>
            <div class="beautypress-inner-welcome-footer-content">
                <ul class="beautypress-breadcrumb">
                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="beautypress-team-section section-padding">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
                        <div class="beautypress-single-team beautypress-purple-overlay">
                            <img src="<?php echo e(asset('backend_img/about')); ?>/<?php echo e($team->team_img); ?>" alt="">
                            <div class="beautypress-team-content">
                                <div class="beautypress-team-person-details">
                                    <h3><?php echo e($team->name); ?></h3>
                                    <h4><?php echo e($team->position); ?></h4>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>


    <section class="beautypress-shop-call-to-action-section beautypress-bg parallax-bg" data-parallax="scroll"
        data-image-src="img/shop-open-img.jpg">
        <div class="container">
            <div class="beautypress-shop-call-to-action-content">
                <h2 class="color-black"><strong>Welcome</strong> to our barbar shop</h2>
                <div class="beautypress-spilit-container">
                    <div class="beautypress-shop-text">
                        <p>Skilled and up to date with the latest hair styles, hair cuts, and color trends, our small
                            team of hair professionals are ready to help make you feel and look great.</p>
                        
                    </div>
                    <div class="beautypress-shop-shedule">
                        <h3 class="color-black">Time Shedule</h3>
                        <?php $__currentLoopData = $shedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($shedule->time_form != null): ?>
                                <p><?php echo e($shedule->shedule_form); ?> – <?php echo e($shedule->shedule_to); ?> <span><?php echo e($shedule->time_form); ?> – <?php echo e($shedule->time_to); ?></span></p>
                            <?php else: ?>
                                <p><?php echo e($shedule->shedule_form); ?> <span class="text-danger">Closed</span></p>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
                <div class="beautypress-watermark-big-icon"></div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/frontend/content/about.blade.php ENDPATH**/ ?>