@include('frontend.style.style')
@include('frontend.content.header')
@include('frontend.auth.login')
@extends('frontend.layouts.app')

@section('title', __('_contact'))

@section('content')
<div class="container py-4">
    <div class="row justify-content-center shadow about-wrap clrbg-before">
        <div class="contact-shadow">
            <a class="contact-shadow" href="{{ route('frontend.pages.contact') }}">
                <h2> Contact Us </h2>
            </a>
        </div>
        <div class="col-md-12">
            <x-frontend.card>


                <x-slot name="body">
                    <x-forms.post :action="route('frontend.pages.contact') " id="contact" name="contact">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 text-right">@lang('Name')</label>

                            <div class="col-md-6">
                                <input type="text" required="" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="{{ __('Name') }}" maxlength="100" required autofocus autocomplete="name" />
                            </div>
                        </div>
                        <!--form-group-->
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 text-right">@lang('Phone')</label>

                            <div class="col-md-6">
                                <input type="text" required="" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" placeholder="{{ __('Phone') }}" maxlength="100" required autofocus autocomplete="phone" />
                            </div>
                        </div>
                        <!--form-group-->

                        <div class="form-group">
                            <label for="name" class="col-md-4 text-right">@lang('E-mail Address')</label>

                            <div class="col-md-6">
                                <input type="email" required="" name="email" id="email" class="form-control" placeholder="{{ __('E-mail Address') }}" value="{{ old('email') }}" maxlength="255" required autocomplete="email" />
                            </div>
                        </div>
                        <!--form-group-->

                        <div class="form-group">
                            <label for="name" class="col-md-4 col-form-label text-right">@lang('Message')</label>

                            <div class="col-md-6">
                                <input type="textarea" required="" name="message" id="message" class="form-control" placeholder="{{ __('Message') }}" rows="4" cols="50" />
                            </div>
                        </div>
                        <!--form-group-->

                        <div class="form-group">
                            <div class="col-md-8 width: 100%">
                                <div class="form-group text-right">
                                    <button class="btn btn-primary" type="submit">@lang('Contact')</button>
                                </div>
                            </div>
                        </div>
                        <!--form-group-->
                    </x-forms.post>

                </x-slot>
            </x-frontend.card>
        </div>
        <!--col-md-10-->
    </div>
    <!--row-->
</div>
@include('frontend.content.footer')
@endsection