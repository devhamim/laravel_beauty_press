<?php if($this->showBulkActionsDropdown): ?>
    <div class="mb-3 mb-md-0" id="<?php echo e($bulkKey = \Illuminate\Support\Str::random()); ?>-bulkActionsWrapper">
        <div class="dropdown d-block d-md-inline">
            <button class="btn dropdown-toggle d-block w-100 d-md-inline" type="button" id="<?php echo e($bulkKey); ?>-bulkActions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo app('translator')->get('Bulk Actions'); ?>
            </button>

            <div class="dropdown-menu dropdown-menu-right w-100" aria-labelledby="<?php echo e($bulkKey); ?>-bulkActions">
                <?php $__currentLoopData = $this->bulkActions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action => $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a
                        href="#"
                        wire:click.prevent="<?php echo e($action); ?>"
                        wire:key="bulk-action-<?php echo e($action); ?>"
                        class="dropdown-item"
                    >
                        <?php echo e($title); ?>

                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /home/anandadhara/public_html/vendor/rappasoft/laravel-livewire-tables/src/../resources/views/bootstrap-4/includes/bulk-actions.blade.php ENDPATH**/ ?>