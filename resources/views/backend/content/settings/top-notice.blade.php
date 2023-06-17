@extends('backend.layouts.app')

@section('title', ' Manage Top Notice Text')

@php
$required = html()->span('*')->class('text-danger');
$demoImg = 'img/backend/front-logo.png';
@endphp

@section('content')

<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header with-border">
        <h3 class="card-title">Manage Top Notice </h3>
      </div>
      <div class="card-body">

        {{ html()->form('POST', route('admin.front-setting.topNotice.store'))->open() }}

        <div class="form-group ">
          <div class="form-check">
            {{html()->checkbox('top_notice_text_active', get_setting('top_notice_text_active'), date('Y-m-d H:i:s'))->class('form-check-input')}}
            {{ html()->label('Active Notice')->class('form-check-label')->for('top_notice_text_active') }}
          </div>
        </div> <!-- form-group-->

        <div class="form-group">
          {{html()->textarea('top_notice_text', get_setting('top_notice_text'))
          ->placeholder('Top Notice Text')
          ->attribute('rows', 4)
          ->class('form-control')}}
        </div> <!-- form-group-->

        <div class="form-group ">
          {{html()->button('Update')->class('btn  btn-success')}}
        </div> <!-- form-group-->

        {{ html()->form()->close() }}

      </div> <!--  .card-body -->
    </div> <!--  .card -->
  </div> <!-- .col-md-9 -->
</div> <!-- .row -->

@endsection