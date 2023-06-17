
<?php $__env->startSection('content'); ?>
    <section class="xs-banner-inner-section parallax-window mrt"
        style="background-image:url(../../<?php echo e(get_setting('work_image_1')); ?>)">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2>Activities</h2>
                <p><?php echo e(get_setting('work_text_header')); ?></p>
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

                    <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activitie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="xs-single-causes text-center" style="border: 1px solid #fff;border-radius: 10px;">
                                <img src="<?php echo e(asset('/setting/banner/' . $activitie->image)); ?>" style="height: 250px; alt="">
                                <div class="xs-causes-footer" style="height: 200px;">
                                    <h2 class="color-light-red"><?php echo e($activitie->title); ?></h2>
                                    <p><?php echo e($activitie->sort_para); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abubd/anandadhara.abubd.co/resources/views/frontend/content/allactivities.blade.php ENDPATH**/ ?>