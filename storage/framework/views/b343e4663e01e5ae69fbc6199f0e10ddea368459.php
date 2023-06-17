<div>
    <?php if($showSorting && count($sorts)): ?>
        <div class="mb-3">
            <small><?php echo app('translator')->get('Applied Sorting'); ?>:</small>

            <?php $__currentLoopData = $sorts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $col => $dir): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span
                    wire:key="sorting-pill-<?php echo e($col); ?>"
                    class="badge badge-pill badge-info d-inline-flex align-items-center"
                >
                    <span><?php echo e($sortNames[$col] ?? collect($this->columns())->pluck('text', 'column')->get($col, ucwords(strtr($col, ['_' => ' ', '-' => ' '])))); ?>: <?php echo e($dir === 'asc' ? ($sortDirectionNames[$col]['asc'] ?? 'A-Z') : ($sortDirectionNames[$col]['desc'] ?? 'Z-A')); ?></span>

                    <a
                        href="#"
                        wire:click.prevent="removeSort('<?php echo e($col); ?>')"
                        class="text-white ml-2"
                    >
                        <span class="sr-only"><?php echo app('translator')->get('Remove sort option'); ?></span>
                        <svg style="width:.5em;height:.5em" stroke="currentColor" fill="none" viewBox="0 0 8 8">
                            <path stroke-linecap="round" stroke-width="1.5" d="M1 1l6 6m0-6L1 7" />
                        </svg>
                    </a>
                </span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <a
                href="#"
                wire:click.prevent="resetSorts"
                class="badge badge-pill badge-light"
            >
                <?php echo app('translator')->get('Clear'); ?>
            </a>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/anandadhara/public_html/vendor/rappasoft/laravel-livewire-tables/src/../resources/views/bootstrap-4/includes/sorting-pills.blade.php ENDPATH**/ ?>