<select
    onclick="event.stopPropagation();"
    wire:model="filters.<?php echo e($key); ?>"
    id="filter-<?php echo e($key); ?>"
    class="form-control"
>
    <?php $__currentLoopData = $filter->options(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php /**PATH /home/anandadhara/public_html/vendor/rappasoft/laravel-livewire-tables/src/../resources/views/bootstrap-4/includes/filter-type-select.blade.php ENDPATH**/ ?>