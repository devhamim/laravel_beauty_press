@extends('backend.layouts.app')

@section('title', 'Manage Announcement | Edit Announcement')

@section('content')
{{ html()->modelForm($announcement, 'PATCH', route('admin.announcement.update', $announcement))->class('form-horizontal')->attribute('enctype', 'multipart/form-data')->open() }}
<div class="row">
  <div class="col-md-9">
    <div class="card">
      <div class="card-header with-border">
        <h3 class="card-title">Manage Banner <small class="ml-2">Edit Banner</small></h3>
      </div>
      <div class="card-body">
        <div class="form-group">
            {{html()->text('post_title')->class('form-control cash')->placeholder('Title')}}
          <p class="text-danger margin-bottom-none" id="post_error">@error('post_title') {{$message}}
            @enderror</p>
        </div> <!-- form-group -->

        <div class="form-group d-none">
          <div class="input-group mb-2">
              {{html()->text('post_slug')->class('form-control')->placeholder('slug')}}
          </div>
        </div> <!-- form-group -->

        <div class="form-group">
            {{html()->textarea('post_content')->class('editor form-control')}}
          @error('post_content')
          <p class="text-danger margin-bottom-none">{{$message}}</p>
          @enderror
        </div> <!-- form-group -->
      </div> <!--  .card-body -->
      <div class="card-footer">
        {{ form_submit(__('buttons.general.crud.update')) }}
        {{ form_cancel(route('admin.banner.index'), __('buttons.general.cancel')) }}
      </div> <!--  .card-body -->
    </div> <!--  .card -->
  </div> <!-- .col-md-9 -->

  <div class="col-sm-3">
    <div class="card">
      <div class="card-header with-border">
        <h3 class="card-title">Publishing Tools</h3>
      </div>
      <div class="card-body p-3">
        <div class="form-group">
          @php $status = old('post_status', $announcement->post_status);@endphp
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="post_status" value="publish" id="publish"
              class="checking" checked>
            <label class="form-check-label" for="publish">Publish</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="post_status" value="draft" id="draft" class="checking"
              @if($status==='draft' ) checked @endif>
            <label class="form-check-label" for="draft">Draft</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="post_status" value="schedule" id="schedule"
              class="checking" @if($status==='schedule' ) checked @endif>
            <label class="form-check-label" for="schedule">Schedule</label>
          </div>
        </div> <!-- form-group -->
        <div class="form-group @if($status !=='schedule' ) d-none @endif" id="scheduleDate">
          <div class="form-group">
            <div class="input-group">
              <input type="text" name="schedule_time" class="form-control" placeholder="dd/mm/yyyy"
                id="datepicker-autoclose"
                value="{{old('schedule_time', date('d-m-Y', strtotime($announcement->schedule_time)))}}">
              <div class="input-group-append bg-custom b-0">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
              </div>
            </div><!-- input-group -->
          </div>
        </div> <!-- form-group -->
        <div class="row">
          <div class="card-title col">Thumbnail</div>
        </div> <!-- row -->
        <hr class="mt-0">
        <div class="form-group">
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="thumb_status" value="1" id="new" class="checking"
              @if($announcement->thumb_status == 1) checked @endif>
            <label class="form-check-label" for="new">Upload Image</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="thumb_status" value="0" id="off" class="checking"
              @if($announcement->thumb_status == 0) checked @endif>
            <label class="form-check-label" for="off">Image Off</label>
          </div>
        </div> <!-- form-group -->
        <div class="form-group @if($announcement->thumb_status == 0) d-none @endif" id="for_New_upload">
          <label for="image">
            @php
            $image = $announcement->post_thumb ? $announcement->post_thumb : 'img/backend/no-image.gif';
            @endphp
            <img src="{{asset($image)}}" class="img-fluid" id="holder" alt="Image upload">
          </label>
          <input type="file" name="image" class="d-none" id="image">
        </div> <!-- form-group -->
      </div> <!--  card-body -->
    </div> <!-- /.card -->
  </div> <!-- .col-md-3 -->
</div> <!-- .row -->

{{ html()->closeModelForm() }}
@endsection



@push('after-styles')
{{ style(asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')) }}
@endpush

@push('after-scripts')
{!! script(asset('assets/plugins/tinymce/jquery.tinymce.min.js')) !!}
{!! script(asset('assets/plugins/tinymce/tinymce.min.js')) !!}
{!! script(asset('assets/plugins/tinymce/editor-helper.js')) !!}
{!! script(asset('assets/plugins/moment/moment.js')) !!}
{!! script(asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')) !!}

<script>
  $(document).ready(function () {
    simple_editor('.editor', 450);
    $('#datepicker-autoclose').datepicker({
        format: "dd-mm-yyyy",
        clearBtn: true,
        autoclose: true,
        todayHighlight: true,
    });

    $("#image").change(function () {
        readImageURL(this, $('#holder'));
    });
  });

    $(document).on('blur', "#post_slug", function () {
      let postField = $(this);
      let post_title = postField.val();
      if (post_title) {
        ajax_slug_url(post_title);
        setTimeout(update, 1000); // 30 seconds
        $("#post_error").empty();
        postField.removeClass('is-invalid');
      } else {
        $("#post_error").text('title must not empty');
        postField.addClass('is-invalid');
      }
    });

    $(function () {
      $(".form-check-input").click(function () {
        const status = $(this).val();
        if (status === "schedule") {
          $("#scheduleDate").removeClass("d-none");
        } else if (status == 1) {
          $("#for_New_upload").removeClass("d-none");
        } else if (status == 0) {
          $("#for_New_upload").addClass("d-none");
        } else {
          $("#scheduleDate").addClass("d-none");
        }
      });

    });
</script>

@endpush
