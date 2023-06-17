@extends('backend.layouts.app')

@section('title', __('Manage statuses'))

@section('content')
<x-backend.card>
  <x-slot name="header">
    @lang('Manage statuses')
  </x-slot>
  <x-slot name="body">
    <livewire:backend.contacts-table />
  </x-slot>
</x-backend.card>
@endsection