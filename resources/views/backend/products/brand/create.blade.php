@inject('model', '\App\Domains\Auth\Models\User')

@extends('backend.layouts.app')

@section('title', __('Create Role'))

@section('content')

<div class="row justify-content-center">
  <div class="col-md-6">


    {{ html()->form('POST', route('admin.product.brand.store'))->attribute('enctype', 'multipart/form-data')->open() }}
    <x-backend.card>
      <x-slot name="header">
        @lang('Create Brand')
      </x-slot>

      <x-slot name="headerActions">
        <x-utils.link class="btn btn-sm btn-secondary" :href="route('admin.product.brand.index')"
          :text="__('Cancel')" />
      </x-slot>

      <x-slot name="body">

        <div class="form-group">
          <div class="form-check form-check-inline">
            {{html()->checkbox('active', old('active', true), date('Y-m-d H:i:s'))->class('form-check-input')}}
            {{ html()->label("Active")->class('form-check-label')->for('active') }}
          </div>
          <div class="form-check form-check-inline">
            {{html()->checkbox('top', old('top', false), 1)->class('form-check-input')}}
            {{ html()->label("IsTop")->class('form-check-label')->for('top') }}
          </div>
        </div> <!-- form-group row-->

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
        <button class="btn btn-sm btn-primary" type="submit">@lang('Create Brand')</button>
      </x-slot>
    </x-backend.card>

    {{ html()->form()->close() }}

  </div>
</div>




@endsection