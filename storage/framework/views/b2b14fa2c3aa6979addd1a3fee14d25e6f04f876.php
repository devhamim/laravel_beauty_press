<div class="card">
    <?php if(isset($header)): ?>
        <div class="card-header">
            <h2 class="card-title"><?php echo e($header); ?></h2>
            <?php if(isset($headerActions)): ?>
                <div class="btn-toolbar float-right" role="toolbar" aria-label="<?php echo app('translator')->get('labels.general.toolbar_btn_groups'); ?>">
                    <?php echo e($headerActions); ?>

                </div><!--card-header-actions-->
            <?php endif; ?>
        </div><!--card-header-->
    <?php endif; ?>

    <?php if(isset($body)): ?>
        <div class="card-body">
            <?php echo e($body); ?>

        </div><!--card-body-->
    <?php endif; ?>

    <?php if(isset($footer)): ?>
        <div class="card-footer">
            <?php echo e($footer); ?>

        </div><!--card-footer-->
    <?php endif; ?>
</div><!--card-->
<?php /**PATH D:\php7 laravel\Anandadhara\resources\views/components/backend/card.blade.php ENDPATH**/ ?>