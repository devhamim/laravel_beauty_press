<div class="card mb-3">
  {{ html()->form('POST', route('admin.setting.socialStore'))->open() }}
  <div class="card-header with-border">
    <h3 class="card-title">SMS Seetings <small class="ml-2">(update information anytime)</small></h3>
  </div>
  <div class="card-body">
    <div class="form-group">
      <div class="form-check form-check-inline">
        {{html()->radio('active_sms', get_setting('active_sms') == "mim_sms", 'mim_sms')->id('mim_sms')->class('form-check-input')}}
        {{ html()->label("MIM SMS")->class('form-check-label')->for('mim_sms') }}
      </div>
    </div> <!-- form-group-->
    <div class="form-group">
      {{html()->label('MIM Api Key')->for('mim_api_key')}}
      {{html()->text('mim_api_key', get_setting('mim_api_key'))->class('form-control')->placeholder('MIM Api Key')}}
    </div> <!-- form-group-->
    <div class="form-group">
      {{html()->label('MIM Sender Id')->for('smanager_client_secret')}}
      {{html()->text('mim_senderid', get_setting('mim_senderid'))->class('form-control')->placeholder('MIM Sender Id')}}
    </div> <!-- form-group-->
  </div> <!--  .card-body -->

  <div class="card-body">
    <div class="form-group">
      <div class="form-check form-check-inline">
        {{html()->radio('active_sms', get_setting('active_sms') == 'adn_sms', 'adn_sms')->id('adn_sms')->class('form-check-input')}}
        {{ html()->label("ADN SMS")->class('form-check-label')->for('adn_sms') }}
      </div>
    </div> <!-- form-group-->
    <div class="form-group">
      {{html()->label('ADN Api Key')->for('adn_api_key')}}
      {{html()->text('adn_api_key', get_setting('adn_api_key'))->class('form-control')->placeholder('ADN Api Key')}}
    </div> <!-- form-group-->
    <div class="form-group">
      {{html()->label('ADN Api Secret')->for('adn_api_secret')}}
      {{html()->text('adn_api_secret', get_setting('adn_api_secret'))->class('form-control')->placeholder('ADN Api Secret')}}
    </div> <!-- form-group-->
  </div> <!--  .card-body -->

  <div class="card-footer">
    <div class="form-group">
      {{html()->button('Update')->class('btn btn-block  btn-primary')}}
    </div> <!-- form-group-->
  </div> <!--  .card-footer -->
  {{ html()->form()->close() }}
</div> <!--  .card -->