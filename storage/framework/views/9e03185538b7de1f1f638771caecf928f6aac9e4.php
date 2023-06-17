<div class="card">
    <div class="card-header with-border">
        <h3 class="card-title">Home Background Color Manage </h3>
    </div>


    <?php echo e(html()->form('POST', route('admin.setting.homebg.store'))->attribute('enctype', 'multipart/form-data')->open()); ?>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo e(html()->label('About Section Background Color')->for('about_bg_color')); ?>

                        <?php echo e(html()->text('about_bg_color', get_setting('about_bg_color'))->placeholder('about_bg_color')->class('form-control')); ?>

                    </div> <!-- form-group-->
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo e(html()->label('Event Section Background Color')->for('event_bg_color')); ?>

                        <?php echo e(html()->text('event_bg_color', get_setting('event_bg_color'))->placeholder('event_bg_color')->class('form-control')); ?>

                    </div> <!-- form-group-->
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo e(html()->label('Brand Section Background Color')->for('brand_bg_color')); ?>

                        <?php echo e(html()->text('brand_bg_color', get_setting('brand_bg_color'))->placeholder('brand_bg_color')->class('form-control')); ?>

                    </div> <!-- form-group-->
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo e(html()->label('Volunteer Section Background Image')->for('volunteer_bg_image')); ?>

                        <?php echo e(html()->file('volunteer_bg_image')->class('form-control-file image d-none')->id('volunteer_bg_image')->acceptImage()); ?>

                        <div class="d-block">
                            <label for="volunteer_bg_image">
                                <img src="<?php echo e(asset(get_setting('volunteer_bg_image', $demoImg))); ?>"
                                    class="border img-fluid rounded holder" alt="Image upload">
                            </label>
                        </div>
                    </div> <!-- form-group-->
                </div>


            </div>
        </div>
    </div>

    <div class="form-group ">
        <?php echo e(html()->button('Update')->class('btn btn-block  btn-primary')); ?>

    </div> <!-- form-group-->

    <?php echo e(html()->form()->close()); ?>


    <!--  .card-body -->
</div> <!--  .card -->
<?php /**PATH /home/anandadhara/public_html/resources/views/backend/content/settings/general/includes/homebackbg.blade.php ENDPATH**/ ?>