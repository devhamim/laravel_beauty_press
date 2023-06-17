<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.setting.secrets.update')); ?>" enctype="multipart/form-data" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <input type="hidden" name="secret_id" value="<?php echo e($secrets->id); ?>">
                            <label>Description</label>
                            <textarea id="" class="editor form-control" col="10" row="3" name="secrets_des"><?php echo e($secrets->secrets_des); ?></textarea>
                        </div>

                        <div class="form-group">
                            <label>Image Left</label>
                            <input type="file" name="secrets_img_l" class="form-control">
                            <input type="hidden" name="secrets_img_l" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Image Right</label>
                            <input type="file" name="secrets_img_r" class="form-control">
                            <input type="hidden" name="secrets_img_r" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="is_active">
                                <option value="1" <?php if($secrets->is_active == 1): ?> selected <?php endif; ?>>Active</option>
                                <option value="0" <?php if($secrets->is_active == 0): ?> selected <?php endif; ?>>Deactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>





    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/backend/content/settings/secrets/secrets_edit.blade.php ENDPATH**/ ?>