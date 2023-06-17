<div class="card">
    <div class="card-header with-border">
        <h3 class="card-title">Manage About </h3>
    </div>
    <div class="card-body">

        {{ html()->form('POST', route('admin.setting.about.store'))->attribute('enctype', 'multipart/form-data')->open() }}

        <div class="form-group">
            {{ html()->label('Header Color')->for('about_color_1') }}
            {{ html()->text('about_color_1', get_setting('about_color_1'))->placeholder('about_color_1')->class('form-control') }}
        </div> <!-- form-group-->
        <div class="form-group">
            {{ html()->label('Title Color')->for('about_color_2') }}
            {{ html()->text('about_color_2', get_setting('about_color_2'))->placeholder('about_color_2')->class('form-control') }}
        </div> <!-- form-group-->
        <div class="form-group">
            {{ html()->label('Text Color ')->for('about_color_3') }}
            {{ html()->text('about_color_3', get_setting('about_color_3'))->placeholder('about_color_3')->class('form-control') }}
        </div> <!-- form-group-->
        <div class="form-group">
            {{ html()->label('Brand Header')->for('about_text_header') }}
            {{ html()->text('about_text_header', get_setting('about_text_header'))->placeholder('about_text_header')->class('form-control') }}
        </div> <!-- form-group-->
        <div class="form-group">
            {{ html()->label('Brand Banner Title')->for('about_text_bottom') }}
            {{ html()->text('about_text_bottom', get_setting('about_text_bottom'))->placeholder('about_text_bottom')->class('form-control') }}
        </div> <!-- form-group-->
        <div class="form-group">
            {{ html()->label('Brand Details')->for('about_text_details') }}
            {{ html()->text('about_text_details', get_setting('about_text_details'))->placeholder('about_text_details')->class('form-control') }}
        </div> <!-- form-group-->

        <div class="card">
            <div class="card-body">
                <div class="form-group">

                    {{ html()->label('Brand Banner Image ')->for('about_image_1') }}
                    {{ html()->file('about_image_1')->class('form-control-file image d-none')->id('about_image_1')->acceptImage() }}
                    <div class="d-block">
                        <label for="about_image_1">
                            <img src="{{ asset(get_setting('about_image_1', $demoImg)) }}"
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
