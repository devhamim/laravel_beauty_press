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
        $multis = DB::table('events')
            ->where('is_active', 1)
            ->orwhere('is_active', 0)
            ->get();
    @endphp
    <div class="card">
        <div class="card-header with-border">
            <h3 class="card-title">Manage Event </h3>
        </div>
        <div class="card-body">

            {{ html()->form('POST', route('admin.setting.bottombanner.store'))->attribute('enctype', 'multipart/form-data')->open() }}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {{ html()->label('Event Title')->for('bottombanner_text_bottom') }}
                        {{ html()->text('bottombanner_text_bottom', get_setting('bottombanner_text_bottom'))->placeholder('bottombanner_text_bottom')->class('form-control') }}
                    </div> <!-- form-group-->
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {{ html()->label('Event Short Description')->for('event_btn_des') }}
                        {{ html()->textarea('event_btn_des', get_setting('event_btn_des'))->class('form-control') }}
                    </div> <!-- form-group-->
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {{ html()->label('Event link Color')->for('event_btn_color') }}
                        {{ html()->text('event_btn_color', get_setting('event_btn_color'))->class('form-control') }}
                    </div> <!-- form-group-->
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {{ html()->label('Event Button Name')->for('event_btn_name') }}
                        {{ html()->text('event_btn_name', get_setting('event_btn_name'))->class('form-control') }}
                    </div> <!-- form-group-->
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {{ html()->label('Event Banner Image')->for('bottombanner_image') }}
                        {{ html()->file('bottombanner_image')->class('form-control-file image d-none')->id('bottombanner_image')->acceptImage() }}
                        <div class="d-block">
                            <label for="bottombanner_image">
                                <img src="{{ asset(get_setting('bottombanner_image', $demoImg)) }}"
                                    class="border img-fluid rounded holder" alt="Image upload">
                            </label>
                        </div>
                    </div> <!-- form-group-->
                </div>
            </div>

            <div class="form-group ">
                {{ html()->button('Update')->class('btn btn-block  btn-primary') }}
            </div> <!-- form-group-->

            {{ html()->form()->close() }}

        </div> <!--  .card-body -->
    </div> <!--  .card -->


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('admin.setting.event.store') }}"
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Thumb Image</label>
                                    <input type="file" name="banner_image" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Banner Image</label>
                                    <input type="file" name="single_event_banner" class="form-control">


                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Short Text</label>
                                    <input type="text" name="sort_para" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="" class="editor form-control" col="10" row="3" name="description"></textarea>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Facilities</label>
                                    <textarea id="" class="editor form-control" col="3" row="1" name="facility"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Map</label>
                                    <textarea class="form-control" col="3" row="1" name="map"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Event Mission Title</label>
                                    <textarea class="form-control" col="3" row="1" name="event_title_1"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Event Mission</label>
                                    <textarea class="form-control" col="3" row="1" name="eventMission"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Event Vission Title</label>
                                    <textarea class="form-control" col="3" row="1" name="event_title_2"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Event Vission</label>
                                    <textarea class="form-control" col="3" row="1" name="eventVission"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Our Vission Title</label>
                                    <textarea class="form-control" col="3" row="1" name="event_title_3"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Our Vission</label>
                                    <textarea class="form-control" col="3" row="1" name="ourVission"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Organized By</label>
                                    <input type="text" name="organized_by" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>date</label>
                                    <input type="date" name="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Start</label>
                                    <input type="time" name="start" class="form-control">

                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Venue</label>
                                    <input type="text" name="venue" class="form-control">

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control">

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control">

                                </div>
                            </div>
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
                        @foreach ($multis as $multi)
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
                                    <a href="/admin/setting/event/edit/{{ $multi->id }}"
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
