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
$multis = DB::table('projects')
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
                <form class="form-horizontal" action="<?php echo e(route('admin.setting.service.store')); ?>" enctype="multipart/form-data" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Project Image</label>
                        <input type="file" name="image[]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Header Title</label>
                        <input type="text" name="title[]" class="form-control">

                    </div>
                    <div class="form-group">
                        <label>Bottom Title</label>
                        <input type="text" name="bottom_title[]" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Details</label>
                        <textarea type="text" class="form-control" rows="5" name="details[]" id="details" placeholder="Details"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Galary</label>
                        <input type="file" class="form-control" name="photos[]" multiple />
                    </div>
                    <div class="table-responsive">
                        
                        <button type="submit" class="btn btn-info">Submit</button>
                        <!--<input value="Submit" />  -->
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
                        <th>Image</th>
                        <th>Title</th>
                        <th>Details</th>
                        <th>Active/Deactive</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $multis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $multi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><img src="<?php echo e(asset('/setting/banner/' . $multi->image)); ?>" style="height: 100px"></td>
                        <td><?php echo e($multi->header_title ?? null); ?></td>
                        <td><?php echo e($multi->details ?? null); ?></td>

                        <td>
                            <?php if($multi->is_active == 1): ?>
                            <button class="btn btn-sm btn-primary">Active</button>
                            <?php elseif($multi->is_active == 0): ?>
                            <button class="btn btn-sm btn-danger">Deactive</button>
                            <?php endif; ?>
                        </td>


                        <td>
                            <a href="/admin/setting/service/edit/<?php echo e($multi->id); ?>" class="btn btn-primary btn-sm editProduct">Edit</a>

                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>

            </table>
        </div>
    </div>
</div>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var postURL = "<?php echo url('addmore'); ?>";
        var i = 1;


        $('#add').click(function() {
            i++;
            $('#dynamic_field').append('<tr id="row' + i +
                '" class="dynamic-added"><td><input type="file" name="multiimage[]" placeholder="multiimage" class="form-control name_list" /></td><td><input type="text" name="title[]" placeholder="Title" class="form-control name_list" /></td><td><textarea class="form-control" col="10" row="3" name="description[]"></textarea></td><td><button type="button" name="remove" id="' +
                i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });


        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });


    });

    tinymce.init({
        selector: 'textarea#default'
    });
</script>



<?php $__env->stopSection(); ?>




<?php $__env->startPush('after-scripts'); ?>
<?php echo e(script('assets/js/jscolor.js')); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Anandadhara/resources/views/backend/content/settings/project/index.blade.php ENDPATH**/ ?>