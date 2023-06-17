@extends('backend.layouts.app')

@section('title', ' Manage Announcement')

@section('content')
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-sm-5">
        <h4 class="card-title mb-0"> Announcement Management </h4>
      </div> <!-- col-->

      <div class="col-sm-7 pull-right">
        @include('backend.content.announcement.includes.header-buttons')
      </div> <!-- col-->
    </div> <!-- row-->

    <div class="row mt-4">
      <div class="col">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr class="vertical-middle">
                <th>Title</th>
                <th style="width:120px" class="text-center">Author</th>
                <th style="width:150px" class="text-center">Date</th>
                <th style="width:150px" class="text-center">@lang('labels.general.actions')</th>
              </tr>
            </thead>
            <tbody>
              @foreach($announcements as $announcement)
              <tr class="vertical-middle">
                <td>{!! $announcement->post_title !!}</td>
                <td class="text-center">{{ $announcement->user->full_name ?? $announcement->user->name ?? 'N/A' }}</td>
                <td class="text-center">
                  <p class="m-0">{{$announcement->post_status}}</p>
                  {{ date('d-M-Y', strtotime($announcement->created_at)) }}
                </td>
                <td class="text-center">@include('backend.content.announcement.includes.actions', ['announcement' =>
                  $announcement])</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- col-->
    </div> <!-- row-->
    <div class="row">
      <div class="col-7">
        <div class="float-left">
          {!! $announcements->total() !!}
          {{ trans_choice('Announcement', $announcements->total()) }}
        </div>
      </div> <!-- col-->

      <div class="col-5">
        <div class="float-right">
          {!! $announcements->render() !!}
        </div>
      </div> <!-- col-->
    </div> <!-- row-->
  </div> <!-- card-body-->
</div> <!-- card-->
@endsection
