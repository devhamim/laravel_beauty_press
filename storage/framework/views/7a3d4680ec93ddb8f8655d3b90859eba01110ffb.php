
<?php $__env->startSection('content'); ?>
    <section class="xs-banner-inner-section parallax-window mrt"
        style="background-image:url(../../<?php echo e(get_setting('bottombanner_image')); ?>)">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2>Events</h2>
                
                <ul class="xs-breadcumb">
                    <li class="badge badge-pill badge-primary"><a href="index.html" class="color-white"> Home /</a> Events</li>
                </ul>
            </div>
        </div>
    </section>

    <main class="xs-main">

        <section class="xs-content-section-padding">
            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-6 row xs-single-event event-green">
                            <div class="col-md-5">
                                <div class="xs-event-image">
                                    <img src="<?php echo e(asset('/setting/banner/' . $event->image)); ?>" style="height: 220px;"
                                        alt="">
                                    <div class="xs-entry-date">
                                        <span
                                            class="entry-date-day"><?php echo e(Carbon\Carbon::parse($event->date)->format('d')); ?></span>
                                        <span
                                            class="entry-date-month"><?php echo e(Carbon\Carbon::parse($event->date)->format('F')); ?></span>
                                        <span class="entry-date-month">
                                            <?php if($event->status == 1): ?>
                                                Upcomming..
                                            <?php else: ?>
                                                Completed
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                    <div class="xs-black-overlay"></div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="xs-event-content">
                                    <a href="/event/details/<?php echo e($event->id); ?>"><?php echo e($event->title); ?></a>
                                    <p><?php echo e($event->sort_para); ?></p>
                                    
                                    <a href="/event/details/<?php echo e($event->id); ?>" class="btn btn-primary">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
        </section>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Anandadhara/resources/views/frontend/content/allevent.blade.php ENDPATH**/ ?>