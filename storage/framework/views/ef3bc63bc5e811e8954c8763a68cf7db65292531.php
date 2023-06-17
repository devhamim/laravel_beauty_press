<div class="card">
    <div class="card-header with-border">
        <h3 class="card-title">Highlights Manage </h3>
    </div>


    <?php echo e(html()->form('POST', route('admin.setting.highlight.store'))->attribute('enctype', 'multipart/form-data')->open()); ?>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo e(html()->label('Background Color')->for('bg_color_1')); ?>

                        <?php echo e(html()->text('bg_color_1', get_setting('bg_color_1'))->placeholder('bg_color_1')->class('form-control')); ?>

                    </div> <!-- form-group-->
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo e(html()->label('Text Color')->for('text_color_1')); ?>

                        <?php echo e(html()->text('text_color_1', get_setting('text_color_1'))->placeholder('text_color_1')->class('form-control')); ?>

                    </div> <!-- form-group-->
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo e(html()->label('Header Title')->for('highlight_header_1')); ?>

                        <?php echo e(html()->text('highlight_header_1', get_setting('highlight_header_1'))->placeholder('highlight_header_1')->class('form-control')); ?>

                    </div> <!-- form-group-->
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo e(html()->label('Sort Description')->for('highlight_description_1')); ?>

                        <?php echo e(html()->textarea('highlight_description_1', get_setting('highlight_description_1'))->placeholder('highlight_description_1')->class('form-control')); ?>

                    </div> <!-- form-group-->
                </div>
                <div class="form-group">
                    <?php echo e(html()->label('Background Image')->for('highlight_image_1')); ?>

                    <?php echo e(html()->file('highlight_image_1')->class('form-control-file image d-none')->id('highlight_image_1')->acceptImage()); ?>

                    <div class="d-block">
                        <label for="highlight_image_1">
                            <img src="<?php echo e(asset(get_setting('highlight_image_1', $demoImg))); ?>"
                                class="border img-fluid rounded holder" alt="Image upload">
                        </label>
                    </div>
                </div>
                <!-- form-group-->
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo e(html()->label('Background Color')->for('bg_color_2')); ?>

                        <?php echo e(html()->text('bg_color_2', get_setting('bg_color_2'))->placeholder('bg_color_2')->class('form-control')); ?>

                    </div> <!-- form-group-->
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo e(html()->label('Text Color')->for('text_color_2')); ?>

                        <?php echo e(html()->text('text_color_2', get_setting('text_color_2'))->placeholder('text_color_2')->class('form-control')); ?>

                    </div> <!-- form-group-->
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo e(html()->label('Header Title')->for('highlight_header_2')); ?>

                        <?php echo e(html()->text('highlight_header_2', get_setting('highlight_header_2'))->placeholder('highlight_header_2')->class('form-control')); ?>

                    </div> <!-- form-group-->
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo e(html()->label('Sort Description')->for('highlight_description_2')); ?>

                        <?php echo e(html()->textarea('highlight_description_2', get_setting('highlight_description_2'))->placeholder('highlight_description_2')->class('form-control')); ?>

                    </div> <!-- form-group-->
                </div>
                <div class="form-group">
                    <?php echo e(html()->label('Background Image')->for('highlight_image_2')); ?>

                    <?php echo e(html()->file('highlight_image_2')->class('form-control-file image d-none')->id('highlight_image_2')->acceptImage()); ?>

                    <div class="d-block">
                        <label for="highlight_image_2">
                            <img src="<?php echo e(asset(get_setting('highlight_image_2', $demoImg))); ?>"
                                class="border img-fluid rounded holder" alt="Image upload">
                        </label>
                    </div>
                </div>
                <!-- form-group-->
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo e(html()->label('Background Color')->for('bg_color_3')); ?>

                        <?php echo e(html()->text('bg_color_3', get_setting('bg_color_3'))->placeholder('bg_color_3')->class('form-control')); ?>

                    </div> <!-- form-group-->
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo e(html()->label('Text Color')->for('text_color_3')); ?>

                        <?php echo e(html()->text('text_color_3', get_setting('text_color_3'))->placeholder('text_color_3')->class('form-control')); ?>

                    </div> <!-- form-group-->
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo e(html()->label('Header Title')->for('highlight_header_3')); ?>

                        <?php echo e(html()->text('highlight_header_3', get_setting('highlight_header_3'))->placeholder('highlight_header_3')->class('form-control')); ?>

                    </div> <!-- form-group-->
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo e(html()->label('Sort Description')->for('highlight_description_3')); ?>

                        <?php echo e(html()->textarea('highlight_description_3', get_setting('highlight_description_3'))->placeholder('highlight_description_3')->class('form-control')); ?>

                    </div> <!-- form-group-->
                </div>
                <div class="form-group">
                    <?php echo e(html()->label('Background Image')->for('highlight_image_3')); ?>

                    <?php echo e(html()->file('highlight_image_3')->class('form-control-file image d-none')->id('highlight_image_3')->acceptImage()); ?>

                    <div class="d-block">
                        <label for="highlight_image_3">
                            <img src="<?php echo e(asset(get_setting('highlight_image_3', $demoImg))); ?>"
                                class="border img-fluid rounded holder" alt="Image upload">
                        </label>
                    </div>
                </div>
                <!-- form-group-->
            </div>
        </div>
    </div>

    <div class="form-group ">
        <?php echo e(html()->button('Update')->class('btn btn-block  btn-primary')); ?>

    </div> <!-- form-group-->

    <?php echo e(html()->form()->close()); ?>


    <!--  .card-body -->
</div> <!--  .card -->
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Anandadhara/resources/views/backend/content/settings/general/includes/highlight.blade.php ENDPATH**/ ?>