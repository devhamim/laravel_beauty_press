<?php if($user->isAdmin()): ?>
    <?php echo app('translator')->get('Administrator'); ?>
<?php elseif($user->isUser()): ?>
    <?php echo app('translator')->get('User'); ?>
<?php else: ?>
    <?php echo app('translator')->get('N/A'); ?>
<?php endif; ?>
<?php /**PATH /home/anandadhara/public_html/resources/views/backend/auth/user/includes/type.blade.php ENDPATH**/ ?>