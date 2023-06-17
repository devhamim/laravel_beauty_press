@extends('backend.layouts.app')

@section('title', ' General Settings ')

@php
$required = html()->span('*')->class('text-danger');
$demoImg = 'img/backend/front-logo.png';
@endphp

@inject('storage', 'Illuminate\Support\Facades\Storage')

@section('content')


<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header with-border">
        <h3 class="card-title">Browsing Caching Control </h3>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center">SL</th>
              <th class="text-center">Date</th>
              <th>Keyword</th>
              <th class="text-center">Size</th>
              <th class="text-center">Option</th>
            </tr>
          </thead>
          <tbody>
            @forelse($displayInfo as $info)
            <tr>
              <td class="text-center">{{$loop->iteration}}</td>
              <td class="text-center">{{$info['date']}}</td>
              <td>{{$info['name']}}</td>
              <td class="text-center">{{number_format($info['size'] / 1024, 2)}} kb</td>
              <td class="text-center">
                <form action="{{route('admin.setting.cache.control.store')}}" method="post">
                  @csrf
                  <input type="hidden" name="type" value="{{$info['file']}}">
                  <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                </form>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="5" class="text-center align-middle text-danger">Browsing file not found</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div> <!--  .card-body -->
    </div> <!--  .card -->
  </div> <!-- .col-md-9 -->
</div> <!-- .row -->

@endsection