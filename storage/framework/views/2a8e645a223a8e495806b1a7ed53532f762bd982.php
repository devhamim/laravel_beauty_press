<?php $attributes = $attributes->exceptProps(['url' => null, 'target' => '_self', 'reordering' => false, 'customAttributes' => [], 'wireclick' => null]); ?>
<?php foreach (array_filter((['url' => null, 'target' => '_self', 'reordering' => false, 'customAttributes' => [], 'wireclick' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if(!$reordering && (method_exists($attributes, 'has') ? $attributes->has('wire:sortable.item') : array_key_exists('wire:sortable.item', $attributes->getAttributes()))): ?>
    <?php
        $attributes = $attributes->filter(fn ($value, $key) => $key !== 'wire:sortable.item');
    ?>
<?php endif; ?>

<tr
    <?php echo e($attributes->merge($customAttributes)->merge(['style' => ($url || $wireclick) ? 'cursor: pointer;' : ''])); ?>


    <?php if($url): ?>
        onclick="window.open('<?php echo e($url); ?>', '<?php echo e($target); ?>')"
    <?php elseif($wireclick): ?>
        wire:click="<?php echo e($wireclick); ?>"
    <?php endif; ?>
>
    <?php echo e($slot); ?>

</tr>
<?php /**PATH /home/anandadhara/public_html/vendor/rappasoft/laravel-livewire-tables/src/../resources/views/bootstrap-4/components/table/row.blade.php ENDPATH**/ ?>