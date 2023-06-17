<?php $attributes = $attributes->exceptProps(['dismissable' => true, 'type' => 'success', 'ariaLabel' => __('Close')]); ?>
<?php foreach (array_filter((['dismissable' => true, 'type' => 'success', 'ariaLabel' => __('Close')]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div <?php echo e($attributes->merge(['class' => 'alert rounded-0 alert-'.$type])); ?> role="alert">
    <?php if($dismissable): ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="<?php echo e($ariaLabel); ?>">
            <span aria-hidden="true">&times;</span>
        </button>
    <?php endif; ?>

    <?php echo e($slot); ?>

</div>
<?php /**PATH D:\beauty spa\beauty press\resources\views/components/utils/alert.blade.php ENDPATH**/ ?>