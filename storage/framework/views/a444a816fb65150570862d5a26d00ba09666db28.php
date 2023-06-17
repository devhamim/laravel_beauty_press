
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
            width: 100% !important;
            height: 100% !important;
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
    <section class="banner" style=" padding: 50px 0px 100px 0px;">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="gallery">
                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="img-w">
                                <img src="<?php echo e(asset('/setting/banner/' . $image->image)); ?>" alt="" />
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </div>
            </div>
    </section>
    <!-- slider-area-end -->
    <script>
        // var quadimages = document.querySelectorAll("#quad figure");
        // for (i = 0; i < quadimages.length; i++) {
        //     quadimages[i].addEventListener('click', function() {
        //         this.classList.toggle("expanded");
        //         quad.classList.toggle("full")
        //     });
        // }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/anandadhara/public_html/resources/views/frontend/content/allgallery.blade.php ENDPATH**/ ?>