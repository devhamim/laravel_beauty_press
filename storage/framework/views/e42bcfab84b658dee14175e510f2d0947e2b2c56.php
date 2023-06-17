<?php $attributes = $attributes->exceptProps(['customSecondaryHeader' => false, 'useHeaderAsFooter' => false, 'customFooter' => false]); ?>
<?php foreach (array_filter((['customSecondaryHeader' => false, 'useHeaderAsFooter' => false, 'customFooter' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="<?php echo e($this->responsive ? 'table-responsive' : ''); ?>">
    <table <?php echo e($attributes->except(['wire:sortable', 'class'])); ?> class="<?php echo e(trim($attributes->get('class')) ?: 'table table-striped'); ?>">
        <thead>
            <tr>
                <?php echo e($head); ?>

            </tr>
        </thead>

        <tbody <?php echo e($attributes->only('wire:sortable')); ?>>
            <?php if($customSecondaryHeader): ?>
                <?php echo e($customSecondaryHead); ?>

            <?php endif; ?>

            <?php echo e($body); ?>

        </tbody>

        <?php if($useHeaderAsFooter || $customFooter): ?>
            <tfoot>
                <?php if($useHeaderAsFooter): ?>
                    <tr>
                        <?php echo e($head); ?>

                    </tr>
                <?php elseif($customFooter): ?>
                    <?php echo e($foot); ?>

                <?php endif; ?>
            </tfoot>
        <?php endif; ?>
    </table>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Anandadhara/vendor/rappasoft/laravel-livewire-tables/src/../resources/views/bootstrap-4/components/table/table.blade.php ENDPATH**/ ?>