
<?php $__env->startSection('content'); ?>
    <section class="xs-banner-inner-section parallax-window mrt"
        style="background-image:url(../../<?php echo e(get_setting('about_image_1')); ?>)">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2>Brands</h2>
                <p><?php echo e(get_setting('about_text_bottom')); ?></p>
                <ul class="xs-breadcumb">
                    <li class="badge badge-pill badge-primary"><a href="index.html" class="color-white"> Home /</a> Causes</li>
                </ul>
            </div>
        </div>
    </section>

    <main class="xs-main">

        <section class="xs-content-section-padding">
            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 col-lg-3">
                            <div class="xs-single-causes text-center p-5"
                                style="border: 1px solid #fff;border-radius: 10px;">
                                <img src="<?php echo e(asset('/setting/banner/' . $brand->logo)); ?>" style="height: 80px;"
                                    alt="">
                                
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abubd/anandadhara.abubd.co/resources/views/frontend/content/allbrand.blade.php ENDPATH**/ ?>