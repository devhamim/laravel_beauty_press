<?php if (\Illuminate\Support\Facades\Blade::check('readonly')): ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.alert','data' => ['type' => 'info','class' => 'pt-1 pb-1 mb-0','dismissable' => false]]); ?>
<?php $component->withName('utils.alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'info','class' => 'pt-1 pb-1 mb-0','dismissable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
        <?php echo app('translator')->get('The Application is currently in read only mode. All requests other than GET are disabled.'); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/abubd/anandadhara.abubd.co/resources/views/includes/partials/read-only.blade.php ENDPATH**/ ?>