<?php if($user->isVerified()): ?>
    <span class="badge badge-success" data-toggle="tooltip" title="<?php echo e(timezone()->convertToLocal($user->email_verified_at)); ?>"><?php echo app('translator')->get('Yes'); ?></span>
<?php else: ?>
    <span class="badge badge-danger"><?php echo app('translator')->get('No'); ?></span>
<?php endif; ?>
<?php /**PATH /home/anandadhara/public_html/resources/views/backend/auth/user/includes/verified.blade.php ENDPATH**/ ?>