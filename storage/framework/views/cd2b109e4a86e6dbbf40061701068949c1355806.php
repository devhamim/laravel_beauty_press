<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.setting.pricings.update')); ?>" enctype="multipart/form-data" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <input type="hidden" name="pricings_id" value="<?php echo e($pricings->id); ?>">
                            <label>Title</label>
                            <input type="text" name="title" class="editor form-control" value="<?php echo e($pricings->title); ?>">
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="price" value="<?php echo e($pricings->price); ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" value="<?php echo e($pricings->image); ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="is_active">
                                <option value="1" <?php if($pricings->is_active == 1): ?> selected <?php endif; ?>>Active</option>
                                <option value="0" <?php if($pricings->is_active == 0): ?> selected <?php endif; ?>>Deactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>





    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/backend/content/settings/pricing/edit.blade.php ENDPATH**/ ?>