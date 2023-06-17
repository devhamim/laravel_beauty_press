<?php $__env->startSection('content'); ?>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Service Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td style="height: 40%;" ><?php echo e($appointment->rel_to_service->title); ?></td>
                            <td style="height: 40%;" ><?php echo e($appointment->appointment_date); ?></td>
                            <td style="height: 40%;" ><?php echo e($appointment->appointment_time); ?></td>
                            <td style="height: 40%;" ><?php echo e($appointment->name); ?></td>
                            <td style="height: 40%;" ><?php echo e($appointment->email); ?></td>
                            <td style="height: 40%;" ><?php echo e($appointment->number); ?></td>
                            <td style="height: 40%;" ><?php echo e($appointment->message); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>

            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php7 laravel\Anandadhara\resources\views/backend/content/settings/appoinment/appoinment.blade.php ENDPATH**/ ?>