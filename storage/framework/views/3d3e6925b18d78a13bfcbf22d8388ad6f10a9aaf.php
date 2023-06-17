
<?php $__env->startSection('content'); ?>
    <section class="xs-banner-inner-section parallax-window mrt"
        style="background-image:url(../../<?php echo e(get_setting('bottombanner_image')); ?>)">
        <div class="xs-black-overlay"></div>
        <div class="container">
            <div class="color-white xs-inner-banner-content">
                <h2>Event</h2>
                <p><?php echo e($event->title); ?></p>
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
                    <div class="col-md-12">
                        <div class="xs-event-banner">
                            <img src="<?php echo e(asset('/setting/banner/' . $event->single_event_banner)); ?>" alt="">
                        </div>
                        <div class="row">
                            <div class="col-lg-8 xs-event-wraper">
                                <div class="xs-event-content">
                                    <h4>Event Detalis</h4>
                                    <p><?php echo $event->description; ?></p>
                                </div>

                                <div class="xs-horizontal-tabs">

                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#facilities"
                                                role="tab">Facilities</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#mapLocation" role="tab">Map
                                                Location</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#contactUs" role="tab">Contact
                                                us</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="facilities" role="tabpanel">
                                            <p><?php echo $event->facility; ?></p>

                                        </div>
                                        <div class="tab-pane" id="mapLocation" role="tabpanel">
                                            <div id=""><?php echo $event->map; ?></div>
                                        </div>
                                        <div class="tab-pane" id="contactUs" role="tabpanel">
                                            <div class="xs-contact-form-wraper">
                                                <form action="/event/submit" method="POST" class="xs-contact-form">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="input-group">
                                                        <input type="text" name="name" id="xs-name"
                                                            class="form-control" placeholder="Enter Your Name.....">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text"><i class="fa fa-user"></i></div>
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="email" name="email" id="xs-email"
                                                            class="form-control" placeholder="Enter Your Email.....">
                                                        <input type="hidden" name="subject" value="<?php echo e($event->title); ?>">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text"><i class="fa fa-envelope-o"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="input-group massage-group">
                                                        <textarea name="massage" placeholder="Enter Your Message....." id="xs-massage" class="form-control" cols="30"
                                                            rows="10"></textarea>
                                                        <div class="input-group-append">
                                                            <div class="input-group-text"><i class="fa fa-pencil"></i></div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-success" type="submit">submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row xs-mb-60">
                                    <div class="col-md-6 xs-about-feature">
                                        <h3><?php echo e($event->event_title_1); ?></h3>
                                        <p><?php echo e($event->eventMission); ?></p>
                                    </div>
                                    <div class="col-md-6 xs-about-feature">
                                        <h3><?php echo e($event->event_title_2); ?></h3>
                                        <p><?php echo e($event->eventVission); ?></p>
                                    </div>
                                </div>
                                <div class="xs-about-feature xs-mb-30">
                                    <h3><?php echo e($event->event_title_3); ?></h3>
                                    <p class="lead"><?php echo e($event->ourVission); ?></p>
                                </div>
                                
                            </div>
                            <div class="col-lg-4">

                                <div class="xs-event-schedule-widget">
                                    <div class="media xs-event-schedule">
                                        <div class="d-flex xs-evnet-meta-date">
                                            <span
                                                class="xs-event-date"><?php echo e(Carbon\Carbon::parse($event->date)->format('d')); ?></span>
                                            <span
                                                class="xs-event-month"><?php echo e(Carbon\Carbon::parse($event->date)->format('F')); ?></span>
                                        </div>
                                        <div class="media-body">
                                            <h5><?php echo e($event->title); ?></h5>
                                        </div>
                                    </div>
                                    <ul class="list-group xs-list-group">
                                        <li class="d-flex justify-content-between">
                                            Organized by:
                                            <span><?php echo e($event->organized_by); ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            Start:
                                            <span><?php echo e($event->start); ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            Venue:
                                            <span><?php echo e($event->venue); ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            Phone:
                                            <span><?php echo e($event->phone); ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            Email:
                                            <span><?php echo e($event->email); ?></span>
                                        </li>
                                    </ul>
                                </div>
                                
                                <?php
                                    $sponsors = DB::table('sponsors')
                                        ->where('event_id', $event->id)
                                        ->where('is_active', 1)
                                        ->get();
                                ?>
                                <div class="xs-event-schedule-widget">
                                    <h3 class="widget-title">Event Sponsor</h3>
                                    <ul class="xs-event-sponsor clearfix">

                                        <?php $__currentLoopData = $sponsors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $sponsorbrands = DB::table('brands')
                                                    ->where('id', $sponsor->sponsor_id)
                                                    ->first();
                                            ?>
                                            <li><a href="#"><img
                                                        src="<?php echo e(asset('/setting/banner/' . $sponsorbrands->logo)); ?>"
                                                        alt=""></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Anandadhara/resources/views/frontend/content/eventdetails.blade.php ENDPATH**/ ?>