@extends('backend.layouts.app')

@section('title', 'Mixed Settings')

@php
$required = html()
->span('*')
->class('text-danger');
$demoImg = 'img/backend/front-logo.png';
@endphp

@section('content')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
  .modal-confirm {
    color: #636363;
    width: 400px;
  }

  .modal-confirm .modal-content {
    padding: 20px;
    border-radius: 5px;
    border: none;
    text-align: center;
    font-size: 14px;
  }

  .modal-confirm .modal-header {
    border-bottom: none;
    position: relative;
  }

  .modal-confirm h4 {
    text-align: center;
    font-size: 26px;
    margin: 30px 0 -10px;
  }

  .modal-confirm .close {
    position: absolute;
    top: -5px;
    right: -2px;
  }

  .modal-confirm .modal-body {
    color: #999;
  }

  .modal-confirm .modal-footer {
    border: none;
    text-align: center;
    border-radius: 5px;
    font-size: 13px;
    padding: 10px 15px 25px;
  }

  .modal-confirm .modal-footer a {
    color: #999;
  }

  .modal-confirm .icon-box {
    width: 80px;
    height: 80px;
    margin: 0 auto;
    border-radius: 50%;
    z-index: 9;
    text-align: center;
    border: 3px solid #f15e5e;
  }

  .modal-confirm .icon-box i {
    color: #f15e5e;
    font-size: 46px;
    display: inline-block;
    margin-top: 13px;
  }

  .modal-confirm .btn,
  .modal-confirm .btn:active {
    color: #fff;
    border-radius: 4px;
    background: #60c7c1;
    text-decoration: none;
    transition: all 0.4s;
    line-height: normal;
    min-width: 120px;
    border: none;
    min-height: 40px;
    border-radius: 3px;
    margin: 0 5px;
  }

  .modal-confirm .btn-secondary {
    background: #c1c1c1;
  }

  .modal-confirm .btn-secondary:hover,
  .modal-confirm .btn-secondary:focus {
    background: #a8a8a8;
  }

  .modal-confirm .btn-danger {
    background: #f15e5e;
  }

  .modal-confirm .btn-danger:hover,
  .modal-confirm .btn-danger:focus {
    background: #ee3535;
  }

  .trigger-btn {
    display: inline-block;
    margin: 100px auto;
  }
</style>
@php
$multis = DB::table('services')
->where('is_active', 1)
->orwhere('is_active', 0)
->get();
@endphp
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">

      </div>
      <div class="card-body">
        <form action="{{ route('admin.setting.testmony.update') }}" enctype="multipart/form-data" method="POST">
          @csrf

          <div class="form-group">
            <label>Reviewer Name</label>
            <input type="text" name="reviewer" value="{{ $notice->reviewer }}" class="form-control">
            <input type="hidden" name="notice_id" value="{{ $notice->id }}" class="form-control">
          </div>
          <div class="form-group">
            <label>Reviewer Job</label>
            <input type="text" name="reviewer_job" value="{{ $notice->reviewer_job }}" class="form-control">
          </div>
          <div class="form-group">
            <label>Review</label>
            <textarea type="text" rows="5" name="review" value="{{ $notice->review }}" class="form-control"></textarea>
          </div>

          <div class="form-group">
            <label>Active/Deactive</label>
            <select class="form-control" name="is_active">
              <option value="1" @if ($notice->is_active == 1) selected @endif>Active</option>
              <option value="0" @if ($notice->is_active == 0) selected @endif>Deactive</option>
            </select>
          </div>
          <button type="submit" class="btn btn-info">Update</button>
        </form>
      </div>
    </div>
  </div>





</div>


<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#default'
  });
</script>


@endsection



@push('after-scripts')
{{ script('assets/js/jscolor.js') }}
@endpush