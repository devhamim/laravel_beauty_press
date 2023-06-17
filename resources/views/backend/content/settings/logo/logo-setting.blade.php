@extends('backend.layouts.app')

@section('title', ' Testimonial Management | Create New Testimonial')

@php
$required = html()->span('*')->class('text-danger');
$demoImg = 'img/backend/front-logo.png';
@endphp

@section('content')

{{ html()->form('POST', route('admin.setting.logoStore'))->class('form-horizontal')->attribute('enctype', 'multipart/form-data')->open() }}

<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header with-border">
        <h3 class="card-title">Logo Settings <small class="ml-2">(update information anytime)</small></h3>
      </div>
      <div class="card-body">

        <p class="mb-4 text-center text-danger">Click the Image for updating Process</p>

        <div class="form-group row mb-4">
          {{html()->label('Frontend logo (max height 40px)'. $required)->class('col-md-4 form-control-label text-right')->for('frontend_logo')}}
          <div class="col-md-8">
            @php($fLogo = get_setting('frontend_logo') ?? $demoImg )
            <label for="frontend_logo">
              <img src="{{asset($fLogo)}}" class="border img-fluid rounded holder" alt="Image upload">
            </label>
            {{html()->file('frontend_logo')->class('form-control-file image d-none')->id('frontend_logo')->acceptImage()}}
          </div> <!-- col-->
        </div> <!-- form-group-->
        <div class="form-group row mb-4">
          {{html()->label('Admin logo (60x60)')->class('col-md-4 form-control-label text-right')->for('admin_logo')}}
          <div class="col-md-8">
            @php($aLogo = get_setting('admin_logo') ?? $demoImg )
            <label for="admin_logo">
              <img src="{{asset($aLogo)}}" class="border img-fluid rounded holder" alt="Image upload">
            </label>
            {{html()->file('admin_logo')->class('form-control-file image d-none')->id('admin_logo')->acceptImage()}}
          </div> <!-- col-->
        </div> <!-- form-group-->
        <div class="form-group row mb-4">
          {{html()->label('Favicon (32x32)')->class('col-md-4 form-control-label text-right')->for('favicon')}}
          <div class="col-md-8">
            @php($favicon = get_setting('favicon') ?? $demoImg )
            <label for="favicon">
              <img src="{{asset($favicon)}}" class="border img-fluid rounded holder" alt="Image upload">
            </label>
            {{html()->file('favicon')->class('form-control-file image d-none')->id('favicon')->acceptImage()}}
          </div> <!-- col-->
        </div> <!-- form-group-->
        <div class="form-group row mb-4">
          <label for="bg-color-input" class="col-sm-4 col-form-label text-right">Front Navbar BG</label>
          <div class="col-md-8">
            @php($fbg = get_setting('front_navbar_bg') ?? '#508aeb' )
            <input name="front_navbar_bg" class="form-control" type="color" value="{{$fbg}}" id="bg-color-input">
          </div> <!-- col-->
        </div> <!-- form-group-->
        <div class="form-group row mb-4">
          <label for="text-color-input" class="col-sm-4 col-form-label text-right">Front Navbar Text</label>
          <div class="col-md-8">
            @php($tbg = get_setting('front_navbar_text') ?? '#508aeb' )
            <input name="front_navbar_text" class="form-control" type="color" value="{{$tbg}}" id="text-color-input">
          </div> <!-- col-->
        </div> <!-- form-group-->
        <div class="form-group row mb-4">
          <div class="col-md-8 offset-md-4">
            {{html()->button('Update')->class('btn btn-sm btn-success')}}
          </div> <!-- col-->
        </div> <!-- form-group-->
      </div> <!--  .card-body -->
    </div> <!--  .card -->
  </div> <!-- .col-md-9 -->
</div> <!-- .row -->

{{ html()->form()->close() }}
@endsection




@push('after-scripts')
{{script('assets/js/jscolor.js')}}

<script>
  function readImageURL(input, preview) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            preview.attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}

  $(document).ready(function () {
    $(".image").change(function () {
      holder = $(this).closest('.form-group').find('.holder');
        readImageURL(this, holder);
    });
  });

</script>

@endpush