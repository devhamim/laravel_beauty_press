 @include('frontend.style.style')

 @include('frontend.content.header')
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

                                 <x-forms.post :action="route('frontend.auth.register')" id="registerForm">
                                     @csrf
                                     <div class="cta-form-col d-flex justify-content-between"> <input type="text"
                                             name="name" id="name" class="cta-email" value="{{ old('name') }}"
                                             placeholder="{{ __('Name') }}" maxlength="100" required autofocus
                                             autocomplete="name" /></div>
                                     <div class="cta-form-col d-flex justify-content-between"><input type="email"
                                             name="email" id="email" class="cta-email"
                                             placeholder="{{ __('E-mail Address') }}" value="{{ old('email') }}"
                                             maxlength="255" required autocomplete="email" />
                                     </div>
                                     <div class="cta-form-col d-flex justify-content-between"><input type="password"
                                             name="password" id="password" class="cta-email"
                                             placeholder="{{ __('Password') }}" maxlength="100" required
                                             autocomplete="new-password" /></div>
                                     <div class="cta-form-col d-flex justify-content-between"><input type="password"
                                             name="password_confirmation" id="password_confirmation" class="cta-email"
                                             placeholder="{{ __('Password Confirmation') }}" maxlength="100" required
                                             autocomplete="new-password" /></div>


                                     <div class="form-check" style="padding-bottom: 10px;">
                                         <input type="checkbox" name="terms" value="1" id="terms"
                                             class="form-check-input" required>
                                         <label class="form-check-label" for="terms">
                                             @lang('I agree to the') <a href="{{ route('frontend.pages.terms') }}"
                                                 target="_blank">@lang('Terms & Conditions')</a>
                                         </label>
                                     </div>




                                     @error('email')
                                         <span class="invalid-feedback" role="alert" style="text-align:center">
                                             <strong class="alert-danger">{{ $message }}</strong>
                                         </span>
                                     @enderror

                                     @error('password')
                                         <span class="invalid-feedback" role="alert" style="text-align:center">
                                             <strong class="alert-danger">{{ $message }}</strong>
                                         </span>
                                     @enderror


                                     @if (config('boilerplate.access.captcha.registration'))
                                         <div class="cta-form-col d-flex justify-content-between">
                                             <div class="col-md-4">
                                                 @captcha
                                                 <input type="hidden" name="captcha_status" value="true" />
                                             </div>
                                         </div>
                                     @endif
                                     <div>
                                         <button class="btn" type="submit">@lang('Sign Up')</button>
                                     </div>
                                 </x-forms.post>

                             </div>


                         </div>
                     </div>
                     <div class="tracking-help">
                         <p>Already have an account? | <a href="{{ route('frontend.auth.login') }}">Login</a>
                         </p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>


 <!-- footer -->
 @include('frontend.content.footer')
 <!-- footer-end -->
