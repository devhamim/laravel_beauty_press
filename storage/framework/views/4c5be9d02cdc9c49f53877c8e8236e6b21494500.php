<div class="card mb-3">
    <?php echo e(html()->form('POST', route('admin.setting.socialStore'))->attribute('enctype', 'multipart/form-data')->open()); ?>

    <div class="card-header with-border">
        <h3 class="card-title">General Settings <small class="ml-2">(update information anytime)</small></h3>
    </div>
    <div class="card-body">

        <div class="form-group">
            <?php echo e(html()->label('Site Name')->for('site_name')); ?>

            <?php echo e(html()->text('site_name', get_setting('site_name'))->class('form-control')->placeholder('Site Name')); ?>

        </div> <!-- form-group-->

        <div class="form-group">
            <?php echo e(html()->label('Site Main Url')->for('site_url')); ?>

            <?php echo e(html()->text('site_url', get_setting('site_url'))->class('form-control')->placeholder('Main Url')); ?>

        </div> <!-- form-group-->

        <div class="form-group">
            <?php echo e(html()->label('Meta Title')->for('meta_title')); ?>

            <?php echo e(html()->text('meta_title', get_setting('meta_title'))->class('form-control')->placeholder('Meta Title')); ?>

        </div> <!-- form-group-->

        <div class="form-group">
            <?php echo e(html()->label('Meta Description')->for('meta_description')); ?>

            <?php echo e(html()->text('meta_description', get_setting('meta_description'))->class('form-control')->placeholder('Meta description')); ?>

        </div> <!-- form-group-->

        <div class="form-group">
            <?php echo e(html()->label('Meta Image (1200x630)')->for('frontend_logo_lg')); ?>

            <?php ($fLogo = get_setting('meta_image', $demoImg)); ?>
            <?php echo e(html()->file('meta_image')->class('form-control-file image d-none')->id('meta_image')->acceptImage()); ?>

            <div>
                <label for="meta_image" style="cursor:pointer">
                    <img src="<?php echo e(asset($fLogo)); ?>" style="max-height: 400px;" class="border img-fluid rounded holder"
                        alt="Image upload">
                </label>
            </div>
        </div> <!-- form-group-->

        <div class="form-group">
            <?php echo e(html()->label('Office Phone')->for('office_phone')); ?>

            <?php echo e(html()->text('office_phone', get_setting('office_phone'))->class('form-control')->placeholder('Office Phone')); ?>

        </div> <!-- form-group-->

        <div class="form-group">
            <?php echo e(html()->label('Office Email')->for('office_email')); ?>

            <?php echo e(html()->email('office_email', get_setting('office_email'))->class('form-control')->placeholder('Office Email')); ?>

        </div> <!-- form-group-->

        <div class="form-group">
            <?php echo e(html()->label('Received Admin Email')->for('received_email')); ?>

            <?php echo e(html()->email('received_email', get_setting('received_email'))->class('form-control')); ?>

        </div> <!-- form-group-->

        <div class="form-group">
            <?php echo e(html()->label('Office Address')->for('office_address')); ?>

            <?php echo e(html()->textarea('office_address', get_setting('office_address'))->rows(3)->class('form-control')->placeholder('Office Address')); ?>

        </div> <!-- form-group-->


        <div class="form-group">
            <?php echo e(html()->label('Footer Description')->for('footer_description')); ?>

            <?php echo e(html()->textarea('footer_description', get_setting('footer_description'))->rows(2)->class('form-control')->placeholder('Footer Description')); ?>

        </div> <!-- form-group-->

        <div class="form-group">
            <?php echo e(html()->label('Copyright Text')->for('copyright_text')); ?>

            <?php echo e(html()->text('copyright_text', get_setting('copyright_text'))->class('form-control')->placeholder('All rights are reserved')); ?>

        </div> <!-- form-group-->

        <div class="form-group">
            <?php echo e(html()->label('Google Map  URL')->for('office_map_iframe_url')); ?>

            <?php echo e(html()->textarea('office_map_iframe_url', get_setting('office_map_iframe_url'))->class('form-control')->placeholder('Google Map Iframe URL')); ?>

        </div> <!-- form-group-->

        <div class="form-group">
            <?php echo e(html()->label('Facebook  Iframe URL')->for('facebook_iframe_url')); ?>

            <?php echo e(html()->textarea('g_map_iframe_url', get_setting('g_map_iframe_url'))->class('form-control')->placeholder('Facebook Iframe URL')); ?>

        </div> <!-- form-group-->

        <div class="form-group">
            <?php echo e(html()->button('Update')->class('btn btn-block btn-primary')); ?>

        </div> <!-- form-group-->

    </div> <!--  .card-body -->
    <?php echo e(html()->form()->close()); ?>

</div> <!--  .card -->
<?php /**PATH D:\php7 laravel\Anandadhara\resources\views/backend/content/settings/general/includes/siteSetting.blade.php ENDPATH**/ ?>