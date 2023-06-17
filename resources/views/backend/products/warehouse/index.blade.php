@extends('backend.layouts.app')

@section('title', __('Manage warehouses'))

@section('content')
<x-backend.card>
  <x-slot name="header">
    @lang('Manage warehouses')
  </x-slot>
  <x-slot name="headerActions">
    <x-utils.link :href="route('admin.product.warehouse.create')" icon="fas fa-plus" class="btn btn-sm btn-secondary" :text="__('Add Warehouse')" />
  </x-slot>
  <x-slot name="body">
    <livewire:backend.warehouses-table />
  </x-slot>
</x-backend.card>

@endsection