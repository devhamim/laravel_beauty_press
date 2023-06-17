<?php if($reorderEnabled): ?>
    <div class="mr-0 mr-md-2 mb-3 mb-md-0">
        <button
            wire:click="<?php echo e($reordering ? 'disableReordering' : 'enableReordering'); ?>"
            type="button"
            class="btn btn-default d-block w-100 d-md-inline"
        >
            <?php if($reordering): ?>
                <?php echo app('translator')->get('Done Reordering'); ?>
            <?php else: ?>
                <?php echo app('translator')->get('Reorder'); ?>
            <?php endif; ?>
        </button>
    </div>
<?php endif; ?>
<?php /**PATH D:\beauty spa\Anandadhara\vendor\rappasoft\laravel-livewire-tables\src\/../resources/views/bootstrap-4/includes/reorder.blade.php ENDPATH**/ ?>