@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form action="{{ route('admin.setting.blogs.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Blog Banner Title</label>
                            <input type="hidden" name="blogs_id" value="{{ $blogs->id }}">
                            <input type="text" name="blog_ban_title" class="form-control"
                                placeholder="Blog Banner Title*" value="{{ $blogs->blog_ban_title }}">
                        </div>

                        <div class="form-group">
                            <label>Blog Banner Image</label>
                            <input type="file" name="blog_ban_img" class="form-control" placeholder="Blog Banner Image*"
                                value="{{ $blogs->blog_ban_img }}">
                        </div>

                        <div class="form-group">
                            <label>Blog Title</label>
                            <input type="text" name="blog_title" class="form-control" placeholder="Blog Title*"
                                value="{{ $blogs->blog_title }}">
                        </div>

                        <div class="form-group">
                            <label>Blog Image</label>
                            <input type="file" name="blog_img" class="form-control" placeholder="Blog Image*"
                                value="{{ $blogs->blog_img }}">
                        </div>

                        <div class="form-group">
                            <label>Blog Sort Description</label>
                            <input type="text" name="blog_sort" class="form-control" placeholder="Blog Sort Description*"
                                value="{{ $blogs->blog_sort }}">
                        </div>
                        <div class="form-group">
                            <label>Blog Long Description</label>
                            <textarea name="blog_long" class="form-control" id="" cols="30" rows="5"
                                placeholder="Blog Long Description*">{{ $blogs->blog_long }}</textarea>
                        </div>


                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="is_active">
                                <option value="1" @if ($blogs->is_active == 1) selected @endif>Active</option>
                                <option value="0" @if ($blogs->is_active == 0) selected @endif>Deactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>





    </div>
@endsection
