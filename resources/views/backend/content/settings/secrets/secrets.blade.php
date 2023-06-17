@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('admin.setting.secrets.store') }}"
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="secrets_des" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>About Image Left</label>
                            <input type="file" name="secrets_img_l" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>About Image Right</label>
                            <input type="file" name="secrets_img_r" class="form-control">
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
                            <th>Description</th>
                            <th>About Image Left</th>
                            <th>About Image Right</th>
                            <th>Active/Deactive</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($secrets as $secret)
                            <tr>
                                <td style="height: 40%; width: 50%">{{ $secret->secrets_des }}</td>
                                <td><img src="{{ asset('backend_img/secrets') }}/{{ $secret->secrets_img_l }}"
                                        style="height: 100px">
                                </td>
                                <td><img src="{{ asset('backend_img/secrets') }}/{{ $secret->secrets_img_r }}"
                                        style="height: 100px">
                                </td>

                                <td>
                                    @if ($secret->is_active == 1)
                                        <button class="btn btn-sm btn-primary">Active</button>
                                    @elseif($secret->is_active == 0)
                                        <button class="btn btn-sm btn-danger">Deactive</button>
                                    @endif
                                </td>


                                <td>
                                    <a href="{{ route('admin.setting.secrets.edit', $secret->id) }}"
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
