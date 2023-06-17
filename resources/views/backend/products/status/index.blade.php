@extends('backend.layouts.app')

@section('title', __('Manage statuses'))

@section('content')
<x-backend.card>
  <x-slot name="header">
    @lang('Manage statuses')
  </x-slot>
  <x-slot name="headerActions">
    <x-utils.link :href="route('admin.product.status.create')" icon="fas fa-plus" class="btn btn-sm btn-secondary" :text="__('Create Status')" />
  </x-slot>
  <x-slot name="body">
    <livewire:backend.statuses-table />
  </x-slot>
</x-backend.card>
@endsection