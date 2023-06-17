@extends('backend.layouts.app')

@section('title', app_name() . ' | Trashed pages')

@section('content')
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-sm-5">
        <h4 class="card-title mb-0">
          Trashed Pages
        </h4>
      </div> <!-- col-->
      <div class="col-sm-7 pull-right">
        <div class="btn-toolbar float-right" role="toolbar" aria-label="@lang('labels.general.toolbar_btn_groups')">
          <a href="{{ route('admin.page.index') }}" class="btn btn-success ml-1" data-toggle="tooltip"
            title="Show Pages"><i class="fa fa-list-alt"></i></a>
        </div>
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
              @forelse($pages as $page)
              <tr class="vertical-middle">
                <td>{{ ucwords($page->post_title) }}</td>
                <td class="text-center">{{ $page->user->first_name }} {{$page->user->last_name}}</td>
                <td class="text-center">
                  <p class="m-0">{{$page->post_status}}</p>
                  {{ date('d-M-Y', strtotime($page->created_at)) }}
                </td>
                <td class="text-center">@include('backend.content.page.includes.actions-trash', ['page' => $page])</td>
              </tr>
              @empty
              <tr class="vertical-middle">
                <td colspan="4" class="bg-danger">No Trashed Found</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div> <!-- col-->
    </div> <!-- row-->
    <div class="row">
      <div class="col-7">
        <div class="float-left">
          {!! $pages->total() !!}
          {{ trans_choice('Pages', $pages->total()) }}
        </div>
      </div> <!-- col-->

      <div class="col-5">
        <div class="float-right">
          {!! $pages->render() !!}
        </div>
      </div> <!-- col-->
    </div> <!-- row-->
  </div> <!-- card-body-->
</div> <!-- card-->
@endsection