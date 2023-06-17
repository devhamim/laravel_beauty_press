@extends('backend.layouts.app')

@section('title', ' Order Limitation Settings ')



@section('content')


<div class="row justify-content-center">
  <div class="col-md-4">
    {{ html()->form('POST', route('admin.setting.limitationStore'))->class('form-horizontal')->open() }}
    <div class="card">
      <div class="card-header with-border">
        <h3 class="card-title">Order Limitation <small class="ml-2">(update information anytime)</small></h3>
      </div>
      <div class="card-body">
        <div class="form-group">
          {{html()->label('Minimum Order Quantity')->for('min_order_quantity')}}
          {{html()->number('min_order_quantity', get_setting('min_order_quantity'))
          ->class('form-control')
          ->attribute('min', 1)
          ->autofocus(true)
          ->placeholder('Minimum Order Quantity')}}
        </div> <!-- form-group-->

        <div class="form-group">
          {{html()->label('Minimum Order Amount (BDT.)')->for('min_order_amount')}}
          {{html()->number('min_order_amount', get_setting('min_order_amount'))
          ->class('form-control')
          ->attribute('min', 100)
          ->placeholder('Minimum Order Amount')}}
        </div> <!-- form-group-->

        <div class="form-group">
          {{html()->label('China Local Delivery Charge (BDT.)')->for('china_local_delivery_charge')}}
          {{html()->number('china_local_delivery_charge', get_setting('china_local_delivery_charge'))
          ->class('form-control')
          ->attribute('min', 0)
          ->placeholder('Charge')}}
        </div> <!-- form-group-->

        <div class="form-group">
          {{html()->label('China Local Delivery Charge Limit (BDT.)')->for('china_local_delivery_charge_limit')}}
          {{html()->number('china_local_delivery_charge_limit', get_setting('china_local_delivery_charge_limit'))
          ->class('form-control')
          ->attribute('min', 0)
          ->placeholder('Charge Limit')}}
        </div> <!-- form-group-->


        <div class="form-group row mb-4">
          {{html()->label('Advanced Payment (1%-100%)')->for('advanced_payment')}}
          {{html()->number('advanced_payment', get_setting('advanced_payment', 50))
          ->class('form-control')
          ->attribute('min', 0)
          ->attribute('max', 100)
          ->placeholder('Advanced Payment')}}
        </div> <!-- form-group-->


        <div class="form-group ">
          {{html()->button('Update')->class('btn btn-block btn-success')}}
        </div> <!-- form-group-->
      </div> <!--  .card-body -->
    </div> <!--  .card -->
    {{ html()->form()->close() }}
  </div> <!-- .col-md-6 -->

  <div class="col-md-6">
    {{ html()->form('POST', route('admin.setting.airShippingStore'))->class('form-horizontal')->open() }}
    <div class="card">
      <div class="card-header with-border">
        <h3 class="card-title">Shipping Limitation <small class="ml-2">(Air Shipping Rate)</small></h3>
      </div>
      <div class="card-body">

        <table class="table-bordered table-sm table-striped text-center">
          <tr>
            <th style="width: 25%">Minimum</th>
            <th style="width: 25%">Maximum</th>
            <th style="width: 25%">Rate</th>
            <th style="width: 25%">Option</th>
          </tr>
          <tbody id="shippLimitBody">
            @php
            $shipping_charges = json_decode(get_setting('air_shipping_charges')) ?? collect([]);
            @endphp
            @forelse($shipping_charges as $key => $charges)
            <tr>
              <td>
                {{html()->number('shipping['.$key.'][minimum]', $charges->minimum)->class('form-control
                form-control-sm')->attribute('min',0)->placeholder('Minimum')}}
              </td>
              <td>
                {{html()->number('shipping['.$key.'][maximum]',$charges->maximum)->class('form-control
                form-control-sm')->attribute('min',0)->placeholder('Maximum')}}
              </td>
              <td>
                {{html()->number('shipping['.$key.'][rate]', $charges->rate)->class('form-control
                form-control-sm')->attribute('min',0)->placeholder('Rate')}}
              </td>
              <td>
                <button type="button" class="btn btn-sm btn-danger removeField">Remove</button>
              </td>
            </tr>
            @empty
            <tr>
              <td>
                {{html()->number('shipping[0][minimum]')->class('form-control
                form-control-sm')->attribute('min',0)->placeholder('Minimum')}}
              </td>
              <td>
                {{html()->number('shipping[0][maximum]')->class('form-control
                form-control-sm')->attribute('min',0)->placeholder('Maximum')}}
              </td>
              <td>
                {{html()->number('shipping[0][rate]')->class('form-control
                form-control-sm')->attribute('min',0)->placeholder('Rate')}}
              </td>
              <td>
                <button type="button" class="btn btn-sm btn-danger removeField">Remove</button>
              </td>
            </tr>
            @endforelse
          </tbody>
          <tfoot>
            <td colspan="3"></td>
            <td>
              <button type="button" class="btn btn-sm btn-primary addField">Add New</button>
            </td>
          </tfoot>
        </table>
      </div> <!--  .card-body -->
      <div class="card-footer">
        <div class="form-group">
          {{html()->button('Update')->class('btn btn-success')}}
        </div> <!-- form-group-->
      </div> <!--  .card-footer -->
    </div> <!--  .card -->
    {{ html()->form()->close() }}
  </div> <!-- .col-md-6 -->
</div> <!-- .row -->

@endsection




@push('after-scripts')
<script>
  $(document).on('click', '.removeField', function () {
        var tbody = $('#shippLimitBody').find('tr');
        // console.log(tbody.length);
        if (tbody.length > 1) {
           $(this).closest('tr').remove();
        } else {
           $(this).addClass('disabled');
        }
     });


     $(document).on('click', '.addField', function () {
        var shippLimitBody = $(document).find('#shippLimitBody');
        var rowLength = shippLimitBody.find('tr').length;

        var tableRow = `<tr><td><input class="form-control form-control-sm" type="number" name="shipping[${rowLength}][minimum]" id="minimum" placeholder="Minimum"></td><td>
                <input class="form-control form-control-sm" type="number" name="shipping[${rowLength}][maximum]" id="maximum" placeholder="Maximum"></td><td><input class="form-control form-control-sm" type="number" name="shipping[${rowLength}][rate]" id="rate" placeholder="Rate"></td><td><button type="button" class="btn btn-sm btn-danger removeField">Remove</button>
              </td></tr>`;

        if (rowLength < 10) {
           shippLimitBody.append(tableRow);
        }

     });

</script>
@endpush