
<?php $__env->startSection('content'); ?>
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
    <main class="xs-main">

        <section class="xs-contact-section-v2">
            <div class="container">
                <div class="xs-contact-container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="xs-contact-form-wraper">
                                <h4>Contact Us</h4>
                                <form action="/contact/submit" method="POST" id=""
                                    class="xs-contact-form contact-form-v2">
                                    <?php echo csrf_field(); ?>
                                    <div class="input-group">
                                        <input type="text" name="name" id="xs-name" class="form-control"
                                            placeholder="Enter Your Name.....">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <input type="email" name="email" id="xs-email" class="form-control"
                                            placeholder="Enter Your Email.....">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" name="subject" id="xs-email" class="form-control"
                                            placeholder="Enter Your Subject.....">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-pencil"></i></div>
                                        </div>
                                    </div>
                                    <div class="input-group massage-group">
                                        <textarea name="massage" placeholder="Enter Your Message....." id="xs-massage" class="form-control" cols="30"
                                            rows="10"></textarea>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-pencil"></i></div>
                                        </div>
                                    </div>
                                    <button class="btn btn-success" type="submit" id="xs-submit">submit</button>
                                    <?php if($message = Session::get('success')): ?>
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong><?php echo e($message); ?></strong>
                                        </div>
                                    <?php endif; ?>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6" style="color:white">
                            <div><strong>Phone:</strong> <?php echo e(get_setting('office_phone')); ?></div>
                            <div><strong>Email:</strong> <?php echo e(get_setting('office_email')); ?></div>
                            <br>

                            <?php echo get_setting('office_map_iframe_url'); ?>


                        </div>
                    </div>
                </div>
            </div>


        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/anandadhara/public_html/resources/views/frontend/content/contact.blade.php ENDPATH**/ ?>