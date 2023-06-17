@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form action="{{ route('admin.setting.team.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="about_team_id" value="{{ $about_team->id }}">
                            <label>Name</label>
                            <input type="text" name="name" class="editor form-control"
                                value="{{ $about_team->name }}">
                        </div>
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" name="position" class="editor form-control"
                                value="{{ $about_team->position }}">
                        </div>

                        <div class="form-group">
                            <label>Team Image</label>
                            <input type="file" name="team_img" value="{{ $about_team->team_img }}" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="is_active">
                                <option value="1" @if ($about_team->is_active == 1) selected @endif>Active</option>
                                <option value="0" @if ($about_team->is_active == 0) selected @endif>Deactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>





    </div>
@endsection
