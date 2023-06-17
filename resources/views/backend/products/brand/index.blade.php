@extends('backend.layouts.app')

@section('title', __('Manage Brands'))

@section('content')
<x-backend.card>
  <x-slot name="header">
    @lang('Manage Brands')
  </x-slot>
  <x-slot name="headerActions">
    <x-utils.link :href="route('admin.product.brand.create')" icon="fas fa-plus" class="btn btn-sm btn-secondary"
      :text="__('Create')" />
  </x-slot>

  <x-slot name="body">
    <livewire:backend.brands-table />
  </x-slot>
</x-backend.card>
@endsection