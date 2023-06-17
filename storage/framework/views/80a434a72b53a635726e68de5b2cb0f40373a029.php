

<?php $__env->startSection('title', 'Mixed Settings'); ?>

<?php
    $required = html()
        ->span('*')
        ->class('text-danger');
    $demoImg = 'img/backend/front-logo.png';
?>

<?php $__env->startSection('content'); ?>

    <?php
        $multis = DB::table('notices')
            ->where('is_active', 1)
            ->orwhere('is_active', 0)
            ->get();
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.setting.event.update')); ?>" enctype="multipart/form-data" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Thumb Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <input type="hidden" name="oldimage" value="<?php echo e($notice->image); ?>" class="form-control">
                                    <input type="hidden" name="event_id" value="<?php echo e($notice->id); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Banner Image</label>
                                    <input type="file" name="single_event_banner" class="form-control">
                                    <input type="hidden" name="oldsingle_event_banner"
                                        value="<?php echo e($notice->single_event_banner); ?>" class="form-control">

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" value="<?php echo e($notice->title); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Short Text</label>
                                    <input type="text" name="sort_para" value="<?php echo e($notice->sort_para); ?>"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="" class="editor form-control" col="10" row="3" name="description"><?php echo e($notice->description); ?></textarea>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Facilities</label>
                                    <textarea id="" class="editor form-control" col="3" row="1" name="facility"><?php echo e($notice->facility); ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Map</label>
                                    <textarea class="form-control" col="3" row="1" name="map"><?php echo e($notice->map); ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Event Mission Title</label>
                                    <textarea class="form-control" col="3" row="1" name="event_title_1"><?php echo e($notice->event_title_1); ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Event Mission</label>
                                    <textarea class="form-control" col="3" row="1" name="eventMission"><?php echo e($notice->eventMission); ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Event Vission Title</label>
                                    <textarea class="form-control" col="3" row="1" name="event_title_2"><?php echo e($notice->event_title_2); ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Event Vission</label>
                                    <textarea class="form-control" col="3" row="1" name="eventVission"><?php echo e($notice->eventVission); ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Our Vission Title</label>
                                    <textarea class="form-control" col="3" row="1" name="event_title_3"><?php echo e($notice->event_title_3); ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Our Vission</label>
                                    <textarea class="form-control" col="3" row="1" name="ourVission"><?php echo e($notice->ourVission); ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Organized By</label>
                                    <input type="text" name="organized_by" value="<?php echo e($notice->organized_by); ?>"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>date</label>
                                    <input type="date" name="date" value="<?php echo e($notice->date); ?>"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Start</label>
                                    <input type="time" name="start" value="<?php echo e($notice->start); ?>"
                                        class="form-control">

                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Venue</label>
                                    <input type="text" name="venue" value="<?php echo e($notice->venue); ?>"
                                        class="form-control">

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" value="<?php echo e($notice->email); ?>"
                                        class="form-control">

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" value="<?php echo e($notice->phone); ?>"
                                        class="form-control">

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Active/Deactive</label>
                                    <select class="form-control" name="is_active">
                                        <option value="1" <?php if($notice->is_active == 1): ?> selected <?php endif; ?>>Active
                                        </option>
                                        <option value="0" <?php if($notice->is_active == 0): ?> selected <?php endif; ?>>Deactive
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option value="1" <?php if($notice->status == 1): ?> selected <?php endif; ?>>Upcomming
                                        </option>
                                        <option value="0" <?php if($notice->is_active == 0): ?> selected <?php endif; ?>>Completed
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>





    </div>

    <?php
        $brands = DB::table('brands')
            ->where('is_active', 1)
            ->get();
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="<?php echo e(route('admin.setting.eventsponsor.store')); ?>"
                        enctype="multipart/form-data" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Event Sponsor</label>
                                    <select name="sponsor_id" class="form-control" required>
                                        <option selected disabled>Select Event Sponsor</option>
                                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                    <input type="hidden" name="event_sponsor_id" value="<?php echo e($notice->id); ?>"
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <!-- <table class="table table-bordered" id="dynamic_field">                                                                                                                                </table>   -->
                            <button type="submit" class="btn btn-info">Submit</button>
                            <!--<input value="Submit" />  -->
                        </div>


                    </form>

                </div>
            </div>
        </div>





    </div>

    <?php
        $sponsors = DB::table('sponsors')
            ->where('event_id', $notice->id)
            ->get();
    ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Event Sponsor</th>
                            <th>Name</th>
                            <th>Active/Deactive</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $sponsors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $sponsorbrands = DB::table('brands')
                                    ->where('id', $sponsor->sponsor_id)
                                    ->first();
                            ?>
                            <tr>
                                <td><img src="<?php echo e(asset('/setting/banner/' . optional($sponsorbrands)->logo)); ?>"
                                        style="height: 100px"></td>
                                <td><?php echo e(optional($sponsorbrands)->title); ?></td>

                                <td>
                                    <?php if(optional($sponsor)->is_active == 1): ?>
                                        <button class="btn btn-sm btn-primary">Active</button>
                                    <?php elseif(optional($sponsor)->is_active == 0): ?>
                                        <button class="btn btn-sm btn-danger">Deactive</button>
                                    <?php endif; ?>
                                </td>


                                <td>
                                    <a href="/admin/setting/eventsponsor/edit/<?php echo e($sponsor->id); ?>"
                                        class="btn btn-primary btn-sm editProduct">Edit</a>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>




<?php $__env->startPush('after-styles'); ?>
    <?php echo e(style(asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css'))); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
    <?php echo script(asset('assets/plugins/tinymce/jquery.tinymce.min.js')); ?>

    <?php echo script(asset('assets/plugins/tinymce/tinymce.min.js')); ?>

    <?php echo script(asset('assets/plugins/tinymce/editor-helper.js')); ?>

    <?php echo script(asset('assets/plugins/moment/moment.js')); ?>

    <?php echo script(asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')); ?>


    <script>
        $(document).ready(function() {
            simple_editor('.editor', 450);
            $('#datepicker-autoclose').datepicker({
                format: "dd/mm/yyyy",
                clearBtn: true,
                autoclose: true,
                todayHighlight: true,
            });

            $("#image").change(function() {
                readImageURL(this, $('#holder'));
            });
        });

        $(document).on('blur', "#post_title", function() {
            let postField = $(this);
            let post_title = postField.val();
            if (post_title) {
                ajax_slug_url(post_title);
                setTimeout(update, 1000); // 30 seconds
                $("#post_error").empty();
                postField.removeClass('is-invalid');
            } else {
                $("#post_error").text('Title must not empty');
                postField.addClass('is-invalid');
            }
        });

        $(function() {
            $(".form-check-input").click(function() {
                const status = $(this).val();
                if (status === "schedule") {
                    $("#scheduleDate").removeClass("d-none");
                } else if (status === "1") {
                    $("#for_New_upload").removeClass("d-none");
                } else if (status === "0") {
                    $("#for_New_upload").addClass("d-none");
                } else {
                    $("#scheduleDate").addClass("d-none");
                }
            });

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/anandadhara/public_html/resources/views/backend/content/settings/event/edit.blade.php ENDPATH**/ ?>