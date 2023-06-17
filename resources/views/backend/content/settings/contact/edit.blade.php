@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form action="{{ route('admin.setting.contactBanner.update') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="contact_banner_id" value="{{ $contact_banner->id }}">
                            <label>Contact Title</label>
                            <textarea id="" class="editor form-control" col="10" row="3" name="contact_title">{{ $contact_banner->contact_title }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Contact Image</label>
                            <input type="file" name="contact_img" value="{{ $contact_banner->contact_img }}"
                                class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="is_active">
                                <option value="1" @if ($contact_banner->is_active == 1) selected @endif>Active</option>
                                <option value="0" @if ($contact_banner->is_active == 0) selected @endif>Deactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>





    </div>
@endsection
