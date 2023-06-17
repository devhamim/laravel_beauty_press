@inject('model', '\App\Domains\Auth\Models\User')

@extends('backend.layouts.app')

@section('title', __('Create Warehouse'))

@section('content')


<div class="row justify-content-center">
  <div class="col-md-10">



    <form action="{{ route('admin.product.warehouse.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <x-backend.card>
        <x-slot name="header">
          @lang('Create Warehouse')
        </x-slot>

        <x-slot name="headerActions">
          <x-utils.link class="btn btn-sm btn-secondary" :href="route('admin.product.warehouse.index')" :text="__('Cancel')" />
        </x-slot>

        <x-slot name="body">

          <div class="form-group">
            <label for="warehouse">Warehouse</label>
            <input type="text" required="" name="warehouse" placeholder="Warehouse" class="form-control" />
          </div>

          <!-- form-group -->


        </x-slot>

        <x-slot name="footer">
          <button class="btn btn-sm btn-primary" type="submit">@lang('Create Warehouse')</button>
        </x-slot>
      </x-backend.card>
    </form>


  </div>

</div>


@endsection