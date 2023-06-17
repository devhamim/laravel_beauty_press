<div class="card">
    <div class="card-header with-border">
        <h3 class="card-title">Manage Activities </h3>
    </div>
    <div class="card-body">

        {{ html()->form('POST', route('admin.setting.work.store'))->attribute('enctype', 'multipart/form-data')->open() }}

        <div class="form-group">
            {{ html()->label('Header Color')->for('work_color_1') }}
            {{ html()->text('work_color_1', get_setting('work_color_1'))->placeholder('work_color_1')->class('form-control') }}
        </div> <!-- form-group-->
        <div class="form-group">
            {{ html()->label('Title Color')->for('work_color_2') }}
            {{ html()->text('work_color_2', get_setting('work_color_2'))->placeholder('work_color_2')->class('form-control') }}
        </div> <!-- form-group-->
        <div class="form-group">
            {{ html()->label('Text Color')->for('work_color_3') }}
            {{ html()->text('work_color_3', get_setting('work_color_3'))->placeholder('work_color_3')->class('form-control') }}
        </div> <!-- form-group-->

        <div class="form-group">
            {{ html()->label('Activities Header')->for('work_text_header') }}
            {{ html()->text('work_text_header', get_setting('work_text_header'))->placeholder('work_text_header')->class('form-control') }}
        </div> <!-- form-group-->


        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    {{ html()->label('Activities Image')->for('work_image_1') }}
                    {{ html()->file('work_image_1')->class('form-control-file image d-none')->id('work_image_1')->acceptImage() }}
                    <div class="d-block">
                        <label for="work_image_1">
                            <img src="{{ asset(get_setting('work_image_1', $demoImg)) }}"
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
