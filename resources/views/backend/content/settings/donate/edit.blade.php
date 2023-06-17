@extends('backend.layouts.app')

@section('title', 'Mixed Settings')

@php
    $required = html()
        ->span('*')
        ->class('text-danger');
    $demoImg = 'img/backend/front-logo.png';
@endphp

@section('content')

    @php
        $multis = DB::table('donates')
            ->where('is_active', 1)
            ->orwhere('is_active', 0)
            ->get();
    @endphp
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form action="{{ route('admin.setting.donate.update') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label> Image</label>
                                    <input type="file" name="banner_image" class="form-control">
                                    <input type="hidden" name="oldimage" value="{{ $notice->image }}" class="form-control">
                                    <input type="hidden" name="activity_id" value="{{ $notice->id }}"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" name="title" value="{{ $notice->title }}" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Link</label>
                                    <input type="text" name="link" value="{{ $notice->link }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Color</label>
                                    <input type="text" name="color" value="{{ $notice->color }}" class="form-control">
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Active/Deactive</label>
                                    <select class="form-control" name="is_active">
                                        <option value="1" @if ($notice->is_active == 1) selected @endif>Active
                                        </option>
                                        <option value="0" @if ($notice->is_active == 0) selected @endif>Deactive
                                        </option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
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
