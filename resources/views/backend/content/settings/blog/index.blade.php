@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('admin.setting.blogs.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Blog Banner Title</label>
                            <input type="text" name="blog_ban_title" class="form-control"
                                placeholder="Blog Banner Title*">
                        </div>

                        <div class="form-group">
                            <label>Blog Banner Image</label>
                            <input type="file" name="blog_ban_img" class="form-control" placeholder="Blog Banner Image*">
                        </div>

                        <div class="form-group">
                            <label>Blog Title</label>
                            <input type="text" name="blog_title" class="form-control" placeholder="Blog Title*">
                        </div>

                        <div class="form-group">
                            <label>Blog Image</label>
                            <input type="file" name="blog_img" class="form-control" placeholder="Blog Image*">
                        </div>

                        <div class="form-group">
                            <label>Blog Sort Description</label>
                            <input type="text" name="blog_sort" class="form-control"
                                placeholder="Blog Sort Description*">
                        </div>
                        <div class="form-group">
                            <label>Blog Long Description</label>
                            <textarea name="blog_long" class="form-control" id="" cols="30" rows="5"
                                placeholder="Blog Long Description*"></textarea>
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
                            <th>Blog Banner Title</th>
                            <th>Blog Banner Image</th>
                            <th>Blog Title</th>
                            <th>Blog Image</th>
                            <th>Blog Sort Description</th>
                            <th>Blog Long Description</th>
                            <th>Active/Deactive</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogsall as $Blog)
                            <tr>
                                <td style="height: 40%; ">{{ $Blog->blog_ban_title }}</td>
                                <td style="height: 40%; ">
                                    <img style="height: 40%; width: 80%"
                                        src="{{ asset('backend_img/blogs') }}/{{ $Blog->blog_ban_img }}" alt="">
                                </td>
                                <td style="height: 40%; ">{{ $Blog->blog_title }}</td>
                                <td style="height: 40%; ">
                                    <img style="height: 40%; width: 80%"
                                        src="{{ asset('backend_img/blogs') }}/{{ $Blog->blog_img }}" alt="">
                                </td>
                                <td style="height: 40%; ">{{ $Blog->blog_sort }}</td>
                                <td style="height: 40%; ">{{ $Blog->blog_long }}</td>
                                <td>
                                    @if ($Blog->is_active == 1)
                                        <button class="btn btn-sm btn-primary">Active</button>
                                    @elseif($Blog->is_active == 0)
                                        <button class="btn btn-sm btn-danger">Deactive</button>
                                    @endif
                                </td>


                                <td>
                                    <a href="{{ route('admin.setting.blogs.edit', $Blog->id) }}"
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
