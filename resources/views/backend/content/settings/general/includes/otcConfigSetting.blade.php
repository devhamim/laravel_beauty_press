<div class="card mb-3">
  {{ html()->form('POST', route('admin.setting.socialStore'))->open() }}
  <div class="card-header with-border">
    <h3 class="card-title">OTC API Configaration Setting <small class="ml-2">(update information anytime)</small></h3>
  </div>
  <div class="card-body border ">
    <div class="form-group">
      <div class="form-check form-check-inline">
        {{html()->radio('otc_api_provider', get_setting('otc_api_provider') == "otcommerce", 'otcommerce')->id('otcommerce')->class('form-check-input')}}
        {{ html()->label("OT COMMERCE API")->class('form-check-label')->for('otcommerce') }}
      </div>
    </div> <!-- form-group-->
    <div class="form-group">
      {{html()->label('OT COMMERCE API URL')->for('otcommerce_api_url')}}
      {{html()->text('otcommerce_api_url', get_setting('otcommerce_api_url'))->class('form-control')->placeholder('OT COMMERCE API URL')}}
    </div> <!-- form-group-->
    <div class="form-group">
      {{html()->label('OT COMMERCE API Token')->for('otcommerce_instance_key')}}
      {{html()->text('otcommerce_instance_key', get_setting('otcommerce_instance_key'))->class('form-control')->placeholder('OT COMMERCE API Instance Keyss')}}
    </div> <!-- form-group-->
  </div> <!--  .card-body -->
  <div class="card-body border">
    <div class="form-group">
      <div class="form-check form-check-inline">
        {{html()->radio('otc_api_provider', get_setting('otc_api_provider') == "avanteca", 'avanteca')->id('avanteca')->class('form-check-input')}}
        {{ html()->label("Avanteca OTC API")->class('form-check-label')->for('avanteca') }}
      </div>
    </div> <!-- form-group-->
    <div class="form-group">
      {{html()->label('Avanteca API URL')->for('avanteca_api_url')}}
      {{html()->text('avanteca_api_url', get_setting('avanteca_api_url'))->class('form-control')->placeholder('Avanteca API URL')}}
    </div> <!-- form-group-->
    <div class="form-group">
      {{html()->label('Avanteca API Token')->for('avanteca_api_token')}}
      {{html()->text('avanteca_api_token', get_setting('avanteca_api_token'))->class('form-control')->placeholder('Avanteca API Token')}}
    </div> <!-- form-group-->
  </div> <!--  .card-body -->

  <div class="card-footer">
    <div class="form-group">
      {{html()->button('Update')->class('btn btn-block  btn-primary')}}
    </div> <!-- form-group-->
  </div> <!--  .card-footer -->
  {{ html()->form()->close() }}
</div> <!--  .card -->