<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="<?php echo e(route('admin.setting.about.store')); ?>" method="POST"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>About Banner Title</label>
                            <input type="text" name="about_title" class="form-control" placeholder="About Banner Title*">
                        </div>

                        <div class="form-group">
                            <label>About Banner Image</label>
                            <input type="file" name="about_img" class="form-control" placeholder="About Banner Image*">
                        </div>

                        <div class="table-responsive">

                            <button type="submit" class="btn btn-info">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>





    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>About Banner Title</th>
                            <th>About Banner Image</th>
                            <th>Active/Deactive</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $about_banner_imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td style="height: 40%; width: 40%"><?php echo e($banner->about_title); ?></td>
                                <td style="height: 40%; width: 40%">
                                    <img style="height: 40%; width: 40%"
                                        src="<?php echo e(asset('backend_img/about')); ?>/<?php echo e($banner->about_img); ?>" alt="">
                                </td>
                                <td>
                                    <?php if($banner->is_active == 1): ?>
                                        <button class="btn btn-sm btn-primary">Active</button>
                                    <?php elseif($banner->is_active == 0): ?>
                                        <button class="btn btn-sm btn-danger">Deactive</button>
                                    <?php endif; ?>
                                </td>


                                <td>
                                    <a href="<?php echo e(route('admin.setting.about.edit', $banner->id)); ?>"
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/backend/content/settings/about/index.blade.php ENDPATH**/ ?>