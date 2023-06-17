<?php $attributes = $attributes->exceptProps(['customAttributes' => []]); ?>
<?php foreach (array_filter((['customAttributes' => []]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<td <?php echo e($attributes->merge($customAttributes)); ?>>
    <?php echo e($slot); ?>

</td>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Anandadhara/vendor/rappasoft/laravel-livewire-tables/src/../resources/views/bootstrap-4/components/table/cell.blade.php ENDPATH**/ ?>