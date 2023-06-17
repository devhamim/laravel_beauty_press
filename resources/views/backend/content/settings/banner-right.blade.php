@extends('backend.layouts.app')

@section('title', ' Baner Right Image and Link Settings ')

@php
$required = html()->span('*')->class('text-danger');
$demoImg = 'img/backend/front-logo.png';
@endphp

@section('content')

<div class="row justify-content-center">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header with-border">
        <h3 class="card-title">Three Column Banner Image and Link Settings </h3>
      </div>
      <div class="card-body">

        @php
        $rightBanner = json_decode(get_setting('three_column_banners'));
        @endphp

        {{ html()->form('POST', route('admin.front-setting.three.col.banner.store'))->class('form-horizontal')->attribute('enctype', 'multipart/form-data')->open() }}


        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              {{html()->label('Left Banner Image (381 × 164 px)')->class('d-block')->for('left_banner_image')}}
              @php($asmLogo = $rightBanner->left_banner_image ?? $demoImg )
              <label for="left_banner_image">
                <img src="{{asset($asmLogo)}}" class="border img-fluid rounded holder" alt="Image upload">
              </label>
              {{html()->file('left_banner_image')->class('form-control-file image d-none')->acceptImage()}}
            </div> <!-- form-group-->
            <div class="form-group">
              {{html()->label('Left Banner Image Link')->for('left_banner_image_link')}}
              {{html()->text('left_banner_image_link', $rightBanner->left_banner_image_link ?? '')
              ->placeholder('Left Banner Image Link')->class('form-control')}}
            </div> <!-- form-group-->
          </div>
          <div class="col-md-4">
            <div class="form-group">
              {{html()->label('Middle Banner Image (381 × 164 px)')->class('d-block')->for('middle_banner_image')}}
              @php($asmLogo = $rightBanner->middle_banner_image ?? $demoImg )
              <label for="middle_banner_image">
                <img src="{{asset($asmLogo)}}" class="border img-fluid rounded holder" alt="Image upload">
              </label>
              {{html()->file('middle_banner_image')->class('form-control-file image d-none')->acceptImage()}}
            </div> <!-- form-group-->
            <div class="form-group">
              {{html()->label('Middle Banner Image Link')->for('middle_banner_image_link')}}
              {{html()->text('middle_banner_image_link', $rightBanner->middle_banner_image_link ?? '')
              ->placeholder('Middle Banner Image Link')->class('form-control')}}
            </div> <!-- form-group-->
          </div>
          <div class="col-md-4">
            <div class="form-group">
              {{html()->label('Right Banner Image (381 × 164 px)')->class('d-block')->for('right_banner_image')}}
              {{html()->file('right_banner_image')->class('form-control-file image d-none')->acceptImage()}}
              @php($asmLogo = $rightBanner->right_banner_image ?? $demoImg )
              <label for="right_banner_image">
                <img src="{{asset($asmLogo)}}" class="border img-fluid rounded holder" alt="Image upload">
              </label>
            </div> <!-- form-group-->
            <div class="form-group">
              {{html()->label('Right Banner Image Link')->for('right_banner_image_link')}}
              {{html()->text('right_banner_image_link', $rightBanner->right_banner_image_link ?? '')
              ->placeholder('Right Banner Image Link')->class('form-control')}}
            </div> <!-- form-group-->
          </div>
        </div>


        <div class="form-group">
          {{html()->button('Update')->class('btn btn-block btn-primary')}}
        </div> <!-- form-group-->


        {{ html()->form()->close() }}

      </div> <!--  .card-body -->
    </div> <!--  .card -->
  </div> <!-- .col-md-9 -->
</div> <!-- .row -->

@endsection



@push('after-scripts')

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