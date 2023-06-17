




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
                    <form action="<?php echo e(route('admin.setting.page.update')); ?>" enctype="multipart/form-data" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                            <input type="hidden" name="oldimage" value="<?php echo e($notice->image); ?>" class="form-control">


                        </div>
                        <div class="form-group">
                            <label>Background Color</label>
                            <input type="input" name="bgcolor" value="<?php echo e($notice->bgcolor); ?>" class="form-control">

                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="<?php echo e($notice->title); ?>" class="form-control">
                            <input type="hidden" name="notice_id" value="<?php echo e($notice->id); ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea id="" class="editor form-control" col="10" row="3" name="description"><?php echo e($notice->description); ?></textarea>


                        </div>
                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="is_active">
                                <option value="1" <?php if($notice->is_active == 1): ?> selected <?php endif; ?>>Active</option>
                                <option value="0" <?php if($notice->is_active == 0): ?> selected <?php endif; ?>>Deactive</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" name="slug" value="<?php echo e($notice->slug); ?>" class="form-control">

                        </div>
                        <div class="form-group">
                            <input type="checkbox" <?php if($notice->hearder == 1): ?> checked <?php endif; ?> id="vehicle1"
                                name="hearder" value="1">
                            <label for="vehicle1">Header</label><br>
                            <input type="checkbox" <?php if($notice->footer_right == 3): ?> checked <?php endif; ?> id="vehicle3"
                                name="footer_right" value="3">
                            <label for="vehicle3"> Footer Right</label><br><br>

                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Anandadhara/resources/views/backend/content/settings/page/edit.blade.php ENDPATH**/ ?>