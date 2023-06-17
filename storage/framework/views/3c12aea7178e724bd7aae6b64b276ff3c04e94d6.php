<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="<?php echo e(route('admin.setting.team.store')); ?>" method="POST"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name*">
                        </div>
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" name="position" class="form-control" placeholder="Position*">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="team_img" class="form-control">
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
                            <th>Name</th>
                            <th>Position</th>
                            <th>Image</th>
                            <th>Active/Deactive</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td style="height: 30%; width: 20%"><?php echo e($team->name); ?></td>
                                <td style="height: 30%; width: 20%"><?php echo e($team->position); ?></td>
                                <td style="height: 30%; width: 30%">
                                    <img style="height: 30%; width: 30%"
                                        src="<?php echo e(asset('backend_img/about')); ?>/<?php echo e($team->team_img); ?>" alt="">
                                </td>
                                <td>
                                    <?php if($team->is_active == 1): ?>
                                        <button class="btn btn-sm btn-primary">Active</button>
                                    <?php elseif($team->is_active == 0): ?>
                                        <button class="btn btn-sm btn-danger">Deactive</button>
                                    <?php endif; ?>
                                </td>


                                <td>
                                    <a href="<?php echo e(route('admin.setting.team.edit', $team->id)); ?>"
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/backend/content/settings/team/index.blade.php ENDPATH**/ ?>