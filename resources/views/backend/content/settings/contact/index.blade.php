@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('admin.setting.contact.banner.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Contact Title</label>
                            <input type="text" name="contact_title" class="form-control" placeholder="Contact Title*">
                        </div>

                        <div class="form-group">
                            <label>Contact Image</label>
                            <input type="file" name="contact_img" class="form-control" placeholder="Contact Image*">
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
                            <th>Contact Title</th>
                            <th>Contact Image</th>
                            <th>Active/Deactive</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contactbanner as $banner)
                            <tr>
                                <td style="height: 40%; width: 40%">{{ $banner->contact_title }}</td>
                                <td style="height: 40%; width: 40%">
                                    <img style="height: 40%; width: 40%"
                                        src="{{ asset('backend_img/contact') }}/{{ $banner->contact_img }}" alt="">
                                </td>
                                <td>
                                    @if ($banner->is_active == 1)
                                        <button class="btn btn-sm btn-primary">Active</button>
                                    @elseif($banner->is_active == 0)
                                        <button class="btn btn-sm btn-danger">Deactive</button>
                                    @endif
                                </td>


                                <td>
                                    <a href="{{ route('admin.setting.contactBanner.edit', $banner->id) }}"
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
