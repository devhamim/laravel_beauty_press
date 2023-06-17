<?php if($user->hasTwoFactorEnabled()): ?>
    <span class="badge badge-success" data-toggle="tooltip" title="<?php echo e(timezone()->convertToLocal($user->twoFactorAuth->enabled_at)); ?>"><?php echo app('translator')->get('Yes'); ?></span>
<?php else: ?>
    <span class="badge badge-danger"><?php echo app('translator')->get('No'); ?></span>
<?php endif; ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Anandadhara/resources/views/backend/auth/user/includes/2fa.blade.php ENDPATH**/ ?>