@inject('model', '\App\Domains\Auth\Models\User')

@extends('backend.layouts.app')

@section('title', __('Register Product'))

@section('content')
{{ html()->form('POST', route('admin.product.inhouse.store'))->attribute('enctype', 'multipart/form-data')->open() }}

<div class="row justify-content-center">
  <div class="col-md-10">

    <x-backend.card>
      <x-slot name="header">
        @lang('Product Information')
      </x-slot>

      <x-slot name="headerActions">
        <x-utils.link class="btn btn-sm btn-secondary" :href="route('admin.product.inhouse.index')"
          :text="__('Cancel')" />
      </x-slot>

      <x-slot name="body">




        <div class="row">
          <div class="col-md-3">
            <div class="list-group" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action active" id="list-general-list" data-toggle="list"
                href="#list-general" role="tab" aria-controls="general">General</a>
              <a class="list-group-item list-group-item-action" id="list-images-list" data-toggle="list"
                href="#list-images" role="tab" aria-controls="images">Images</a>
              <a class="list-group-item list-group-item-action" id="list-videos-list" data-toggle="list"
                href="#list-videos" role="tab" aria-controls="videos">Videos</a>
              <a class="list-group-item list-group-item-action" id="list-meta-tags-list" data-toggle="list"
                href="#list-meta-tags" role="tab" aria-controls="meta-tags">Meta Tags</a>
              <a class="list-group-item list-group-item-action" id="list-customer-choice-list" data-toggle="list"
                href="#list-customer-choice" role="tab" aria-controls="customer-choice">Customer Choice</a>
              <a class="list-group-item list-group-item-action" id="list-price-list" data-toggle="list"
                href="#list-price" role="tab" aria-controls="price">Price</a>
              <a class="list-group-item list-group-item-action" id="list-description-list" data-toggle="list"
                href="#list-description" role="tab" aria-controls="description">Description</a>
              <a class="list-group-item list-group-item-action" id="list-shipping-list" data-toggle="list"
                href="#list-shipping" role="tab" aria-controls="shipping">Shipping Info</a>
            </div>
          </div>
          <div class="col-md-9">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="list-general" role="tabpanel"
                aria-labelledby="list-general-list">
                General
              </div>
              <div class="tab-pane fade" id="list-images" role="tabpanel" aria-labelledby="list-images-list">
                Images
              </div>
              <div class="tab-pane fade" id="list-videos" role="tabpanel" aria-labelledby="list-videos-list">
                Videos
              </div>
              <div class="tab-pane fade" id="list-meta-tags" role="tabpanel" aria-labelledby="list-meta-tags-list">
                meta-tags
              </div>
              <div class="tab-pane fade" id="list-customer-choice" role="tabpanel" aria-labelledby="list-customer-choice-list">
                Customer Choice
              </div>
              <div class="tab-pane fade" id="list-price" role="tabpanel" aria-labelledby="list-price-list">
                price
              </div>
              <div class="tab-pane fade" id="list-description" role="tabpanel" aria-labelledby="list-description-list">
                Description
              </div>
              <div class="tab-pane fade" id="list-shipping" role="tabpanel" aria-labelledby="list-shipping-list">
                Shipping Info
              </div>
            </div>
          </div>
        </div>



      </x-slot>

      <x-slot name="footer">
        <button class="btn btn-sm btn-primary" type="submit">@lang('Save Product')</button>
      </x-slot>
    </x-backend.card>

  </div>
</div>
{{ html()->form()->close() }}
@endsection