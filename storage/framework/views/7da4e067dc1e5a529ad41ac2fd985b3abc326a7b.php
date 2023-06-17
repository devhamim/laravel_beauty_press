

<?php $__env->startSection('title', __('Reset Password')); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.card','data' => []]); ?>
<?php $component->withName('frontend.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                     <?php $__env->slot('header', null, []); ?> 
                        <?php echo app('translator')->get('Reset Password'); ?>
                     <?php $__env->endSlot(); ?>

                     <?php $__env->slot('body', null, []); ?> 
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.forms.post','data' => ['action' => route('frontend.auth.password.email')]]); ?>
<?php $component->withName('forms.post'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('frontend.auth.password.email'))]); ?>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo app('translator')->get('E-mail Address'); ?></label>

                                <div class="col-md-6">
                                    <input type="email" name="email" id="email" class="form-control" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(__('E-mail Address')); ?>" maxlength="255" required autofocus autocomplete="email" />
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button class="btn btn-primary" type="submit"><?php echo app('translator')->get('Send Password Reset Link'); ?></button>
                                </div>
                            </div><!--form-group-->
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div><!--col-md-8-->
        </div><!--row-->
    </div><!--container-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/anandadhara/public_html/resources/views/frontend/auth/passwords/email.blade.php ENDPATH**/ ?>