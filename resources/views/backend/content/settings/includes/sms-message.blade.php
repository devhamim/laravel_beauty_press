{{ html()->form('POST', route('admin.setting.message.store'))->class('form-horizontal')->open() }}

{{html()->hidden('sms')->value('sms')}}

<div class="card">
  <div class="card-header with-border">
    <h3 class="card-title">SMS Notification Messages <small class="ml-2">(update information anytime)</small></h3>
  </div>
  <div class="card-body">
    <fieldset>
      <legend>SMS OTP Message</legend>
      <div class="form-group">
        <div class="form-check">
          @php
          $active = get_setting('sms_active_otp_message');
          $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
          @endphp
          {{html()->checkbox('sms_active_otp_message', $active, $date)
                  ->class('form-check-input')}}
          {{ html()->label('Active Message')->class('form-check-label')->for('sms_active_otp_message') }}
        </div>
      </div> <!-- form-group-->
      <div class="form-group">
        {{html()->textarea('sms_otp_message', get_setting('sms_otp_message'))
                    ->class('form-control')
                    ->rows(2)
                    ->placeholder('Message')
                    ->attributes(['max', 600, 'aria-describedby' => 'sms_otp_message_help'])
                    ->autofocus(true)}}
        <small id="sms_waiting_for_payment_help" class="form-text text-muted">Place of OTP use <span
            class="text-danger">[otp]</span> and Place of URL use <span class="text-danger">[appUrl]</span></small>
      </div> <!-- form-group-->
    </fieldset>
    <fieldset>
      <legend>Waiting for Payment</legend>
      <div class="form-group">
        <div class="form-check">
          @php
          $active = get_setting('sms_active_waiting_for_payment');
          $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
          @endphp
          {{html()->checkbox('sms_active_waiting_for_payment', $active, $date)
                  ->class('form-check-input')}}
          {{ html()->label('Active Message')->class('form-check-label')->for('sms_active_waiting_for_payment') }}
        </div>
      </div> <!-- form-group-->
      <div class="form-group">
        {{html()->textarea('sms_waiting_for_payment', get_setting('sms_waiting_for_payment'))
                    ->class('form-control')
                    ->rows(2)
                    ->placeholder('Message')
                    ->attributes(['max', 600, 'aria-describedby' => 'sms_waiting_for_payment_help'])
                    ->autofocus(true)}}
        <small id="sms_waiting_for_payment_help" class="form-text text-muted">
          Place for dynamic use
          <span class="text-danger">[appUrl] </span>,
          <span class="text-danger">[orderNumber] </span>,
          <span class="text-danger">[transactionNumber] </span>,
          <span class="text-danger">[tracking] </span>,
          <span class="text-danger">[amount] </span>
        </small>
      </div> <!-- form-group-->
    </fieldset>
    <fieldset>
      <legend>Partial Paid</legend>
      <div class="form-group">
        <div class="form-check">
          @php
          $active = get_setting('sms_active_partial_paid');
          $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
          @endphp
          {{html()->checkbox('sms_active_partial_paid', $active, $date)->class('form-check-input')}}
          {{ html()->label('Active Message')->class('form-check-label')->for('sms_active_partial_paid') }}
        </div>
      </div> <!-- form-group-->
      <div class="form-group">
        {{html()->textarea('sms_partial_paid', get_setting('sms_partial_paid'))
                    ->class('form-control')
                    ->rows(2)
                    ->placeholder('Message')
                    ->attributes(['max', 600, 'aria-describedby' => 'sms_partial_paid_help'])
                    ->autofocus(true)}}
        <small id="sms_partial_paid_help" class="form-text text-muted">
          Place for dynamic use
          <span class="text-danger">[appUrl] </span>,
          <span class="text-danger">[orderNumber] </span>,
          <span class="text-danger">[transactionNumber] </span>,
          <span class="text-danger">[tracking] </span>,
          <span class="text-danger">[amount] </span>
        </small>
      </div> <!-- form-group-->
    </fieldset>
    <fieldset>
      <legend>Purchased</legend>
      <div class="form-group">
        <div class="form-check">
          @php
          $active = get_setting('sms_active_purchased_message');
          $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
          @endphp
          {{html()->checkbox('sms_active_purchased_message', $active, $date)->class('form-check-input')}}
          {{ html()->label('Active Message')->class('form-check-label')->for('sms_active_purchased_message') }}
        </div>
      </div> <!-- form-group-->
      <div class="form-group">
        {{html()->textarea('sms_purchased_message', get_setting('sms_purchased_message'))
                    ->class('form-control')
                    ->rows(2)
                    ->placeholder('Message')
                    ->attributes(['max', 600, 'aria-describedby' => 'sms_purchased_message_help'])
                    ->autofocus(true)}}
        <small id="sms_purchased_message_help" class="form-text text-muted">
          Place for dynamic use
          <span class="text-danger">[appUrl] </span>,
          <span class="text-danger">[orderNumber] </span>,
          <span class="text-danger">[transactionNumber] </span>,
          <span class="text-danger">[tracking] </span>,
          <span class="text-danger">[amount] </span>
        </small>
      </div> <!-- form-group-->
    </fieldset>
    <fieldset>
      <legend>Shipped From Suppliers</legend>
      <div class="form-group">
        <div class="form-check">
          @php
          $active = get_setting('sms_active_shipped_from_suppliers');
          $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
          @endphp
          {{html()->checkbox('sms_active_shipped_from_suppliers', $active, $date)->class('form-check-input')}}
          {{ html()->label('Active Message')->class('form-check-label')->for('sms_active_shipped_from_suppliers') }}
        </div>
      </div> <!-- form-group-->
      <div class="form-group">
        {{html()->textarea('sms_shipped_from_suppliers', get_setting('sms_shipped_from_suppliers'))
                    ->class('form-control')
                    ->rows(2)
                    ->placeholder('Message')
                    ->attributes(['max', 600, 'aria-describedby' => 'sms_shipped_from_suppliers_help'])
                    ->autofocus(true)}}
        <small id="sms_shipped_from_suppliers_help" class="form-text text-muted">
          Place for dynamic use
          <span class="text-danger">[appUrl] </span>,
          <span class="text-danger">[orderNumber] </span>,
          <span class="text-danger">[transactionNumber] </span>,
          <span class="text-danger">[tracking] </span>,
          <span class="text-danger">[amount] </span>
        </small>
      </div> <!-- form-group-->
    </fieldset>
    <fieldset>
      <legend>Received in China Warehouse</legend>
      <div class="form-group">
        <div class="form-check">
          @php
          $active = get_setting('sms_active_received_in_china_warehouse');
          $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
          @endphp
          {{html()->checkbox('sms_active_received_in_china_warehouse', $active, $date)->class('form-check-input')}}
          {{ html()->label('Active Message')->class('form-check-label')->for('sms_active_received_in_china_warehouse') }}
        </div>
      </div> <!-- form-group-->
      <div class="form-group">
        {{html()->textarea('sms_received_in_china_warehouse', get_setting('sms_received_in_china_warehouse'))
                    ->class('form-control')
                    ->rows(2)
                    ->placeholder('Message')
                    ->attributes(['max', 600, 'aria-describedby' => 'sms_received_in_china_warehouse_help'])
                    ->autofocus(true)}}
        <small id="sms_received_in_china_warehouse_help" class="form-text text-muted">
          Place for dynamic use
          <span class="text-danger">[appUrl] </span>,
          <span class="text-danger">[orderNumber] </span>,
          <span class="text-danger">[transactionNumber] </span>,
          <span class="text-danger">[tracking] </span>,
          <span class="text-danger">[amount] </span>
        </small>
      </div> <!-- form-group-->
    </fieldset>
    <fieldset>
      <legend>Shipped From China Warehouse</legend>
      <div class="form-group">
        <div class="form-check">
          @php
          $active = get_setting('sms_active_shipped_from_china_warehouse');
          $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
          @endphp
          {{html()->checkbox('sms_active_shipped_from_china_warehouse', $active, $date)->class('form-check-input')}}
          {{ html()->label('Active Message')->class('form-check-label')->for('sms_active_shipped_from_china_warehouse') }}
        </div>
      </div> <!-- form-group-->
      <div class="form-group">
        {{html()->textarea('sms_shipped_from_china_warehouse', get_setting('sms_shipped_from_china_warehouse'))
                    ->class('form-control')
                    ->rows(2)
                    ->placeholder('Message')
                    ->attributes(['max', 600, 'aria-describedby' => 'sms_shipped_from_china_warehouse_help'])
                    ->autofocus(true)}}
        <small id="sms_shipped_from_china_warehouse_help" class="form-text text-muted">
          Place for dynamic use
          <span class="text-danger">[appUrl] </span>,
          <span class="text-danger">[orderNumber] </span>,
          <span class="text-danger">[transactionNumber] </span>,
          <span class="text-danger">[tracking] </span>,
          <span class="text-danger">[amount] </span>
        </small>
      </div> <!-- form-group-->
    </fieldset>

    <fieldset>
      <legend>Received in BD Warehouse</legend>
      <div class="form-group">
        <div class="form-check">
          @php
          $active = get_setting('sms_active_received_in_bd_warehouse');
          $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
          @endphp
          {{html()->checkbox('sms_active_received_in_bd_warehouse', $active, $date)->class('form-check-input')}}
          {{ html()->label('Active Message')->class('form-check-label')->for('sms_active_received_in_bd_warehouse') }}
        </div>
      </div> <!-- form-group-->
      <div class="form-group">
        {{html()->textarea('sms_received_in_bd_warehouse', get_setting('sms_received_in_bd_warehouse'))
                      ->class('form-control')
                      ->rows(4)
                      ->placeholder('Message')
                      ->attributes(['max', 600, 'aria-describedby' => 'sms_received_in_bd_warehouse_help'])
                      ->autofocus(true)}}
        <small id="sms_received_in_bd_warehouse_help" class="form-text text-muted">
          Place for dynamic use
          <span class="text-danger">[appUrl] </span>,
          <span class="text-danger">[orderNumber] </span>,
          <span class="text-danger">[transactionNumber] </span>,
          <span class="text-danger">[tracking] </span>,
          <span class="text-danger">[amount] </span>
        </small>
      </div> <!-- form-group-->
    </fieldset>



    <fieldset>
      <legend>On Transit to Customer</legend>
      <div class="form-group">
        <div class="form-check">
          @php
          $active = get_setting('sms_active_on_transit_to_customer');
          $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
          @endphp
          {{html()->checkbox('sms_active_on_transit_to_customer', $active, $date)->class('form-check-input')}}
          {{ html()->label('Active Message')->class('form-check-label')->for('sms_active_on_transit_to_customer') }}
        </div>
      </div> <!-- form-group-->
      <div class="form-group">
        {{html()->textarea('sms_on_transit_to_customer', get_setting('sms_on_transit_to_customer'))
                    ->class('form-control')
                    ->rows(2)
                    ->placeholder('Message')
                    ->attributes(['max', 600, 'aria-describedby' => 'sms_on_transit_to_customer_help'])
                    ->autofocus(true)}}
        <small id="sms_on_transit_to_customer_help" class="form-text text-muted">
          Place for dynamic use
          <span class="text-danger">[appUrl] </span>,
          <span class="text-danger">[orderNumber] </span>,
          <span class="text-danger">[transactionNumber] </span>,
          <span class="text-danger">[tracking] </span>,
          <span class="text-danger">[amount] </span>
        </small>
      </div> <!-- form-group-->
    </fieldset>
    <fieldset>
      <legend>Delivered/Completed</legend>
      <div class="form-group">
        <div class="form-check">
          @php
          $active = get_setting('sms_active_delivered_completed');
          $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
          @endphp
          {{html()->checkbox('sms_active_delivered_completed', $active, $date)->class('form-check-input')}}
          {{ html()->label('Active Message')->class('form-check-label')->for('sms_active_delivered_completed') }}
        </div>
      </div> <!-- form-group-->
      <div class="form-group">
        {{html()->textarea('sms_delivered_completed', get_setting('sms_delivered_completed'))
                    ->class('form-control')
                    ->rows(2)
                    ->placeholder('Message')
                    ->attributes(['max', 600, 'aria-describedby' => 'sms_delivered_completed_help'])
                    ->autofocus(true)}}
        <small id="sms_delivered_completed_help" class="form-text text-muted">
          Place for dynamic use
          <span class="text-danger">[appUrl] </span>,
          <span class="text-danger">[orderNumber] </span>,
          <span class="text-danger">[transactionNumber] </span>,
          <span class="text-danger">[tracking] </span>,
          <span class="text-danger">[amount] </span>
        </small>
      </div> <!-- form-group-->
    </fieldset>
    <fieldset>
      <legend>Adjustment</legend>
      <div class="form-group">
        <div class="form-check">
          @php
          $active = get_setting('sms_active_adjustment');
          $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
          @endphp
          {{html()->checkbox('sms_active_adjustment', $active, $date)->class('form-check-input')}}
          {{ html()->label('Active Message')->class('form-check-label')->for('sms_active_adjustment') }}
        </div>
      </div> <!-- form-group-->
      <div class="form-group">
        {{html()->textarea('sms_adjustment', get_setting('sms_adjustment'))
                    ->class('form-control')
                    ->rows(2)
                    ->placeholder('Message')
                    ->attributes(['max', 600, 'aria-describedby' => 'sms_adjustment_help'])
                    ->autofocus(true)}}
        <small id="sms_adjustment_help" class="form-text text-muted">
          Place for dynamic use
          <span class="text-danger">[appUrl] </span>,
          <span class="text-danger">[orderNumber] </span>,
          <span class="text-danger">[transactionNumber] </span>,
          <span class="text-danger">[tracking] </span>,
          <span class="text-danger">[amount] </span>
        </small>
      </div> <!-- form-group-->
    </fieldset>
    <fieldset>
      <legend>Canceled by Seller</legend>
      <div class="form-group">
        <div class="form-check">
          @php
          $active = get_setting('sms_active_canceled_by_seller');
          $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
          @endphp
          {{html()->checkbox('sms_active_canceled_by_seller', $active, $date)->class('form-check-input')}}
          {{ html()->label('Active Message')->class('form-check-label')->for('sms_active_canceled_by_seller') }}
        </div>
      </div> <!-- form-group-->
      <div class="form-group">
        {{html()->textarea('sms_canceled_by_seller', get_setting('sms_canceled_by_seller'))
                    ->class('form-control')
                    ->rows(2)
                    ->placeholder('Message')
                    ->attributes(['max', 600, 'aria-describedby' => 'sms_canceled_by_seller_help'])
                    ->autofocus(true)}}
        <small id="sms_canceled_by_seller_help" class="form-text text-muted">
          Place for dynamic use
          <span class="text-danger">[appUrl] </span>,
          <span class="text-danger">[orderNumber] </span>,
          <span class="text-danger">[transactionNumber] </span>,
          <span class="text-danger">[tracking] </span>,
          <span class="text-danger">[amount] </span>
        </small>
      </div> <!-- form-group-->
    </fieldset>
    <fieldset>
      <legend>Out of Stock</legend>
      <div class="form-group">
        <div class="form-check">
          @php
          $active = get_setting('sms_active_out_of_stock');
          $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
          @endphp
          {{html()->checkbox('sms_active_out_of_stock', $active, $date)->class('form-check-input')}}
          {{ html()->label('Active Message')->class('form-check-label')->for('sms_active_out_of_stock') }}
        </div>
      </div> <!-- form-group-->
      <div class="form-group">
        {{html()->textarea('sms_out_of_stock', get_setting('sms_out_of_stock'))
                    ->class('form-control')
                    ->rows(2)
                    ->placeholder('Message')
                    ->attributes(['max', 600, 'aria-describedby' => 'sms_out_of_stock_help'])
                    ->autofocus(true)}}
        <small id="sms_out_of_stock_help" class="form-text text-muted">
          Use dynamic value for
          <span class="text-danger">[appUrl] </span>,
          <span class="text-danger">[orderNumber] </span>,
          <span class="text-danger">[transactionNumber] </span>,
          <span class="text-danger">[tracking] </span>,
          <span class="text-danger">[amount] </span>
        </small>
      </div> <!-- form-group-->
    </fieldset>
    <fieldset>
      <legend>Refunded</legend>
      <div class="form-group">
        <div class="form-check">
          @php
          $active = get_setting('sms_active_refunded');
          $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
          @endphp
          {{html()->checkbox('sms_active_refunded', $active, $date)->class('form-check-input')}}
          {{ html()->label('Active Message')->class('form-check-label')->for('sms_active_refunded') }}
        </div>
      </div> <!-- form-group-->
      <div class="form-group">
        {{html()->textarea('sms_refunded', get_setting('sms_refunded'))
                    ->class('form-control')
                    ->rows(2)
                    ->placeholder('Message')
                    ->attributes(['max', 600, 'aria-describedby' => 'sms_refunded_help'])
                    ->autofocus(true)}}
        <small id="sms_refunded_help" class="form-text text-muted">
          Use dynamic value for
          <span class="text-danger">[appUrl] </span>,
          <span class="text-danger">[orderNumber] </span>,
          <span class="text-danger">[transactionNumber] </span>,
          <span class="text-danger">[tracking] </span>,
          <span class="text-danger">[amount] </span>
        </small>
      </div> <!-- form-group-->
    </fieldset>
  </div> <!--  .card-body -->
  <div class="card-footer">
    <div class="form-group">
      {{html()->button('Update')->class('btn btn-success')}}
    </div> <!-- form-group-->
  </div> <!--  .card-body -->
</div> <!--  .card -->
{{ html()->form()->close() }}