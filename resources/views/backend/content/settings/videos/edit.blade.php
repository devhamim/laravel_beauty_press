@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form action="{{ route('admin.setting.video.update') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="videos_id" value="{{ $videos->id }}">
                            <label>Video Title</label>
                            <textarea id="" class="editor form-control" col="10" row="3" name="video_title">{{ $videos->video_title }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Video Url</label>
                            <input type="text" name="video_url" value="{{ $videos->video_url }}" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="is_active">
                                <option value="1" @if ($videos->is_active == 1) selected @endif>Active</option>
                                <option value="0" @if ($videos->is_active == 0) selected @endif>Deactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>





    </div>
@endsection
