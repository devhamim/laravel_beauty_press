<div class="card">
  <div class="card-header with-border">
    <h3 class="card-title">Manage Notice </h3>
  </div>
  <div class="card-body">

    {{ html()->form('POST', route('admin.setting.noticecolor.store'))->attribute('enctype', 'multipart/form-data')->open() }}

    <div class="form-group">
      {{html()->label('Background Color')->for('notice_color_1')}}
      {{html()->text('notice_color_1', get_setting('notice_color_1'))
      ->placeholder('notice_color_1')
      ->class('form-control')}}
    </div> <!-- form-group-->
    <div class="form-group">
      {{html()->label('Text Color ')->for('notice_color_2')}}
      {{html()->text('notice_color_2', get_setting('notice_color_2'))
      ->placeholder('notice_color_2')
      ->class('form-control')}}
    </div> <!-- form-group-->
    <div class="form-group">
      {{html()->label('Icon Color')->for('notice_color_3')}}
      {{html()->text('notice_color_3', get_setting('notice_color_3'))
      ->placeholder('notice_color_3')
      ->class('form-control')}}
    </div> <!-- form-group-->


   

    <div class="form-group">
      {{html()->label('Notice Banner Image')->for('notice_image')}}
      {{html()->file('notice_image')->class('form-control-file image d-none')->id('notice_image')->acceptImage()}}
      <div class="d-block">
        <label for="notice_image">
          <img src="{{asset(get_setting('notice_image',$demoImg))}}" class="border img-fluid rounded holder" alt="Image upload">
        </label>
      </div>
    </div> <!-- form-group-->
  
    <div class="form-group ">
      {{html()->button('Update')->class('btn btn-block  btn-primary')}}
    </div> <!-- form-group-->

    {{ html()->form()->close() }}

  </div> <!--  .card-body -->
</div> <!--  .card -->