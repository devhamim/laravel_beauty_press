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
    <section class="xs-content-section-padding">
        <div class="container" style="max-width: 90%;">
            <?php if($service): ?>
            <h1><?php echo e($service->header_title); ?></h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="xs-event-banner">
                        <p class="paragraph"><?php echo e($service->details); ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="xs-event-banner">
                        <img src="<?php echo e(asset('/setting/banner/' . $service->image)); ?>" alt="">
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="col-md-12">
                <div class="gallery">
                    <?php if($photo): ?>
                    <div class="row">
                        <?php $__currentLoopData = $photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3">
                            <img data-enlargable src="<?php echo e(asset('/setting/banner/' . $image)); ?>" alt="" />
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('img[data-enlargable]').addClass('img-enlargable').click(function() {
            var src = $(this).attr('src');
            $('<div>').css({
                background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
                backgroundSize: 'contain',
                width: '100%',
                height: '100%',
                position: 'fixed',
                zIndex: '10000',
                top: '0',
                left: '0',
                cursor: 'zoom-out'
            }).click(function() {
                $(this).remove();
            }).appendTo('body');
        });
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Anandadhara/resources/views/frontend/content/projectdetails.blade.php ENDPATH**/ ?>