<div class="card mb-3">
  {{ html()->form('POST', route('admin.setting.socialStore'))->open() }}
  <div class="card-header with-border">
    <h3 class="card-title">Social Link Settings <small class="ml-2">(update information anytime)</small></h3>
  </div>
  <div class="card-body">
    <div class="form-group row mb-4">
      {{html()->label('Facebook')->class('col-md-4 col-form-label text-right')->for('facebook')}}
      <div class="col-md-8">
        {{html()->text('facebook', get_setting('facebook'))->class('form-control')->placeholder('facebook')}}
      </div> <!-- col-->
    </div> <!-- form-group-->
    <div class="form-group row mb-4">
      {{html()->label('Twitter')->class('col-md-4 col-form-label text-right')->for('twitter')}}
      <div class="col-md-8">
        {{html()->text('twitter', get_setting('twitter'))->class('form-control')->placeholder('twitter')}}
      </div> <!-- col-->
    </div> <!-- form-group-->
    <div class="form-group row mb-4">
      {{html()->label('LinkedIn')->class('col-md-4 col-form-label text-right')->for('linkedin')}}
      <div class="col-md-8">
        {{html()->text('linkedin', get_setting('linkedin'))->class('form-control')->placeholder('linkedin')}}
      </div> <!-- col-->
    </div> <!-- form-group-->
    <div class="form-group row mb-4">
      {{html()->label('YouTube')->class('col-md-4 col-form-label text-right')->for('youtube')}}
      <div class="col-md-8">
        {{html()->text('youtube', get_setting('youtube'))->class('form-control')->placeholder('youtube')}}
      </div> <!-- col-->
    </div> <!-- form-group-->
    <div class="form-group row mb-4">
      {{html()->label('Instagram')->class('col-md-4 col-form-label text-right')->for('instagram')}}
      <div class="col-md-8">
        {{html()->text('instagram', get_setting('instagram'))->class('form-control')->placeholder('instagram')}}
      </div> <!-- col-->
    </div> <!-- form-group-->

    <div class="form-group">
      {{html()->button('Update')->class('btn btn-block  btn-primary')}}
    </div> <!-- form-group-->

  </div> <!--  .card-body -->
  {{ html()->form()->close() }}
</div> <!--  .card -->