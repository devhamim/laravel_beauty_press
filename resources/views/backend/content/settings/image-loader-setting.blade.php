@extends('backend.layouts.app')

@section('title', 'Mixed Settings')

@php
$required = html()
    ->span('*')
    ->class('text-danger');
$demoImg = 'img/backend/front-logo.png';
@endphp

@section('content')
  <div class="row justify-content-center">
    <div class="col-md-6">
      {{ html()->form('POST', route('admin.front-setting.banner.right.store'))->class('form-horizontal')->attribute('enctype', 'multipart/form-data')->open() }}
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title">Right Banner on Home page, main banner</h3>
        </div>
        <div class="card-body">
          <div class="form-group row mb-4">
            {{ html()->label('Banner Right (825x550)')->class('col-md-3 form-control-label text-right')->for('banner_right_1') }}
            <div class="col-md-9">
              @php($aLogo = get_setting('banner_right_1') ?? $demoImg)
              <label for="banner_right_1">
                <img src="{{ asset($aLogo) }}" class="border img-fluid rounded holder" style="max-width: 250px" alt="Image upload">
              </label>
              {{ html()->file('banner_right_1')->class('form-control-file image d-none')->id('banner_right_1')->acceptImage() }}
            </div> <!-- col-->
          </div> <!-- form-group-->

          <div class="form-group row mb-4">
            {{ html()->label('Banner Right Link')->class('col-md-3 form-control-label text-right')->for('banner_right_link1') }}
            <div class="col-md-9">
              {{ html()->text('banner_right_link1', get_setting('banner_right_link1'))->class('form-control')->placeholder('Banner right link') }}
            </div> <!-- col-->
          </div> <!-- form-group-->

          <div class="form-group row">
            <div class="col-md-9 offset-md-3">
              {{ html()->button('Update')->class('btn btn-success') }}
            </div> <!-- col-->
          </div> <!-- form-group-->
        </div> <!--  .card-body -->
      </div> <!--  .card -->
      {{ html()->form()->close() }}
    </div> <!-- .col-md-6 -->

    <div class="col-md-6">
      {{ html()->form('POST', route('admin.front-setting.image.loading.store'))->class('form-horizontal')->attribute('enctype', 'multipart/form-data')->open() }}
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title">Image Loader Settings <small class="ml-2">(update information anytime)</small></h3>
        </div>
        <div class="card-body">
          <p class="mb-4 text-center text-danger">Click the Image for updating Process</p>

          <div class="form-group row mb-4">
            {{ html()->label('Banner Loader (825x550)')->class('col-md-4 form-control-label text-right')->for('banner_image_loader') }}
            <div class="col-md-8">
              @php($aLogo = get_setting('banner_image_loader') ?? $demoImg)
              <label for="banner_image_loader">
                <img src="{{ asset($aLogo) }}" class="border img-fluid rounded holder" style="max-width: 200px" alt="Image upload">
              </label>
              {{ html()->file('banner_image_loader')->class('form-control-file image d-none')->id('banner_image_loader')->acceptImage() }}
            </div> <!-- col-->
          </div> <!-- form-group-->

          <div class="form-group row mb-4">
            {{ html()->label('Main Category Loader (150x150)')->class('col-md-4 form-control-label text-right')->for('category_image_loader') }}
            <div class="col-md-8">
              @php($asmLogo = get_setting('category_image_loader') ?? $demoImg)
              <label for="category_image_loader">
                <img src="{{ asset($asmLogo) }}" class="border img-fluid rounded holder" style="max-width: 200px" alt="Image upload">
              </label>
              {{ html()->file('category_image_loader')->class('form-control-file image d-none')->id('category_image_loader')->acceptImage() }}
            </div> <!-- col-->
          </div> <!-- form-group-->

          <div class="form-group row mb-4">
            {{ html()->label('Sub Category Loader (300x300)')->class('col-md-4 form-control-label text-right')->for('sub_category_image_loader') }}
            <div class="col-md-8">
              @php($subCatLoader = get_setting('sub_category_image_loader') ?? $demoImg)
              <label for="sub_category_image_loader">
                <img src="{{ asset($subCatLoader) }}" class="border img-fluid rounded holder" style="max-width: 200px" alt="Image upload">
              </label>
              {{ html()->file('sub_category_image_loader')->class('form-control-file image d-none')->id('sub_category_image_loader')->acceptImage() }}
            </div> <!-- col-->
          </div> <!-- form-group-->

          <div class="form-group row mb-4">
            {{ html()->label('Product Image loader (400x400)')->class('col-md-4 form-control-label text-right')->for('product_image_loader') }}
            <div class="col-md-8">
              @php($product_image = get_setting('product_image_loader') ?? $demoImg)
              <label for="product_image_loader">
                <img src="{{ asset($product_image) }}" class="border img-fluid rounded holder" style="max-width: 200px" alt="Image upload">
              </label>
              {{ html()->file('product_image_loader')->class('form-control-file image d-none')->id('product_image_loader')->acceptImage() }}
            </div> <!-- col-->
          </div> <!-- form-group-->

          <div class="form-group row mb-4">
            <div class="col-md-8 offset-md-4">
              {{ html()->button('Update')->class('btn btn-sm btn-success') }}
            </div> <!-- col-->
          </div> <!-- form-group-->
        </div> <!--  .card-body -->
      </div> <!--  .card -->
      {{ html()->form()->close() }}
    </div> <!-- .col-md-6 -->

  </div> <!-- .row -->


@endsection




@push('after-scripts')
  {{ script('assets/js/jscolor.js') }}

  <script>
    function readImageURL(input, preview) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          preview.attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }

    $(document).ready(function() {
      $(".image").change(function() {
        holder = $(this).closest('.form-group').find('.holder');
        readImageURL(this, holder);
      });
    });
  </script>
@endpush
