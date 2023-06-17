<div>
    <?php if($showFilters && count($this->getFiltersWithoutSearch())): ?>
        <div class="mb-3">
            <small><?php echo app('translator')->get('Applied Filters'); ?>:</small>

            <?php $__currentLoopData = $filters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($key !== 'search' && filled($value)): ?>
                    <span
                        wire:key="filter-pill-<?php echo e($key); ?>"
                        class="badge badge-pill badge-info d-inline-flex align-items-center"
                    >
                        <?php echo e($filterNames[$key] ?? collect($this->columns())->pluck('text', 'column')->get($key, isset($customFilters[$key]) && property_exists($customFilters[$key], 'name') ? $customFilters[$key]->name : ucwords(strtr($key, ['_' => ' ', '-' => ' '])))); ?>:
                        <?php if(isset($customFilters[$key]) && method_exists($customFilters[$key], 'options')): ?>
                            <?php if(is_array($value)): ?>
                                <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $selectedValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($customFilters[$key]->options()[$selectedValue] ?? $selectedValue); ?><?php if(!$loop->last): ?>, <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <?php echo e($customFilters[$key]->options()[$value] ?? $value); ?>

                            <?php endif; ?>
                        <?php elseif(is_array($value)): ?>
                            <?php echo e(implode(', ', $value)); ?>

                        <?php else: ?>
                            <?php echo e(ucwords(strtr($value, ['_' => ' ', '-' => ' ']))); ?>

                        <?php endif; ?>

                        <a
                            href="#"
                            wire:click.prevent="removeFilter('<?php echo e($key); ?>')"
                            class="text-white ml-2"
                        >
                            <span class="sr-only"><?php echo app('translator')->get('Remove filter option'); ?></span>
                            <svg style="width:.5em;height:.5em" stroke="currentColor" fill="none" viewBox="0 0 8 8">
                                <path stroke-linecap="round" stroke-width="1.5" d="M1 1l6 6m0-6L1 7" />
                            </svg>
                        </a>
                    </span>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <a
                href="#"
                wire:click.prevent="resetFilters"
                class="badge badge-pill badge-light"
            >
                <?php echo app('translator')->get('Clear'); ?>
            </a>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH D:\beauty spa\Anandadhara\vendor\rappasoft\laravel-livewire-tables\src\/../resources/views/bootstrap-4/includes/filter-pills.blade.php ENDPATH**/ ?>