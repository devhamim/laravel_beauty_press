@inject('model', '\App\Domains\Auth\Models\User')

@extends('backend.layouts.app')

@section('title', __('Update Shipping'))

@section('content')


<div class="row justify-content-center">
  <div class="col-md-10">

    {{ html()->modelForm($shipping, 'PATCH', route('admin.product.shipping.update',
    $shipping))->attribute('enctype', 'multipart/form-data')->open() }}
    @csrf
    <x-backend.card>
      <x-slot name="header">
        @lang('Update Shipping')
      </x-slot>

      <x-slot name="headerActions">
        <x-utils.link class="btn btn-sm btn-secondary" :href="route('admin.product.shipping.index')" :text="__('Cancel')" />
      </x-slot>

      <x-slot name="body">


        <div class="form-group">
          <label for="shipping">Shipping</label>
          <input required="" value="{{ $shipping->name }}" name="name" class="form-control" />
        </div>


  </div> <!-- form-group -->


  </x-slot>

  <x-slot name="footer">
    <button class="btn btn-sm btn-primary" type="submit">@lang('Update Shipping')</button>
  </x-slot>
  </x-backend.card>

  {{ html()->closeModelForm() }}

</div>
</div>
@endsection