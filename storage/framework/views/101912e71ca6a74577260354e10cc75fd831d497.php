<?php if($showPagination): ?>
    <?php if($paginationEnabled && $rows->lastPage() > 1): ?>
        <div class="row">
            <div class="col-12 col-md-6 overflow-auto">
                <?php echo e($rows->links()); ?>

            </div>

            <div class="col-12 col-md-6 text-center text-md-right text-muted">
                <span><?php echo app('translator')->get('Showing'); ?></span>
                <strong><?php echo e($rows->count() ? $rows->firstItem() : 0); ?></strong>
                <span><?php echo app('translator')->get('to'); ?></span>
                <strong><?php echo e($rows->count() ? $rows->lastItem() : 0); ?></strong>
                <span><?php echo app('translator')->get('of'); ?></span>
                <strong><?php echo e($rows->total()); ?></strong>
                <span><?php echo app('translator')->get('results'); ?></span>
            </div>
        </div>
    <?php else: ?>
        <div class="row">
            <div class="col-12 text-muted">
                <?php echo app('translator')->get('Showing'); ?>
                <strong><?php echo e($rows->count()); ?></strong>
                <?php echo app('translator')->get('results'); ?>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH D:\beauty spa\Anandadhara\vendor\rappasoft\laravel-livewire-tables\src\/../resources/views/bootstrap-4/includes/pagination.blade.php ENDPATH**/ ?>