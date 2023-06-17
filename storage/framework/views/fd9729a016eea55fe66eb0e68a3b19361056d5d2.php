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
                                 <h5>REGISTER</h5>
                                 <p>Register to go for getting all details</p>

                                 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.forms.post','data' => ['action' => route('frontend.auth.register'),'id' => 'registerForm']]); ?>
<?php $component->withName('forms.post'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('frontend.auth.register')),'id' => 'registerForm']); ?>
                                     <?php echo csrf_field(); ?>
                                     <div class="cta-form-col d-flex justify-content-between"> <input type="text"
                                             name="name" id="name" class="cta-email" value="<?php echo e(old('name')); ?>"
                                             placeholder="<?php echo e(__('Name')); ?>" maxlength="100" required autofocus
                                             autocomplete="name" /></div>
                                     <div class="cta-form-col d-flex justify-content-between"><input type="email"
                                             name="email" id="email" class="cta-email"
                                             placeholder="<?php echo e(__('E-mail Address')); ?>" value="<?php echo e(old('email')); ?>"
                                             maxlength="255" required autocomplete="email" />
                                     </div>
                                     <div class="cta-form-col d-flex justify-content-between"><input type="password"
                                             name="password" id="password" class="cta-email"
                                             placeholder="<?php echo e(__('Password')); ?>" maxlength="100" required
                                             autocomplete="new-password" /></div>
                                     <div class="cta-form-col d-flex justify-content-between"><input type="password"
                                             name="password_confirmation" id="password_confirmation" class="cta-email"
                                             placeholder="<?php echo e(__('Password Confirmation')); ?>" maxlength="100" required
                                             autocomplete="new-password" /></div>


                                     <div class="form-check" style="padding-bottom: 10px;">
                                         <input type="checkbox" name="terms" value="1" id="terms"
                                             class="form-check-input" required>
                                         <label class="form-check-label" for="terms">
                                             <?php echo app('translator')->get('I agree to the'); ?> <a href="<?php echo e(route('frontend.pages.terms')); ?>"
                                                 target="_blank"><?php echo app('translator')->get('Terms & Conditions'); ?></a>
                                         </label>
                                     </div>




                                     <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                         <span class="invalid-feedback" role="alert" style="text-align:center">
                                             <strong class="alert-danger"><?php echo e($message); ?></strong>
                                         </span>
                                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                     <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                         <span class="invalid-feedback" role="alert" style="text-align:center">
                                             <strong class="alert-danger"><?php echo e($message); ?></strong>
                                         </span>
                                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


                                     <?php if(config('boilerplate.access.captcha.registration')): ?>
                                         <div class="cta-form-col d-flex justify-content-between">
                                             <div class="col-md-4">
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
                                         </div>
                                     <?php endif; ?>
                                     <div>
                                         <button class="btn" type="submit"><?php echo app('translator')->get('Sign Up'); ?></button>
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
                         <p>Already have an account? | <a href="<?php echo e(route('frontend.auth.login')); ?>">Login</a>
                         </p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>


 <!-- footer -->
 <?php echo $__env->make('frontend.content.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <!-- footer-end -->
<?php /**PATH /home/anandadhara/public_html/resources/views/frontend/auth/register.blade.php ENDPATH**/ ?>