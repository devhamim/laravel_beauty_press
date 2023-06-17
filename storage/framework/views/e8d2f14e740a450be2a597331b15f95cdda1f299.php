<?php if($user->trashed() && $logged_in_user->hasAllAccess()): ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.form-button','data' => ['action' => route('admin.auth.user.restore', $user),'method' => 'patch','buttonClass' => 'btn btn-info btn-sm','icon' => 'fas fa-sync-alt','name' => 'confirm-item']]); ?>
<?php $component->withName('utils.form-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.auth.user.restore', $user)),'method' => 'patch','button-class' => 'btn btn-info btn-sm','icon' => 'fas fa-sync-alt','name' => 'confirm-item']); ?>
        <?php echo app('translator')->get('Restore'); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <?php if(config('boilerplate.access.user.permanently_delete')): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.delete-button','data' => ['href' => route('admin.auth.user.permanently-delete', $user),'text' => __('Permanently Delete')]]); ?>
<?php $component->withName('utils.delete-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.auth.user.permanently-delete', $user)),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Permanently Delete'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>
<?php else: ?>
    <?php if($logged_in_user->hasAllAccess()): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.view-button','data' => ['href' => route('admin.auth.user.show', $user)]]); ?>
<?php $component->withName('utils.view-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.auth.user.show', $user))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.edit-button','data' => ['href' => route('admin.auth.user.edit', $user)]]); ?>
<?php $component->withName('utils.edit-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.auth.user.edit', $user))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if(! $user->isActive()): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.form-button','data' => ['action' => route('admin.auth.user.mark', [$user, 1]),'method' => 'patch','buttonClass' => 'btn btn-primary btn-sm','icon' => 'fas fa-sync-alt','name' => 'confirm-item','permission' => 'admin.access.user.reactivate']]); ?>
<?php $component->withName('utils.form-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.auth.user.mark', [$user, 1])),'method' => 'patch','button-class' => 'btn btn-primary btn-sm','icon' => 'fas fa-sync-alt','name' => 'confirm-item','permission' => 'admin.access.user.reactivate']); ?>
            <?php echo app('translator')->get('Reactivate'); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if($user->id !== $logged_in_user->id && !$user->isMasterAdmin() && $logged_in_user->hasAllAccess()): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.delete-button','data' => ['href' => route('admin.auth.user.destroy', $user)]]); ?>
<?php $component->withName('utils.delete-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.auth.user.destroy', $user))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>

    
    <?php if($user->isMasterAdmin() && $logged_in_user->isMasterAdmin()): ?>
        <div class="dropdown d-inline-block">
            <a class="btn btn-sm btn-secondary dropdown-toggle" id="moreMenuLink" href="#" role="button" data-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false">
                <?php echo app('translator')->get('More'); ?>
            </a>

            <div class="dropdown-menu" aria-labelledby="moreMenuLink">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => route('admin.auth.user.change-password', $user),'class' => 'dropdown-item','text' => __('Change Password'),'permission' => 'admin.access.user.change-password']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.auth.user.change-password', $user)),'class' => 'dropdown-item','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Change Password')),'permission' => 'admin.access.user.change-password']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
        </div>
    <?php elseif(
        !$user->isMasterAdmin() && // This is not the master admin
        $user->isActive() && // The account is active
        $user->id !== $logged_in_user->id && // It's not the person logged in
        // Any they have at lease one of the abilities in this dropdown
        (
            $logged_in_user->can('admin.access.user.change-password') ||
            $logged_in_user->can('admin.access.user.clear-session') ||
            $logged_in_user->can('admin.access.user.impersonate') ||
            $logged_in_user->can('admin.access.user.deactivate')
        )
    ): ?>
        <div class="dropdown d-inline-block">
            <a class="btn btn-sm btn-secondary dropdown-toggle" id="moreMenuLink" href="#" role="button" data-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false">
                <?php echo app('translator')->get('More'); ?>
            </a>

            <div class="dropdown-menu" aria-labelledby="moreMenuLink">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => route('admin.auth.user.change-password', $user),'class' => 'dropdown-item','text' => __('Change Password'),'permission' => 'admin.access.user.change-password']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.auth.user.change-password', $user)),'class' => 'dropdown-item','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Change Password')),'permission' => 'admin.access.user.change-password']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                <?php if($user->id !== $logged_in_user->id && !$user->isMasterAdmin()): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.form-button','data' => ['action' => route('admin.auth.user.clear-session', $user),'name' => 'confirm-item','buttonClass' => 'dropdown-item','permission' => 'admin.access.user.clear-session']]); ?>
<?php $component->withName('utils.form-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.auth.user.clear-session', $user)),'name' => 'confirm-item','button-class' => 'dropdown-item','permission' => 'admin.access.user.clear-session']); ?>
                        <?php echo app('translator')->get('Clear Session'); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <?php if (can_be_impersonated($user, )) : ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => route('impersonate', $user->id),'class' => 'dropdown-item','text' => __('Login As ' . $user->name),'permission' => 'admin.access.user.impersonate']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('impersonate', $user->id)),'class' => 'dropdown-item','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Login As ' . $user->name)),'permission' => 'admin.access.user.impersonate']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.form-button','data' => ['action' => route('admin.auth.user.mark', [$user, 0]),'method' => 'patch','name' => 'confirm-item','buttonClass' => 'dropdown-item','permission' => 'admin.access.user.deactivate']]); ?>
<?php $component->withName('utils.form-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.auth.user.mark', [$user, 0])),'method' => 'patch','name' => 'confirm-item','button-class' => 'dropdown-item','permission' => 'admin.access.user.deactivate']); ?>
                        <?php echo app('translator')->get('Deactivate'); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/anandadhara/public_html/resources/views/backend/auth/user/includes/actions.blade.php ENDPATH**/ ?>