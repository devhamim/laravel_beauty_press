<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="<?php echo e(route('admin.setting.pricing.store')); ?>"
                        enctype="multipart/form-data" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Title*">
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="price" class="form-control" placeholder="Price*">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
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
                            <th>Title</th>
                            <th>Price</th>
                            <th>Active/Deactive</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pricings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pricing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td style="height: 40%"><?php echo e($pricing->title); ?></td>
                                <td style="height: 40%"><?php echo e($pricing->price); ?> TK</td>
                                <td style="height: 40%; width: 30%">
                                    <img style="height: 40%; width: 20%"
                                        src="<?php echo e(asset('backend_img/pricing')); ?>/<?php echo e($pricing->image); ?>" alt="">
                                </td>
                                <td>
                                    <?php if($pricing->is_active == 1): ?>
                                        <button class="btn btn-sm btn-primary">Active</button>
                                    <?php elseif($pricing->is_active == 0): ?>
                                        <button class="btn btn-sm btn-danger">Deactive</button>
                                    <?php endif; ?>
                                </td>


                                <td>
                                    <a href="<?php echo e(route('admin.setting.pricing.edit', $pricing->id)); ?>"
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/backend/content/settings/pricing/index.blade.php ENDPATH**/ ?>