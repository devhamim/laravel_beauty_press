@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form action="{{ route('admin.setting.pricings.update') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="pricings_id" value="{{ $pricings->id }}">
                            <label>Title</label>
                            <input type="text" name="title" class="editor form-control" value="{{ $pricings->title }}">
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="price" value="{{ $pricings->price }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" value="{{ $pricings->image }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="is_active">
                                <option value="1" @if ($pricings->is_active == 1) selected @endif>Active</option>
                                <option value="0" @if ($pricings->is_active == 0) selected @endif>Deactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>





    </div>
@endsection
