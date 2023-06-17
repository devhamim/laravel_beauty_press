 <?php echo $__env->make('frontend.style.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <?php echo $__env->make('frontend.content.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <div class="tracking-area pt-95 pb-115">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-xl-4 col-lg-10">
                 <div class="tracking-id-info text-center">

                     <div class="tracking-list">
                         <div style="background-color: #fff; padding: 15px;">


                             <div class="cta-from">
                                 <h5>LOGIN</h5>
                                 <p>Login to go for getting all details</p>

                                 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.forms.post','data' => ['action' => route('frontend.auth.login'),'id' => 'loginForm']]); ?>
<?php $component->withName('forms.post'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('frontend.auth.login')),'id' => 'loginForm']); ?>
                                     <?php echo csrf_field(); ?>
                                     <div class="cta-form-col d-flex justify-content-between"> <input type="email"
                                             name="email" id="email" class="cta-email"
                                             placeholder="<?php echo e(__('E-mail Address')); ?>" value="<?php echo e(old('email')); ?>"
                                             maxlength="255" required autofocus autocomplete="email" /></div>
                                     <div class="cta-form-col d-flex justify-content-between"> <input type="password"
                                             name="password" id="password" class="cta-email"
                                             placeholder="<?php echo e(__('Password')); ?>" maxlength="100" required
                                             autocomplete="current-password" /></div>


                                     
                                     <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                         <script type="text/javascript">
                                             alert('<?php echo e($message); ?>');
                                         </script>
                                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


                                     <div class="form-group" style="padding-bottom: 10px;">
                                         <div class="form-check">
                                             <input name="remember" id="remember" class="form-check-input"
                                                 type="checkbox" <?php echo e(old('remember') ? 'checked' : ''); ?> />

                                             <label class="form-check-label" for="remember">
                                                 <?php echo app('translator')->get('Remember Me'); ?>
                                             </label>
                                         </div>
                                     </div>


                                     <?php if(config('boilerplate.access.captcha.login')): ?>
                                         <div class="col">
                                             <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script><div id="_g-recaptcha"></div>
                <div class="g-recaptcha"
                    data-sitekey=""
                    data-size="invisible"
                    data-callback="_submitForm"
                    data-badge="bottomright">
                </div><script src="https://www.google.com/recaptcha/api.js" async defer></script><script>var _submitForm,_captchaForm,_captchaSubmit,_execute=true;</script><script>window.addEventListener('load', _loadCaptcha);function _loadCaptcha(){
                _captchaForm=document.querySelector("#_g-recaptcha").closest("form");
                _captchaSubmit=_captchaForm.querySelector('[type=submit]');
                _submitForm=function(){if(typeof _submitEvent==="function"){_submitEvent();grecaptcha.reset();}else{_captchaForm.submit();}};
                _captchaForm.addEventListener('submit',function(e){e.preventDefault();
                if(typeof _beforeSubmit==='function'){_execute=_beforeSubmit(e);}
                if(_execute){grecaptcha.execute();}});}</script>
            
                                             <input type="hidden" name="captcha_status" value="true" />
                                         </div>
                                     <?php endif; ?>

                                     <div>
                                         <button class="btn" type="submit"><?php echo app('translator')->get('LOGIN'); ?></button>

                                     </div>
                                     <div style="padding-top: 10px;">
                                         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => route('frontend.auth.password.request'),'class' => 'btn-1','text' => __('Forgot Your Password?')]]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('frontend.auth.password.request')),'class' => 'btn-1','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Forgot Your Password?'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                     </div>
                                     <div class="text-center">
                                         <?php echo $__env->make('frontend.auth.includes.social', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                     </div>
                                  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                             </div>


                         </div>
                     </div>
                     <div class="tracking-help">
                         <p>New to Sky Track? | <a href="<?php echo e(route('frontend.auth.register')); ?>">Create
                                 Account</a></p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>


 <!-- main-area-end -->

 <!-- footer -->
 <?php echo $__env->make('frontend.content.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <!-- footer-end -->
<?php /**PATH /home/abubd/anandadhara.abubd.co/resources/views/frontend/auth/login.blade.php ENDPATH**/ ?>