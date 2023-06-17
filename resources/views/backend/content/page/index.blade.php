@extends('backend.layouts.app')

@section('title', __('Page Management'))

@section('content')
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-sm-5">
          <h2 class="card-title my-1">
            @lang('Page Management')
          </h2>
        </div> <!-- col-->

        <div class="col-sm-7 pull-right">
          @include('backend.content.page.includes.header-buttons')
        </div> <!-- col-->
      </div> <!-- row-->
    </div>
    <div class="card-body">
      @livewire('page-table')
    </div> <!-- card-body-->
  </div> <!-- card-->
@endsection
