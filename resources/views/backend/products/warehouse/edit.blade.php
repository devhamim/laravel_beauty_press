@inject('model', '\App\Domains\Auth\Models\User')

@extends('backend.layouts.app')

@section('title', __('Update warehouse'))

@section('content')


<div class="row justify-content-center">
  <div class="col-md-10">

    {{ html()->modelForm($warehouse, 'PATCH', route('admin.product.warehouse.update',
    $warehouse))->attribute('enctype', 'multipart/form-data')->open() }}
    @csrf
    <x-backend.card>
      <x-slot name="header">
        @lang('Update warehouse')
      </x-slot>

      <x-slot name="headerActions">
        <x-utils.link class="btn btn-sm btn-secondary" :href="route('admin.product.warehouse.index')" :text="__('Cancel')" />
      </x-slot>

      <x-slot name="body">

        <div class="form-group">
          <label for="warehouse">Warehouse</label>
          <input required="" value="{{ $warehouse->name }}" name="name" class="form-control" />
        </div>


  </div> <!-- form-group -->


  </x-slot>

  <x-slot name="footer">
    <button class="btn btn-sm btn-primary" type="submit">@lang('Update warehouse')</button>
  </x-slot>
  </x-backend.card>

  {{ html()->closeModelForm() }}

</div>
</div>
@endsection