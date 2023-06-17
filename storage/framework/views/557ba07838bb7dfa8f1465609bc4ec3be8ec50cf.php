<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.setting.team.update')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <input type="hidden" name="about_team_id" value="<?php echo e($about_team->id); ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="editor form-control"
                                value="<?php echo e($about_team->name); ?>">
                        </div>
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" name="position" class="editor form-control"
                                value="<?php echo e($about_team->position); ?>">
                        </div>

                        <div class="form-group">
                            <label>Team Image</label>
                            <input type="file" name="team_img" value="<?php echo e($about_team->team_img); ?>" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="is_active">
                                <option value="1" <?php if($about_team->is_active == 1): ?> selected <?php endif; ?>>Active</option>
                                <option value="0" <?php if($about_team->is_active == 0): ?> selected <?php endif; ?>>Deactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>





    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/backend/content/settings/team/edit.blade.php ENDPATH**/ ?>