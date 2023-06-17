<div class="card">
  <div class="card-header with-border">
    <h3 class="card-title">Manage Short Messages </h3>
  </div>
  <div class="card-body">

    {{ html()->form('POST', route('admin.setting.short.message.store'))->open() }}

    <div class="form-group">
      {{html()->label('Approx. Weight')->for('approx_weight_message')}}
      {{html()->text('approx_weight_message', get_setting('approx_weight_message'))
      ->placeholder('Approx. Weight i Button Message')
      ->class('form-control')}}
    </div> <!-- form-group-->

    <div class="form-group">
      @php
      $charge = '<span class="text-danger">[china_delivery_charge]</span> for Place charge';
      @endphp
      {{html()->label('China Local Delivery: '.$charge)->for('china_local_delivery_message')}}
      {{html()->text('china_local_delivery_message', get_setting('china_local_delivery_message'))
      ->placeholder('China Local Delivery i Button Message')
      ->class('form-control')}}
    </div> <!-- form-group-->

    <div class="form-group">
      {{html()->label('China To BD Bottom Message')->for('china_to_bd_bottom_message')}}
      {{html()->text('china_to_bd_bottom_message', get_setting('china_to_bd_bottom_message'))
      ->placeholder('China To BD Bottom Message')
      ->class('form-control')}}
    </div> <!-- form-group-->

     <div class="form-group">
      {{html()->label('China To BD Bottom 2nd Message')->for('china_to_bd_bottom_message_2nd')}}
      {{html()->text('china_to_bd_bottom_message_2nd', get_setting('china_to_bd_bottom_message_2nd'))
      ->placeholder('China To BD Bottom 2nd Message')
      ->class('form-control')}}
    </div> <!-- form-group-->

    <div class="form-group">
      {{html()->label('Order Summary Bottom Message')->for('order_summary_bottom_message')}}
      {{html()->text('order_summary_bottom_message', get_setting('order_summary_bottom_message'))
      ->placeholder('Order Summary Bottom Message')
      ->class('form-control')}}
    </div> <!-- form-group-->

    <div class="form-group">
      {{html()->label('Payment Summary Bottom Message')->for('payment_summary_bottom_message')}}
      {{html()->text('payment_summary_bottom_message', get_setting('payment_summary_bottom_message'))
      ->placeholder('Payment Summary Bottom Message')
      ->class('form-control')}}
    </div> <!-- form-group-->

    <div class="form-group ">
      {{html()->button('Update')->class('btn btn-block  btn-primary')}}
    </div> <!-- form-group-->

    {{ html()->form()->close() }}

  </div> <!--  .card-body -->
</div> <!--  .card -->