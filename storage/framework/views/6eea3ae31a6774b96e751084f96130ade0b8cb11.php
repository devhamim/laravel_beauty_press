<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.setting.blogs.update')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label>Blog Banner Title</label>
                            <input type="hidden" name="blogs_id" value="<?php echo e($blogs->id); ?>">
                            <input type="text" name="blog_ban_title" class="form-control"
                                placeholder="Blog Banner Title*" value="<?php echo e($blogs->blog_ban_title); ?>">
                        </div>

                        <div class="form-group">
                            <label>Blog Banner Image</label>
                            <input type="file" name="blog_ban_img" class="form-control" placeholder="Blog Banner Image*"
                                value="<?php echo e($blogs->blog_ban_img); ?>">
                        </div>

                        <div class="form-group">
                            <label>Blog Title</label>
                            <input type="text" name="blog_title" class="form-control" placeholder="Blog Title*"
                                value="<?php echo e($blogs->blog_title); ?>">
                        </div>

                        <div class="form-group">
                            <label>Blog Image</label>
                            <input type="file" name="blog_img" class="form-control" placeholder="Blog Image*"
                                value="<?php echo e($blogs->blog_img); ?>">
                        </div>

                        <div class="form-group">
                            <label>Blog Sort Description</label>
                            <input type="text" name="blog_sort" class="form-control" placeholder="Blog Sort Description*"
                                value="<?php echo e($blogs->blog_sort); ?>">
                        </div>
                        <div class="form-group">
                            <label>Blog Long Description</label>
                            <textarea name="blog_long" class="form-control" id="" cols="30" rows="5"
                                placeholder="Blog Long Description*"><?php echo e($blogs->blog_long); ?></textarea>
                        </div>


                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="is_active">
                                <option value="1" <?php if($blogs->is_active == 1): ?> selected <?php endif; ?>>Active</option>
                                <option value="0" <?php if($blogs->is_active == 0): ?> selected <?php endif; ?>>Deactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>





    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/backend/content/settings/blog/edit.blade.php ENDPATH**/ ?>