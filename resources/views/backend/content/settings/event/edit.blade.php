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
        $multis = DB::table('notices')
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
                    <form action="{{ route('admin.setting.event.update') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Thumb Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <input type="hidden" name="oldimage" value="{{ $notice->image }}" class="form-control">
                                    <input type="hidden" name="event_id" value="{{ $notice->id }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Banner Image</label>
                                    <input type="file" name="single_event_banner" class="form-control">
                                    <input type="hidden" name="oldsingle_event_banner"
                                        value="{{ $notice->single_event_banner }}" class="form-control">

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" value="{{ $notice->title }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Short Text</label>
                                    <input type="text" name="sort_para" value="{{ $notice->sort_para }}"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="" class="editor form-control" col="10" row="3" name="description">{{ $notice->description }}</textarea>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Facilities</label>
                                    <textarea id="" class="editor form-control" col="3" row="1" name="facility">{{ $notice->facility }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Map</label>
                                    <textarea class="form-control" col="3" row="1" name="map">{{ $notice->map }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Event Mission Title</label>
                                    <textarea class="form-control" col="3" row="1" name="event_title_1">{{ $notice->event_title_1 }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Event Mission</label>
                                    <textarea class="form-control" col="3" row="1" name="eventMission">{{ $notice->eventMission }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Event Vission Title</label>
                                    <textarea class="form-control" col="3" row="1" name="event_title_2">{{ $notice->event_title_2 }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Event Vission</label>
                                    <textarea class="form-control" col="3" row="1" name="eventVission">{{ $notice->eventVission }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Our Vission Title</label>
                                    <textarea class="form-control" col="3" row="1" name="event_title_3">{{ $notice->event_title_3 }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Our Vission</label>
                                    <textarea class="form-control" col="3" row="1" name="ourVission">{{ $notice->ourVission }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Organized By</label>
                                    <input type="text" name="organized_by" value="{{ $notice->organized_by }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>date</label>
                                    <input type="date" name="date" value="{{ $notice->date }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Start</label>
                                    <input type="time" name="start" value="{{ $notice->start }}"
                                        class="form-control">

                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Venue</label>
                                    <input type="text" name="venue" value="{{ $notice->venue }}"
                                        class="form-control">

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" value="{{ $notice->email }}"
                                        class="form-control">

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" value="{{ $notice->phone }}"
                                        class="form-control">

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
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option value="1" @if ($notice->status == 1) selected @endif>Upcomming
                                        </option>
                                        <option value="0" @if ($notice->is_active == 0) selected @endif>Completed
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

    @php
        $brands = DB::table('brands')
            ->where('is_active', 1)
            ->get();
    @endphp
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('admin.setting.eventsponsor.store') }}"
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Event Sponsor</label>
                                    <select name="sponsor_id" class="form-control" required>
                                        <option selected disabled>Select Event Sponsor</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->title }}</option>
                                        @endforeach

                                    </select>
                                    <input type="hidden" name="event_sponsor_id" value="{{ $notice->id }}"
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <!-- <table class="table table-bordered" id="dynamic_field">                                                                                                                                </table>   -->
                            <button type="submit" class="btn btn-info">Submit</button>
                            <!--<input value="Submit" />  -->
                        </div>


                    </form>

                </div>
            </div>
        </div>





    </div>

    @php
        $sponsors = DB::table('sponsors')
            ->where('event_id', $notice->id)
            ->get();
    @endphp
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Event Sponsor</th>
                            <th>Name</th>
                            <th>Active/Deactive</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sponsors as $sponsor)
                            @php
                                $sponsorbrands = DB::table('brands')
                                    ->where('id', $sponsor->sponsor_id)
                                    ->first();
                            @endphp
                            <tr>
                                <td><img src="{{ asset('/setting/banner/' . optional($sponsorbrands)->logo) }}"
                                        style="height: 100px"></td>
                                <td>{{ optional($sponsorbrands)->title }}</td>

                                <td>
                                    @if (optional($sponsor)->is_active == 1)
                                        <button class="btn btn-sm btn-primary">Active</button>
                                    @elseif(optional($sponsor)->is_active == 0)
                                        <button class="btn btn-sm btn-danger">Deactive</button>
                                    @endif
                                </td>


                                <td>
                                    <a href="/admin/setting/eventsponsor/edit/{{ $sponsor->id }}"
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
