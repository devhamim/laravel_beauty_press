@inject('model', '\App\Domains\Auth\Models\User')

@extends('backend.layouts.app')

@section('title', __('Status'))

@section('content')


<div class="row justify-content-center">
  <div class="col-md-10">

    {{ html()->modelForm($status, 'PATCH', route('admin.product.status.update',
    $status))->attribute('enctype', 'multipart/form-data')->open() }}
    @csrf
    <x-backend.card>
      <x-slot name="header">
        @lang('Create Status')
      </x-slot>

      <x-slot name="headerActions">
        <x-utils.link class="btn btn-sm btn-secondary" :href="route('admin.product.status.index')" :text="__('Cancel')" />
      </x-slot>

      <x-slot name="body">


        <div class="form-group">
          <label for="status">Status</label>
          <input required="" value="{{ $status->name }}" name="name" class="form-control" />
        </div>


  </div> <!-- form-group -->


  </x-slot>

  <x-slot name="footer">
    <button class="btn btn-sm btn-primary" type="submit">@lang('Update Status')</button>
  </x-slot>
  </x-backend.card>

  {{ html()->closeModelForm() }}

</div>
</div>
@endsection