<?php if($paginationEnabled && $showPerPage): ?>
    <div class="ml-0 ml-md-2">
        <select
            wire:model="perPage"
            id="perPage"
            class="form-control"
        >
            <?php $__currentLoopData = $perPageAccepted; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item); ?>"><?php echo e($item === -1 ? __('All') : $item); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
<?php endif; ?>
<?php /**PATH /home/anandadhara/public_html/vendor/rappasoft/laravel-livewire-tables/src/../resources/views/bootstrap-4/includes/per-page.blade.php ENDPATH**/ ?>