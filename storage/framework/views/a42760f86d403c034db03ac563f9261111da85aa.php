<?php $attributes = $attributes->exceptProps([
    'action' => '#',
    'method' => 'POST',
    'name' => '',
    'formClass' => 'd-inline',
    'buttonClass' => '',
    'icon' => false,
    'permission' => false,
]); ?>
<?php foreach (array_filter(([
    'action' => '#',
    'method' => 'POST',
    'name' => '',
    'formClass' => 'd-inline',
    'buttonClass' => '',
    'icon' => false,
    'permission' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if($permission): ?>
    <?php if($logged_in_user->can($permission)): ?>
        <form method="POST" action="<?php echo e($action); ?>" name="<?php echo e($name); ?>" class="<?php echo e($formClass); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field($method); ?>

            <button type="submit" class="<?php echo e($buttonClass); ?>">
                <?php if($icon): ?><i class="<?php echo e($icon); ?>"></i> <?php endif; ?><?php echo e($slot); ?>

            </button>
        </form>
    <?php endif; ?>
<?php else: ?>
    <form method="POST" action="<?php echo e($action); ?>" name="<?php echo e($name); ?>" class="<?php echo e($formClass); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field($method); ?>

        <button type="submit" class="<?php echo e($buttonClass); ?>">
            <?php if($icon): ?><i class="<?php echo e($icon); ?>"></i> <?php endif; ?><?php echo e($slot); ?>

        </button>
    </form>
<?php endif; ?>
<?php /**PATH /home/anandadhara/public_html/resources/views/components/utils/form-button.blade.php ENDPATH**/ ?>