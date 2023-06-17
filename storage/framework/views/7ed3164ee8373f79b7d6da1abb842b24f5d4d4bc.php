

<?php $__env->startSection('title', __('User Management')); ?>

<?php $__env->startSection('breadcrumb-links'); ?>
    <?php echo $__env->make('backend.auth.user.includes.breadcrumb-links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.backend.card','data' => []]); ?>
<?php $component->withName('backend.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('header', null, []); ?> 
            <?php echo app('translator')->get('User Management'); ?>
         <?php $__env->endSlot(); ?>

        <?php if($logged_in_user->hasAllAccess()): ?>
             <?php $__env->slot('headerActions', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['icon' => 'c-icon cil-plus','class' => 'card-header-action','href' => route('admin.auth.user.create'),'text' => __('Create User')]]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['icon' => 'c-icon cil-plus','class' => 'card-header-action','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.auth.user.create')),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Create User'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
        <?php endif; ?>

         <?php $__env->slot('body', null, []); ?> 
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('backend.users-table', [])->html();
} elseif ($_instance->childHasBeenRendered('53Yybe0')) {
    $componentId = $_instance->getRenderedChildComponentId('53Yybe0');
    $componentTag = $_instance->getRenderedChildComponentTagName('53Yybe0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('53Yybe0');
} else {
    $response = \Livewire\Livewire::mount('backend.users-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('53Yybe0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beauty spa\Anandadhara\resources\views/backend/auth/user/index.blade.php ENDPATH**/ ?>