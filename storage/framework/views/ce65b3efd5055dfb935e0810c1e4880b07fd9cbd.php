<?php if (is_impersonating()) : ?>
    <div class="alert alert-warning pt-1 pb-1 mb-0">
        <?php echo app('translator')->get('You are currently logged in as :name.', ['name' => $logged_in_user->name]); ?> <a href="<?php echo e(route('impersonate.leave')); ?>"><?php echo app('translator')->get('Return to your account'); ?></a>.
    </div><!--alert alert-warning-->
<?php endif; ?>
<?php /**PATH D:\beauty spa\Anandadhara\resources\views/includes/partials/logged-in-as.blade.php ENDPATH**/ ?>