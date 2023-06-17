 @include('frontend.style.style')


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

                                 <x-forms.post :action="route('frontend.auth.login')" id="loginForm">
                                     @csrf
                                     <div class="cta-form-col d-flex justify-content-between"> <input type="email"
                                             name="email" id="email" class="cta-email"
                                             placeholder="{{ __('E-mail Address') }}" value="{{ old('email') }}"
                                             maxlength="255" required autofocus autocomplete="email" /></div>
                                     <div class="cta-form-col d-flex justify-content-between"> <input type="password"
                                             name="password" id="password" class="cta-email"
                                             placeholder="{{ __('Password') }}" maxlength="100" required
                                             autocomplete="current-password" /></div>


                                     {{-- @error('email')
                                                <span class="invalid-feedback" role="alert" style="text-align:center">
                                                    <strong class="alert-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror --}}
                                     @error('email')
                                         <script type="text/javascript">
                                             alert('{{ $message }}');
                                         </script>
                                     @enderror


                                     <div class="form-group" style="padding-bottom: 10px;">
                                         <div class="form-check">
                                             <input name="remember" id="remember" class="form-check-input"
                                                 type="checkbox" {{ old('remember') ? 'checked' : '' }} />

                                             <label class="form-check-label" for="remember">
                                                 @lang('Remember Me')
                                             </label>
                                         </div>
                                     </div>


                                     @if (config('boilerplate.access.captcha.login'))
                                         <div class="col">
                                             @captcha
                                             <input type="hidden" name="captcha_status" value="true" />
                                         </div>
                                     @endif

                                     <div>
                                         <button class="btn" type="submit">@lang('LOGIN')</button>

                                     </div>
                                     <!--<div style="padding-top: 10px;">-->
                                     <!--    <x-utils.link :href="route('frontend.auth.password.request')" class="btn-1" :text="__('Forgot Your Password?')" />-->
                                     <!--</div>-->
                                     <div class="text-center">
                                         @include('frontend.auth.includes.social')
                                     </div>
                                 </x-forms.post>

                             </div>


                         </div>
                     </div>
                     <!--<div class="tracking-help">-->
                     <!--    <p>New to Sky Track? | <a href="{{ route('frontend.auth.register') }}">Create-->
                     <!--            Account</a></p>-->
                     <!--</div>-->
                 </div>
             </div>
         </div>
     </div>
 </div>

