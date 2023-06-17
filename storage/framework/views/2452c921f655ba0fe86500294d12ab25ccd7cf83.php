<?php $attributes = $attributes->exceptProps([
    'column',
    'sortingEnabled' => true,
    'sortable' => null,
    'direction' => null,
    'text' => null,
    'customAttributes' => [],
]); ?>
<?php foreach (array_filter(([
    'column',
    'sortingEnabled' => true,
    'sortable' => null,
    'direction' => null,
    'text' => null,
    'customAttributes' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if (! ($sortingEnabled && $sortable)): ?>
    <th <?php echo e($attributes->merge($customAttributes)); ?>>
        <?php echo e($text ?? $slot); ?>

    </th>
<?php else: ?>
    <th
        wire:click="sortBy('<?php echo e($column); ?>', '<?php echo e($text ?? $column); ?>')"
        <?php echo e($attributes->merge($customAttributes)); ?>

        style="cursor:pointer;"
    >
        <div class="d-flex align-items-center">
            <span><?php echo e($text); ?></span>

            <span class="relative d-flex align-items-center">
                <?php if($direction === 'asc'): ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-1" style="width:1em;height:1em;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                    </svg>
                <?php elseif($direction === 'desc'): ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-1" style="width:1em;height:1em;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                <?php else: ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-1" style="width:1em;height:1em;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                    </svg>
                <?php endif; ?>
            </span>
        </div>
    </th>
<?php endif; ?>
<?php /**PATH /home/anandadhara/public_html/vendor/rappasoft/laravel-livewire-tables/src/../resources/views/bootstrap-4/components/table/heading.blade.php ENDPATH**/ ?>