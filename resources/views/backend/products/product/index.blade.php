@extends('backend.layouts.app')

@section('title', __('Manage Products'))

@section('content')
<x-backend.card>
  <x-slot name="header">
    @lang('Manage Products')
  </x-slot>
  <x-slot name="headerActions">
    <x-utils.link :href="route('admin.product.product.create')" icon="fas fa-plus" class="btn btn-sm btn-secondary" :text="__('Add New Product')" />
  </x-slot>

  <x-slot name="body">
    <livewire:backend.products-table />
  </x-slot>
</x-backend.card>
@endsection