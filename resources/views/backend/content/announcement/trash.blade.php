@extends('backend.layouts.app')

@section('title', 'Trashed Announcement')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h3 class="card-title">Announcement Trashed</h3>
                </div> <!-- col-->
                <div class="col-sm-7 pull-right">
                    <div class="btn-toolbar float-right" role="toolbar"
                         aria-label="@lang('labels.general.toolbar_btn_groups')">
                        <a href="{{ route('admin.announcement.index') }}" class="btn btn-success ml-1" data-toggle="tooltip"
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
                            @forelse($announcements as $announcement)
                                <tr class="vertical-middle">
                                    <td>{{ ucwords($announcement->post_title) }}</td>
                                    <td class="text-center">{{ $announcement->user->full_name}}</td>
                                    <td class="text-center">
                                        <p class="m-0">{{$announcement->post_status}}</p>
                                        {{ date('d-M-Y', strtotime($announcement->created_at)) }}
                                    </td>
                                    <td class="text-center">@include('backend.content.announcement.includes.actions-trash', ['announcement' =>
                  $announcement])
                                    </td>
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
                        {!! $announcements->total() !!}
                        {{ trans_choice('Announcements Trashed', $announcements->total()) }}
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
