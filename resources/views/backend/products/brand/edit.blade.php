@inject('model', '\App\Domains\Auth\Models\User')

@extends('backend.layouts.app')

@section('title', __('Update Role'))

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">

    {{ html()->modelForm($brand, 'PATCH', route('admin.product.brand.update',
    $brand))->attribute('enctype', 'multipart/form-data')->open() }}

    <x-backend.card>
      <x-slot name="header">
        @lang('Update Role')
      </x-slot>

      <x-slot name="headerActions">
        <x-utils.link class="btn btn-sm btn-secondary" :href="route('admin.product.brand.index')"
          :text="__('Cancel')" />
      </x-slot>

      <x-slot name="body">

        <div class="form-group">
          <div class="form-check form-check-inline">
            {{html()->checkbox('active', old('active', $brand->active), date('Y-m-d H:i:s'))->class('form-check-input')}}
            {{ html()->label("Active")->class('form-check-label')->for('active') }}
          </div>
          <div class="form-check form-check-inline">
            {{html()->checkbox('top', old('top', $brand->top), 1)->class('form-check-input')}}
            {{ html()->label("IsTop")->class('form-check-label')->for('top') }}
          </div>
        </div> <!-- form-group-->

        <div class="form-group">
          {{html()->label('Name')->for('name')}}
          {{html()->text('name')
          ->class('form-control')
          ->placeholder('Name')
          ->required()}}
        </div> <!-- form-group -->

        <div class="form-group">
          {{html()->label('Logo')->for('logo')}}
          {{html()->file('logo')
          ->class('form-control-file')}}
        </div> <!-- form-group -->

        <div class="form-group">
          {{html()->label('Meta Title')->for('meta_title')}}
          {{html()->text('meta_title')
          ->class('form-control')
          ->placeholder('Meta Title')}}
        </div> <!-- form-group -->

        <div class="form-group">
          {{html()->label('Meta Description')->for('meta_description')}}
          {{html()->textarea('meta_description')
          ->class('form-control')
          ->rows(3)
          ->placeholder('Meta Description')}}
        </div> <!-- form-group -->


      </x-slot>

      <x-slot name="footer">
        <button class="btn btn-sm btn-primary" type="submit">@lang('Update Brand')</button>
      </x-slot>
    </x-backend.card>

    {{ html()->closeModelForm() }}

  </div>
</div>
@endsection