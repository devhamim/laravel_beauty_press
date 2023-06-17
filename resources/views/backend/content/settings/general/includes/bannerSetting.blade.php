<div class="card">
    <div class="card-header with-border">
        <h3 class="card-title">Manage About </h3>
    </div>
    <div class="card-body">

        {{ html()->form('POST', route('admin.setting.banner.store'))->attribute('enctype', 'multipart/form-data')->open() }}



        <div class="form-group">
            {{ html()->label('About Link')->for('banner_link') }}
            {{ html()->text('banner_link', get_setting('banner_link'))->placeholder('about_link')->class('form-control') }}
        </div> <!-- form-group-->
        <div class="form-group">
            {{ html()->label('About Header')->for('banner_text_header') }}
            {{ html()->text('banner_text_header', get_setting('banner_text_header'))->placeholder('banner_text_header')->class('form-control') }}
        </div> <!-- form-group-->
        <div class="form-group">
            {{ html()->label('About Bottom')->for('banner_text_bottom') }}
            <textarea id="" class="editor form-control" col="10" row="3" name="banner_text_bottom">{{ get_setting('banner_text_bottom') }}</textarea>

        </div> <!-- form-group-->


        <div class="form-group">
            {{ html()->label('About Background  Image')->for('banner_image_back') }}
            {{ html()->file('banner_image_back')->class('form-control-file image d-none')->id('banner_image_back')->acceptImage() }}
            <div class="d-block">
                <label for="banner_image_back">
                    <img src="{{ asset(get_setting('banner_image_back', $demoImg)) }}"
                        class="border img-fluid rounded holder" alt="Image upload">
                </label>
            </div>
        </div> <!-- form-group-->

        <div class="form-group ">
            {{ html()->button('Update')->class('btn btn-block  btn-primary') }}
        </div> <!-- form-group-->

        {{ html()->form()->close() }}

    </div> <!--  .card-body -->
</div> <!--  .card -->

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
