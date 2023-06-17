<?php $__env->startSection('content'); ?>
    <section class="beautypress-inner-welocme-section beautypress-bg parallax-bg" data-parallax="scroll"
        data-image-src="<?php echo e(asset('backend_img/blogs')); ?>/<?php echo e($blogs->first()->blog_ban_img); ?>">
        <div class="beautypress-black-overlay"></div>
        <div class="container">
            <div class="beautypress-inner-welcome-content">
                <img src="img/inner-welcome-icon.png" alt="">
                <h1 class="color-white">Blog Post</h1>
                <p class="color-white">One morning, when Gregor Samsa woke from troubled dreams, he found himself
                    transformed in his bed into a horrible vermin. He lay on his armour-like back.</p>
            </div>
            <div class="beautypress-inner-welcome-footer-content">
                <ul class="beautypress-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">blog</a></li>
                </ul>
            </div>
        </div>
    </section>


    <div class="beautypress-newsfeed-section beautypress-no-bg section-padding">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-12 col-sm-12 col-xl-4 col-lg-4">
                        <div class="beautypress-single-newsletter mb-30">
                            <div class="beautypress-newsfeed-header beautypress-black-gradient-overlay">
                                <img src="<?php echo e(asset('backend_img/blogs')); ?>/<?php echo e($blog->blog_img); ?>" alt="">
                                
                            </div>
                            <div class="beautypress-newsfeed-footer">
                                <a href="<?php echo e(route('blog.details', $blog->id)); ?>"><?php echo e($blog->blog_title); ?></a>
                                <p><?php echo e($blog->blog_sort); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/frontend/content/blog.blade.php ENDPATH**/ ?>