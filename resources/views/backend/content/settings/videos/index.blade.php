@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('admin.setting.video.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Video Title</label>
                            <input type="text" name="video_title" class="form-control" placeholder="Video Title*">
                        </div>

                        <div class="form-group">
                            <label>Video Url</label>
                            <input type="text" name="video_url" class="form-control" placeholder="Video Url*">
                        </div>

                        <div class="table-responsive">

                            <button type="submit" class="btn btn-info">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>





    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Video Title</th>
                            <th>Video Url</th>
                            <th>Active/Deactive</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($videos as $video)
                            <tr>
                                <td style="height: 40%">{{ $video->video_title }}</td>
                                <td style="height: 40%">{{ $video->video_url }}</td>
                                <td>
                                    @if ($video->is_active == 1)
                                        <button class="btn btn-sm btn-primary">Active</button>
                                    @elseif($video->is_active == 0)
                                        <button class="btn btn-sm btn-danger">Deactive</button>
                                    @endif
                                </td>


                                <td>
                                    <a href="{{ route('admin.setting.video.edit', $video->id) }}"
                                        class="btn btn-primary btn-sm editProduct">Edit</a>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
