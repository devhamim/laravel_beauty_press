<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.setting.video.update')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <input type="hidden" name="videos_id" value="<?php echo e($videos->id); ?>">
                            <label>Video Title</label>
                            <textarea id="" class="editor form-control" col="10" row="3" name="video_title"><?php echo e($videos->video_title); ?></textarea>
                        </div>

                        <div class="form-group">
                            <label>Video Url</label>
                            <input type="text" name="video_url" value="<?php echo e($videos->video_url); ?>" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="is_active">
                                <option value="1" <?php if($videos->is_active == 1): ?> selected <?php endif; ?>>Active</option>
                                <option value="0" <?php if($videos->is_active == 0): ?> selected <?php endif; ?>>Deactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>





    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/backend/content/settings/videos/edit.blade.php ENDPATH**/ ?>