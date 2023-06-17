<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['class' => 'c-subheader-nav-link','href' => route('admin.auth.user.deactivated'),'text' => __('Deactivated Users'),'permission' => 'admin.access.user.reactivate']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'c-subheader-nav-link','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.auth.user.deactivated')),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Deactivated Users')),'permission' => 'admin.access.user.reactivate']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php if($logged_in_user->hasAllAccess()): ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['class' => 'c-subheader-nav-link','href' => route('admin.auth.user.deleted'),'text' => __('Deleted Users')]]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'c-subheader-nav-link','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.auth.user.deleted')),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Deleted Users'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/anandadhara/public_html/resources/views/backend/auth/user/includes/breadcrumb-links.blade.php ENDPATH**/ ?>