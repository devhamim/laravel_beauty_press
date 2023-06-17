<div class="card">
  <div class="card-header with-border">
    <h3 class="card-title">Manage Api </h3>
  </div>
  <div class="card-body">

    {{ html()->form('POST', route('admin.setting.api.store'))->attribute('enctype', 'multipart/form-data')->open() }}

    <div class="form-group">
      {{html()->label('Base Api Url')->for('api_url')}}
      {{html()->text('api_url', get_setting('api_url'))
      ->placeholder('api_url')
      ->class('form-control')}}
    </div> <!-- form-group-->
    <div class="form-group">
      {{html()->label('Api Email')->for('api_email')}}
      {{html()->text('api_email', get_setting('api_email'))
      ->placeholder('api_email')
      ->class('form-control')}}
    </div> <!-- form-group-->
    <div class="form-group">
      {{html()->label('Api Password ')->for('api_password')}}
      {{html()->password('api_password', get_setting('api_password'))
      ->placeholder('api_password')
      ->class('form-control')}}
    </div> <!-- form-group-->
   

  
    <div class="form-group ">
      {{html()->button('Update')->class('btn btn-block  btn-primary')}}
    </div> <!-- form-group-->

    {{ html()->form()->close() }}

  </div> <!--  .card-body -->
</div> <!--  .card -->