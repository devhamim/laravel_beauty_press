@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('admin.setting.team.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name*">
                        </div>
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" name="position" class="form-control" placeholder="Position*">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="team_img" class="form-control">
                        </div>
                        {{-- <div class="form-group">
                            <label>Social Media</label>
                            <input type="text" name="team_social" class="form-control" placeholder="Social Media*">
                        </div> --}}
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
                            <th>Name</th>
                            <th>Position</th>
                            <th>Image</th>
                            <th>Active/Deactive</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                            <tr>
                                <td style="height: 30%; width: 20%">{{ $team->name }}</td>
                                <td style="height: 30%; width: 20%">{{ $team->position }}</td>
                                <td style="height: 30%; width: 30%">
                                    <img style="height: 30%; width: 30%"
                                        src="{{ asset('backend_img/about') }}/{{ $team->team_img }}" alt="">
                                </td>
                                <td>
                                    @if ($team->is_active == 1)
                                        <button class="btn btn-sm btn-primary">Active</button>
                                    @elseif($team->is_active == 0)
                                        <button class="btn btn-sm btn-danger">Deactive</button>
                                    @endif
                                </td>


                                <td>
                                    <a href="{{ route('admin.setting.team.edit', $team->id) }}"
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
