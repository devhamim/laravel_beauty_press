@extends('backend.layouts.app')

@section('title', ' Page Management | Create new page')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('admin.setting.page.store') }}"
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Background Image</label>
                            <input type="file" name="image" class="form-control">

                        </div>
                        <div class="form-group">
                            <label>Background Color</label>
                            <input type="input" name="bgcolor" class="form-control">

                        </div>
                        <div class="form-group">
                            <label>Page Title</label>
                            <input type="text" name="title" class="form-control">

                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" name="slug" class="form-control">

                        </div>
                        <div class="form-group">
                            <label>Page Description</label>
                            <textarea id="" class="editor form-control" col="10" row="3" name="description"></textarea>


                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="vehicle1" name="hearder" value="1">
                            <label for="vehicle1">Header</label><br>
                            <input type="checkbox" id="vehicle3" name="footer_right" value="3">
                            <label for="vehicle3"> Footer Right</label><br><br>

                        </div>

                        <div class="table-responsive">
                            <!-- <table class="table table-bordered" id="dynamic_field">
                                                                                                <tr>
                                                                                                    <td><input type="file" name="multiimage[]" placeholder="multiimage" class="form-control name_list" /></td>
                                                                                                    <td><input type="text" name="title[]" placeholder="title" class="form-control name_list" /></td>
                                                                                                    <td><textarea class="form-control" col="10" row="3" name="description[]"></textarea></td>
                                                                                                    <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                                                                                                </tr>
                                                                                            </table>   -->
                            <button type="submit" class="btn btn-info">Submit</button>
                            <!--<input value="Submit" />  -->
                        </div>


                    </form>

                </div>
            </div>
        </div>





    </div>




    @php
        $pages = DB::table('pages')
            ->where('is_active', 1)
            ->orwhere('is_active', 0)
            ->get();
    @endphp
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Active/Deactive</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pages as $multi)
                            <tr>
                                <td><img src="{{ asset('/setting/banner/' . $multi->image) }}" style="height: 100px">
                                </td>
                                <td>{{ $multi->title }}</td>

                                <td>
                                    @if ($multi->is_active == 1)
                                        <button class="btn btn-sm btn-primary">Active</button>
                                    @elseif($multi->is_active == 0)
                                        <button class="btn btn-sm btn-danger">Deactive</button>
                                    @endif
                                </td>


                                <td>
                                    <a href="/admin/setting/page/edit/{{ $multi->id }}"
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




@push('after-styles')
    {{ style(asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')) }}
@endpush

@push('after-scripts')
    {!! script(asset('assets/plugins/tinymce/jquery.tinymce.min.js')) !!}
    {!! script(asset('assets/plugins/tinymce/tinymce.min.js')) !!}
    {!! script(asset('assets/plugins/tinymce/editor-helper.js')) !!}
    {!! script(asset('assets/plugins/moment/moment.js')) !!}
    {!! script(asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')) !!}

    <script>
        $(document).ready(function() {
            simple_editor('.editor', 450);
            $('#datepicker-autoclose').datepicker({
                format: "dd/mm/yyyy",
                clearBtn: true,
                autoclose: true,
                todayHighlight: true,
            });

            $("#image").change(function() {
                readImageURL(this, $('#holder'));
            });
        });

        $(document).on('blur', "#post_title", function() {
            let postField = $(this);
            let post_title = postField.val();
            if (post_title) {
                ajax_slug_url(post_title);
                setTimeout(update, 1000); // 30 seconds
                $("#post_error").empty();
                postField.removeClass('is-invalid');
            } else {
                $("#post_error").text('Title must not empty');
                postField.addClass('is-invalid');
            }
        });

        $(function() {
            $(".form-check-input").click(function() {
                const status = $(this).val();
                if (status === "schedule") {
                    $("#scheduleDate").removeClass("d-none");
                } else if (status === "1") {
                    $("#for_New_upload").removeClass("d-none");
                } else if (status === "0") {
                    $("#for_New_upload").addClass("d-none");
                } else {
                    $("#scheduleDate").addClass("d-none");
                }
            });

        });
    </script>
@endpush
