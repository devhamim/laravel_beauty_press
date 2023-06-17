@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('admin.setting.pricing.store') }}"
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Title*">
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="price" class="form-control" placeholder="Price*">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
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
                            <th>Title</th>
                            <th>Price</th>
                            <th>Active/Deactive</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pricings as $pricing)
                            <tr>
                                <td style="height: 40%">{{ $pricing->title }}</td>
                                <td style="height: 40%">{{ $pricing->price }} TK</td>
                                <td style="height: 40%; width: 30%">
                                    <img style="height: 40%; width: 20%"
                                        src="{{ asset('backend_img/pricing') }}/{{ $pricing->image }}" alt="">
                                </td>
                                <td>
                                    @if ($pricing->is_active == 1)
                                        <button class="btn btn-sm btn-primary">Active</button>
                                    @elseif($pricing->is_active == 0)
                                        <button class="btn btn-sm btn-danger">Deactive</button>
                                    @endif
                                </td>


                                <td>
                                    <a href="{{ route('admin.setting.pricing.edit', $pricing->id) }}"
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
