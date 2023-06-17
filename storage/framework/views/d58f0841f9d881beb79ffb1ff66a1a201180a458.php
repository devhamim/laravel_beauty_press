<form method="post" <?php echo e($attributes->merge(['action' => '#', 'class' => 'form-horizontal'])); ?>>
    <?php echo csrf_field(); ?>

    <?php echo e($slot); ?>

</form>
<?php /**PATH D:\beauty spa\Anandadhara\resources\views/components/forms/post.blade.php ENDPATH**/ ?>