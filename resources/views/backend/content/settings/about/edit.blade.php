@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form action="{{ route('admin.setting.about.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="about_banner_id" value="{{ $about_banner->id }}">
                            <label>About Banner Title</label>
                            <textarea id="" class="editor form-control" col="10" row="3" name="about_title">{{ $about_banner->about_title }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>About Banner Image</label>
                            <input type="file" name="about_img" value="{{ $about_banner->about_img }}"
                                class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="is_active">
                                <option value="1" @if ($about_banner->is_active == 1) selected @endif>Active</option>
                                <option value="0" @if ($about_banner->is_active == 0) selected @endif>Deactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>





    </div>
@endsection
