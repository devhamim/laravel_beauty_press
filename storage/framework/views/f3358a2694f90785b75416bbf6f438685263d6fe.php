<div class="card mb-3">
  <?php echo e(html()->form('POST', route('admin.setting.logoStore'))->attribute('enctype', 'multipart/form-data')->open()); ?>

  <div class="card-header with-border">
    <h3 class="card-title">Logo Settings <small class="ml-2">(update information anytime)</small></h3>
  </div>
  <div class="card-body">

    <div class="form-group">
      <?php echo e(html()->label('Frontend logo Menu (300x86)')->for('frontend_logo_menu')); ?>

      <?php echo e(html()->file('frontend_logo_menu')->class('form-control-file image d-none')->id('frontend_logo_menu')->acceptImage()); ?>

      <div class="d-block">
        <label for="frontend_logo_menu">
          <img src="<?php echo e(asset(get_setting('frontend_logo_menu',$demoImg))); ?>" class="border img-fluid rounded holder" alt="Image upload">
        </label>
      </div>
    </div> <!-- form-group-->

    <div class="form-group">
      <?php echo e(html()->label('Frontend logo Footer (300x40)')->for('frontend_logo_footer')); ?>

      <?php echo e(html()->file('frontend_logo_footer')->class('form-control-file image d-none')->id('frontend_logo_footer')->acceptImage()); ?>

      <div class="d-block">
        <label for="frontend_logo_footer">
          <img src="<?php echo e(asset(get_setting('frontend_logo_footer', $demoImg))); ?>" class="border img-fluid rounded holder"
               alt="Image upload">
        </label>
      </div>
    </div> <!-- form-group-->


    <div class="form-group">
      <?php echo e(html()->label('Admin logo (60x60)')->for('admin_logo')); ?>

      <?php echo e(html()->file('admin_logo')->class('form-control-file image d-none')->id('admin_logo')->acceptImage()); ?>

      <div class="d-block">
        <label for="admin_logo">
          <img src="<?php echo e(asset(get_setting('admin_logo', $demoImg))); ?>" class="border img-fluid rounded holder" alt="Image upload">
        </label>
      </div> <!-- col-->
    </div> <!-- form-group-->

    <div class="form-group">
      <?php echo e(html()->label('Favicon (32x32)')->for('favicon')); ?>

      <?php echo e(html()->file('favicon')->class('form-control-file image d-none')->id('favicon')->acceptImage()); ?>

      <div class="d-block">
        <label for="favicon">
          <img src="<?php echo e(asset(get_setting('favicon',$demoImg))); ?>" class="border img-fluid rounded holder" alt="Image upload">
        </label>
      </div> <!-- col-->
    </div> <!-- form-group-->

    <div class="form-group">
      <?php echo e(html()->button('Update')->class('btn btn-block btn-primary')); ?>

    </div> <!-- form-group-->

  </div> <!--  .card-body -->
  <?php echo e(html()->form()->close()); ?>

</div> <!--  .card --><?php /**PATH D:\php7 laravel\Anandadhara\resources\views/backend/content/settings/general/includes/logoSetting.blade.php ENDPATH**/ ?>