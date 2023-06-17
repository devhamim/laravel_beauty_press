@extends('backend.layouts.app')

@section('title', __('Manage Shippings'))

@section('content')
<x-backend.card>
  <x-slot name="header">
    @lang('Manage Shippings')
  </x-slot>
  <x-slot name="headerActions">
    <x-utils.link :href="route('admin.product.shipping.create')" icon="fas fa-plus" class="btn btn-sm btn-secondary" :text="__('Create Shipping')" />
  </x-slot>
  <x-slot name="body">
    <livewire:backend.shippings-table />
  </x-slot>
</x-backend.card>
@endsection