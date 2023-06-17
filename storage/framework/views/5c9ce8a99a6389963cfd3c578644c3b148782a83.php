<?php $attributes = $attributes->exceptProps(['href' => '#', 'text' => __('Delete'), 'permission' => false]); ?>
<?php foreach (array_filter((['href' => '#', 'text' => __('Delete'), 'permission' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.form-button','data' => ['action' => $href,'method' => 'delete','name' => 'delete-item','buttonClass' => 'btn btn-danger btn-sm','permission' => ''.e($permission).'']]); ?>
<?php $component->withName('utils.form-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($href),'method' => 'delete','name' => 'delete-item','button-class' => 'btn btn-danger btn-sm','permission' => ''.e($permission).'']); ?>
    <i class="fas fa-trash"></i> <?php echo e($text); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH D:\beauty spa\Anandadhara\resources\views/components/utils/delete-button.blade.php ENDPATH**/ ?>