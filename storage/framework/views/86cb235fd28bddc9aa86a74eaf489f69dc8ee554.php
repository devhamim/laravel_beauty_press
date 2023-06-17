
<?php $__env->startSection('content'); ?>
    <style>
        .breadcrumb::after {
            border-width: 74px 25px 0 0 !important;
        }

        .breadcrumb::before {
            border-width: 0 0 74px 25px !important;
        }
    </style>
    <!-- main-area -->

    <section class="xs-banner-inner-section parallax-window mrt"
        style="background-image: url(<?php echo e(asset('/setting/banner/' . $page->image)); ?>);">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2><?php echo e($page->title); ?></h2>

                <ul class="xs-breadcumb">
                    <li class="badge badge-pill badge-primary"><a href="index.html" class="color-white"> Home /</a>
                        <?php echo e($page->title); ?></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- slider-area -->
    <section class="banner">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <?php echo $page->description; ?>

                </div>

            </div>
        </div>
    </section>
    <!-- slider-area-end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Anandadhara/resources/views/frontend/content/dynamicpage.blade.php ENDPATH**/ ?>