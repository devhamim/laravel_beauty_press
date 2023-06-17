<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.setting.contactBanner.update')); ?>" method="POST"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <input type="hidden" name="contact_banner_id" value="<?php echo e($contact_banner->id); ?>">
                            <label>Contact Title</label>
                            <textarea id="" class="editor form-control" col="10" row="3" name="contact_title"><?php echo e($contact_banner->contact_title); ?></textarea>
                        </div>

                        <div class="form-group">
                            <label>Contact Image</label>
                            <input type="file" name="contact_img" value="<?php echo e($contact_banner->contact_img); ?>"
                                class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="is_active">
                                <option value="1" <?php if($contact_banner->is_active == 1): ?> selected <?php endif; ?>>Active</option>
                                <option value="0" <?php if($contact_banner->is_active == 0): ?> selected <?php endif; ?>>Deactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>





    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/backend/content/settings/contact/edit.blade.php ENDPATH**/ ?>