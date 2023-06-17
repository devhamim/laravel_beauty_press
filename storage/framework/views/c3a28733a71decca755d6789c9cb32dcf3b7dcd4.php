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
        $multis = DB::table('services')
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
                    <form action="<?php echo e(route('admin.setting.service.update')); ?>" enctype="multipart/form-data" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Banner Title</label>
                            <input type="text" name="ban_title" value="<?php echo e($notice->ban_title); ?>" class="form-control" placeholder="Title">

                        </div>
                        <div class="form-group">
                            <label>Banner Image</label>
                            <input type="file" name="ban_img" value="<?php echo e($notice->ban_img); ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="<?php echo e($notice->title); ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" rows="3" name="description" value="<?php echo e($notice->description); ?>" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                            <input type="hidden" name="oldimage" value="<?php echo e($notice->service_image); ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Service Title</label>
                            <input type="text" name="service_title" value="<?php echo e($notice->service_title); ?>"
                                class="form-control">
                            <input type="hidden" name="notice_id" value="<?php echo e($notice->id); ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Service Details</label>
                            <textarea type="text" name="service_details" rows="3" value="<?php echo e($notice->service_details); ?>"
                                class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Add to Homepage</label>
                            <select class="form-control" name="homepage">
                                <option value="1" <?php if($notice->homepage == 1): ?> selected <?php endif; ?>>Yes</option>
                                <option value="0" <?php if($notice->homepage == 0): ?> selected <?php endif; ?>>No</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="is_active">
                                <option value="1" <?php if($notice->is_active == 1): ?> selected <?php endif; ?>>Active</option>
                                <option value="0" <?php if($notice->is_active == 0): ?> selected <?php endif; ?>>Deactive</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php7 laravel\Anandadhara\resources\views/backend/content/settings/service/edit.blade.php ENDPATH**/ ?>