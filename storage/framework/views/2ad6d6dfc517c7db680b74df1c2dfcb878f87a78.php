

<?php $__env->startSection('title', __('Role Management')); ?>

<?php $__env->startSection('content'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.backend.card','data' => []]); ?>
<?php $component->withName('backend.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <?php echo app('translator')->get('Role Management'); ?>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('headerActions', null, []); ?> 
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['icon' => 'c-icon cil-plus','class' => 'card-header-action','href' => route('admin.auth.role.create'),'text' => __('Create Role')]]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['icon' => 'c-icon cil-plus','class' => 'card-header-action','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.auth.role.create')),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Create Role'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('body', null, []); ?> 
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('backend.roles-table', [])->html();
} elseif ($_instance->childHasBeenRendered('1IK7J4u')) {
    $componentId = $_instance->getRenderedChildComponentId('1IK7J4u');
    $componentTag = $_instance->getRenderedChildComponentTagName('1IK7J4u');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1IK7J4u');
} else {
    $response = \Livewire\Livewire::mount('backend.roles-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('1IK7J4u', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Anandadhara/resources/views/backend/auth/role/index.blade.php ENDPATH**/ ?>