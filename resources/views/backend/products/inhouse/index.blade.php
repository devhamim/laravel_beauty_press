@extends('backend.layouts.app')

@section('title', __('In House Products'))

@section('content')
<x-backend.card>
  <x-slot name="header">
    @lang('In House Products')
  </x-slot>
  <x-slot name="headerActions">
    <x-utils.link :href="route('admin.product.inhouse.create')" icon="fas fa-plus" class="btn btn-sm btn-secondary" :text="__('Create')" />
  </x-slot>

  <x-slot name="body">
    {{--
    <livewire:backend.roles-table /> --}}
  </x-slot>
</x-backend.card>
@endsection