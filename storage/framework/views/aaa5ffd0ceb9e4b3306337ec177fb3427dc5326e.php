<div class="card mb-3">
  <?php echo e(html()->form('POST', route('admin.setting.socialStore'))->open()); ?>

  <div class="card-header with-border">
    <h3 class="card-title">SMS Seetings <small class="ml-2">(update information anytime)</small></h3>
  </div>
  <div class="card-body">
    <div class="form-group">
      <div class="form-check form-check-inline">
        <?php echo e(html()->radio('active_sms', get_setting('active_sms') == "mim_sms", 'mim_sms')->id('mim_sms')->class('form-check-input')); ?>

        <?php echo e(html()->label("MIM SMS")->class('form-check-label')->for('mim_sms')); ?>

      </div>
    </div> <!-- form-group-->
    <div class="form-group">
      <?php echo e(html()->label('MIM Api Key')->for('mim_api_key')); ?>

      <?php echo e(html()->text('mim_api_key', get_setting('mim_api_key'))->class('form-control')->placeholder('MIM Api Key')); ?>

    </div> <!-- form-group-->
    <div class="form-group">
      <?php echo e(html()->label('MIM Sender Id')->for('smanager_client_secret')); ?>

      <?php echo e(html()->text('mim_senderid', get_setting('mim_senderid'))->class('form-control')->placeholder('MIM Sender Id')); ?>

    </div> <!-- form-group-->
  </div> <!--  .card-body -->

  <div class="card-body">
    <div class="form-group">
      <div class="form-check form-check-inline">
        <?php echo e(html()->radio('active_sms', get_setting('active_sms') == 'adn_sms', 'adn_sms')->id('adn_sms')->class('form-check-input')); ?>

        <?php echo e(html()->label("ADN SMS")->class('form-check-label')->for('adn_sms')); ?>

      </div>
    </div> <!-- form-group-->
    <div class="form-group">
      <?php echo e(html()->label('ADN Api Key')->for('adn_api_key')); ?>

      <?php echo e(html()->text('adn_api_key', get_setting('adn_api_key'))->class('form-control')->placeholder('ADN Api Key')); ?>

    </div> <!-- form-group-->
    <div class="form-group">
      <?php echo e(html()->label('ADN Api Secret')->for('adn_api_secret')); ?>

      <?php echo e(html()->text('adn_api_secret', get_setting('adn_api_secret'))->class('form-control')->placeholder('ADN Api Secret')); ?>

    </div> <!-- form-group-->
  </div> <!--  .card-body -->

  <div class="card-footer">
    <div class="form-group">
      <?php echo e(html()->button('Update')->class('btn btn-block  btn-primary')); ?>

    </div> <!-- form-group-->
  </div> <!--  .card-footer -->
  <?php echo e(html()->form()->close()); ?>

</div> <!--  .card --><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Anandadhara/resources/views/backend/content/settings/general/includes/smsConfigSetting.blade.php ENDPATH**/ ?>