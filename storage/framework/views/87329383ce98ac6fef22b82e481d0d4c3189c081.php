

<?php $__env->startSection('title', 'Mixed Settings'); ?>

<?php
    $required = html()
        ->span('*')
        ->class('text-danger');
    $demoImg = 'img/backend/front-logo.png';
?>

<?php $__env->startSection('content'); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        .modal-confirm {
            color: #636363;
            width: 400px;
        }

        .modal-confirm .modal-content {
            padding: 20px;
            border-radius: 5px;
            border: none;
            text-align: center;
            font-size: 14px;
        }

        .modal-confirm .modal-header {
            border-bottom: none;
            position: relative;
        }

        .modal-confirm h4 {
            text-align: center;
            font-size: 26px;
            margin: 30px 0 -10px;
        }

        .modal-confirm .close {
            position: absolute;
            top: -5px;
            right: -2px;
        }

        .modal-confirm .modal-body {
            color: #999;
        }

        .modal-confirm .modal-footer {
            border: none;
            text-align: center;
            border-radius: 5px;
            font-size: 13px;
            padding: 10px 15px 25px;
        }

        .modal-confirm .modal-footer a {
            color: #999;
        }

        .modal-confirm .icon-box {
            width: 80px;
            height: 80px;
            margin: 0 auto;
            border-radius: 50%;
            z-index: 9;
            text-align: center;
            border: 3px solid #f15e5e;
        }

        .modal-confirm .icon-box i {
            color: #f15e5e;
            font-size: 46px;
            display: inline-block;
            margin-top: 13px;
        }

        .modal-confirm .btn,
        .modal-confirm .btn:active {
            color: #fff;
            border-radius: 4px;
            background: #60c7c1;
            text-decoration: none;
            transition: all 0.4s;
            line-height: normal;
            min-width: 120px;
            border: none;
            min-height: 40px;
            border-radius: 3px;
            margin: 0 5px;
        }

        .modal-confirm .btn-secondary {
            background: #c1c1c1;
        }

        .modal-confirm .btn-secondary:hover,
        .modal-confirm .btn-secondary:focus {
            background: #a8a8a8;
        }

        .modal-confirm .btn-danger {
            background: #f15e5e;
        }

        .modal-confirm .btn-danger:hover,
        .modal-confirm .btn-danger:focus {
            background: #ee3535;
        }

        .trigger-btn {
            display: inline-block;
            margin: 100px auto;
        }
    </style>
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
                    <form action="<?php echo e(route('admin.setting.gallery.update')); ?>" enctype="multipart/form-data" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <input type="hidden" name="oldimage" value="<?php echo e($notice->image); ?>" class="form-control">
                                    <input type="hidden" name="gallery_id" value="<?php echo e($notice->id); ?>"
                                        class="form-control">
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Active/Deactive</label>
                                    <select class="form-control" name="is_active">
                                        <option value="1" <?php if($notice->is_active == 1): ?> selected <?php endif; ?>>Active
                                        </option>
                                        <option value="0" <?php if($notice->is_active == 0): ?> selected <?php endif; ?>>Deactive
                                        </option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>





    </div>

    <?php
        $brands = DB::table('brands')
            ->where('is_active', 1)
            ->get();
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="<?php echo e(route('admin.setting.eventsponsor.store')); ?>"
                        enctype="multipart/form-data" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Event Sponsor</label>
                                    <select name="sponsor_id" class="form-control" required>
                                        <option selected disabled>Select Event Sponsor</option>
                                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                    <input type="hidden" name="event_sponsor_id" value="<?php echo e($notice->id); ?>"
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <!-- <table class="table table-bordered" id="dynamic_field">                                                                                                                                </table>   -->
                            <button type="submit" class="btn btn-info">Submit</button>
                            <!--<input value="Submit" />  -->
                        </div>


                    </form>

                </div>
            </div>
        </div>





    </div>

    <?php
        $sponsors = DB::table('sponsors')
            ->where('event_id', $notice->id)
            ->get();
    ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Event Sponsor</th>
                            <th>Name</th>
                            <th>Active/Deactive</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $sponsors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $sponsorbrands = DB::table('brands')
                                    ->where('id', $sponsor->sponsor_id)
                                    ->first();
                            ?>
                            <tr>
                                <td><img src="<?php echo e(asset('/setting/banner/' . optional($sponsorbrands)->logo)); ?>"
                                        style="height: 100px"></td>
                                <td><?php echo e(optional($sponsorbrands)->title); ?></td>

                                <td>
                                    <?php if(optional($sponsor)->is_active == 1): ?>
                                        <button class="btn btn-sm btn-primary">Active</button>
                                    <?php elseif(optional($sponsor)->is_active == 0): ?>
                                        <button class="btn btn-sm btn-danger">Deactive</button>
                                    <?php endif; ?>
                                </td>


                                <td>
                                    <a href="/admin/setting/eventsponsor/edit/<?php echo e($sponsor->id); ?>"
                                        class="btn btn-primary btn-sm editProduct">Edit</a>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#default'
        });
    </script>


<?php $__env->stopSection(); ?>




<?php $__env->startPush('after-scripts'); ?>
    <?php echo e(script('assets/js/jscolor.js')); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/backend/content/settings/gallery/edit.blade.php ENDPATH**/ ?>