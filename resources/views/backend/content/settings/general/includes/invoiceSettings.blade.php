<div class="card mb-3">
  {{ html()->form('POST', route('admin.setting.socialStore'))->attribute('enctype', 'multipart/form-data')->open() }}
  <div class="card-header with-border">
    <h3 class="card-title">Invoices Settings <small class="ml-2">(update information anytime)</small></h3>
  </div>
  <div class="card-body">

    <div class="form-group">
      {{html()->label('Invoice Logo (Height 60px)')->for('invoice_logo')}}
      @php($fLogo = get_setting('invoice_logo', $demoImg) )
      {{html()->file('invoice_logo')->class('form-control-file image d-none')->id('invoice_logo')->acceptImage()}}
      <div>
        <label for="invoice_logo" style="cursor:pointer">
          <img src="{{asset($fLogo)}}" style="max-height: 400px;" class="border img-fluid rounded holder"
            alt="Image upload">
        </label>
      </div>
    </div> <!-- form-group-->

    <div class="form-group">
      {{html()->label('Invoice Name')->for('invoice_site_name')}}
      {{html()->text('invoice_site_name', get_setting('invoice_site_name'))->class('form-control')->placeholder('Invoice
      Name')}}
    </div> <!-- form-group-->

    <div class="form-group">
      {{html()->label('Invoice Address')->for('invoice_site_address')}}
      {{html()->textarea('invoice_site_address',
      get_setting('invoice_site_address'))->class('form-control')->rows(3)->placeholder('Invoice Address')}}
    </div> <!-- form-group-->


    <div class="form-group">
      {{html()->button('Update')->class('btn btn-block btn-primary')}}
    </div> <!-- form-group-->

  </div> <!--  .card-body -->
  {{ html()->form()->close() }}
</div> <!--  .card -->