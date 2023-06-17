<div class="card">
    <?php if(isset($header)): ?>
        <div class="card-header">
            <?php echo e($header); ?>


            <?php if(isset($headerActions)): ?>
                <div class="d-inline-block float-right">
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
<?php /**PATH /home/anandadhara/public_html/resources/views/components/frontend/card.blade.php ENDPATH**/ ?>