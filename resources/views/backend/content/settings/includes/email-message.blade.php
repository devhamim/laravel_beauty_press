{{ html()->form('POST', route('admin.setting.message.store'))->class('form-horizontal')->open() }}
<div class="card">
    <div class="card-header with-border">
        <h3 class="card-title">Email Notification Messages <small class="ml-2">(update information anytime)</small></h3>
    </div>
    <div class="card-body">
        <fieldset>
            <legend>Waiting for Payment</legend>
            <div class="form-group">
                <div class="form-check">
                    @php
                        $active = get_setting('active_waiting_for_payment');
                        $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
                    @endphp
                    {{html()->checkbox('active_waiting_for_payment', $active, $date)
                            ->class('form-check-input')}}
                    {{ html()->label('Active Message')->class('form-check-label')->for('active_waiting_for_payment') }}
                </div>
            </div> <!-- form-group-->
            <div class="form-group">
                {{html()->textarea('waiting_for_payment', get_setting('waiting_for_payment'))
                            ->class('form-control')
                            ->rows(4)
                            ->placeholder('Message')
                            ->attributes(['max', 600, 'aria-describedby' => 'waiting_for_payment_help'])
                            ->autofocus(true)}}
                <small id="waiting_for_payment_help" class="form-text text-muted">Place of Order Number use <span
                        class="text-danger">[orderNumber]</span></small>
            </div> <!-- form-group-->
        </fieldset>
        <fieldset>
            <legend>Partial Paid</legend>
            <div class="form-group">
                <div class="form-check">
                    @php
                        $active = get_setting('active_partial_paid');
                        $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
                    @endphp
                    {{html()->checkbox('active_partial_paid', $active, $date)->class('form-check-input')}}
                    {{ html()->label('Active Message')->class('form-check-label')->for('active_partial_paid') }}
                </div>
            </div> <!-- form-group-->
            <div class="form-group">
                {{html()->textarea('partial_paid', get_setting('partial_paid'))
                            ->class('form-control')
                            ->rows(4)
                            ->placeholder('Message')
                            ->attributes(['max', 600, 'aria-describedby' => 'partial_paid_help'])
                            ->autofocus(true)}}
                <small id="partial_paid_help" class="form-text text-muted">Place of Transaction Number use <span
                        class="text-danger">[transactionNumber]</span></small>
            </div> <!-- form-group-->
        </fieldset>
        <fieldset>
            <legend>Purchased</legend>
            <div class="form-group">
                <div class="form-check">
                    @php
                        $active = get_setting('active_purchased_message');
                        $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
                    @endphp
                    {{html()->checkbox('active_purchased_message', $active, $date)->class('form-check-input')}}
                    {{ html()->label('Active Message')->class('form-check-label')->for('active_purchased_message') }}
                </div>
            </div> <!-- form-group-->
            <div class="form-group">
                {{html()->textarea('purchased_message', get_setting('purchased_message'))
                            ->class('form-control')
                            ->rows(4)
                            ->placeholder('Message')
                            ->attributes(['max', 600, 'aria-describedby' => 'purchased_message_help'])
                            ->autofocus(true)}}
                <small id="purchased_message_help" class="form-text text-muted">Place of Order Number use <span
                        class="text-danger">[orderNumber]</span></small>
            </div> <!-- form-group-->
        </fieldset>
        <fieldset>
            <legend>Shipped From Suppliers</legend>
            <div class="form-group">
                <div class="form-check">
                    @php
                        $active = get_setting('active_shipped_from_suppliers');
                        $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
                    @endphp
                    {{html()->checkbox('active_shipped_from_suppliers', $active, $date)->class('form-check-input')}}
                    {{ html()->label('Active Message')->class('form-check-label')->for('active_shipped_from_suppliers') }}
                </div>
            </div> <!-- form-group-->
            <div class="form-group">
                {{html()->textarea('shipped_from_suppliers', get_setting('shipped_from_suppliers'))
                            ->class('form-control')
                            ->rows(4)
                            ->placeholder('Message')
                            ->attributes(['max', 600, 'aria-describedby' => 'shipped_from_suppliers_help'])
                            ->autofocus(true)}}

                <small id="refunded_help" class="form-text text-muted">Use dynamic value for <span
                        class="text-danger">[orderNumber]</span> and <span
                        class="text-danger">[tracking]</span></small>
            </div> <!-- form-group-->
        </fieldset>
        <fieldset>
            <legend>Received in China Warehouse</legend>
            <div class="form-group">
                <div class="form-check">
                    @php
                        $active = get_setting('active_received_in_china_warehouse');
                        $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
                    @endphp
                    {{html()->checkbox('active_received_in_china_warehouse', $active, $date)->class('form-check-input')}}
                    {{ html()->label('Active Message')->class('form-check-label')->for('active_received_in_china_warehouse') }}
                </div>
            </div> <!-- form-group-->
            <div class="form-group">
                {{html()->textarea('received_in_china_warehouse', get_setting('received_in_china_warehouse'))
                            ->class('form-control')
                            ->rows(4)
                            ->placeholder('Message')
                            ->attributes(['max', 600, 'aria-describedby' => 'received_in_china_warehouse_help'])
                            ->autofocus(true)}}
                <small id="received_in_china_warehouse_help" class="form-text text-muted">Place of Order Number use <span
                        class="text-danger">[orderNumber]</span></small>
            </div> <!-- form-group-->
        </fieldset>
        <fieldset>
            <legend>Shipped From China Warehouse</legend>
            <div class="form-group">
                <div class="form-check">
                    @php
                        $active = get_setting('active_shipped_from_china_warehouse');
                        $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
                    @endphp
                    {{html()->checkbox('active_shipped_from_china_warehouse', $active, $date)->class('form-check-input')}}
                    {{ html()->label('Active Message')->class('form-check-label')->for('active_shipped_from_china_warehouse') }}
                </div>
            </div> <!-- form-group-->
            <div class="form-group">
                {{html()->textarea('shipped_from_china_warehouse', get_setting('shipped_from_china_warehouse'))
                            ->class('form-control')
                            ->rows(4)
                            ->placeholder('Message')
                            ->attributes(['max', 600, 'aria-describedby' => 'shipped_from_china_warehouse_help'])
                            ->autofocus(true)}}
                <small id="shipped_from_china_warehouse_help" class="form-text text-muted">Place of Order Number use <span
                        class="text-danger">[orderNumber]</span></small>
            </div> <!-- form-group-->
        </fieldset>
        <fieldset>
          <legend>Received in BD Warehouse</legend>
          <div class="form-group">
              <div class="form-check">
                  @php
                      $active = get_setting('active_received_in_bd_warehouse');
                      $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
                  @endphp
                  {{html()->checkbox('active_received_in_bd_warehouse', $active, $date)->class('form-check-input')}}
                  {{ html()->label('Active Message')->class('form-check-label')->for('active_received_in_bd_warehouse') }}
              </div>
          </div> <!-- form-group-->
          <div class="form-group">
              {{html()->textarea('received_in_bd_warehouse', get_setting('received_in_bd_warehouse'))
                          ->class('form-control')
                          ->rows(4)
                          ->placeholder('Message')
                          ->attributes(['max', 600, 'aria-describedby' => 'received_in_bd_warehouse_help'])
                          ->autofocus(true)}}
              <small id="received_in_bd_warehouse_help" class="form-text text-muted">Place of Order Number use <span
                      class="text-danger">[orderNumber]</span></small>
          </div> <!-- form-group-->
      </fieldset>
        <fieldset>
            <legend>On Transit to Customer</legend>
            <div class="form-group">
                <div class="form-check">
                    @php
                        $active = get_setting('active_on_transit_to_customer');
                        $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
                    @endphp
                    {{html()->checkbox('active_on_transit_to_customer', $active, $date)->class('form-check-input')}}
                    {{ html()->label('Active Message')->class('form-check-label')->for('active_on_transit_to_customer') }}
                </div>
            </div> <!-- form-group-->
            <div class="form-group">
                {{html()->textarea('on_transit_to_customer', get_setting('on_transit_to_customer'))
                            ->class('form-control')
                            ->rows(4)
                            ->placeholder('Message')
                            ->attributes(['max', 600, 'aria-describedby' => 'on_transit_to_customer_help'])
                            ->autofocus(true)}}
                <small id="on_transit_to_customer_help" class="form-text text-muted">Place of Order Number use <span
                        class="text-danger">[orderNumber]</span></small>
            </div> <!-- form-group-->
        </fieldset>
        <fieldset>
            <legend>Delivered/Completed</legend>
            <div class="form-group">
                <div class="form-check">
                    @php
                        $active = get_setting('active_delivered_completed');
                        $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
                    @endphp
                    {{html()->checkbox('active_delivered_completed', $active, $date)->class('form-check-input')}}
                    {{ html()->label('Active Message')->class('form-check-label')->for('active_delivered_completed') }}
                </div>
            </div> <!-- form-group-->
            <div class="form-group">
                {{html()->textarea('delivered_completed', get_setting('delivered_completed'))
                            ->class('form-control')
                            ->rows(4)
                            ->placeholder('Message')
                            ->attributes(['max', 600, 'aria-describedby' => 'delivered_completed_help'])
                            ->autofocus(true)}}
                <small id="delivered_completed_help" class="form-text text-muted">Place of Order Number use <span
                        class="text-danger">[orderNumber]</span></small>
            </div> <!-- form-group-->
        </fieldset>
        <fieldset>
            <legend>Adjustment</legend>
            <div class="form-group">
                <div class="form-check">
                    @php
                        $active = get_setting('active_adjustment');
                        $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
                    @endphp
                    {{html()->checkbox('active_adjustment', $active, $date)->class('form-check-input')}}
                    {{ html()->label('Active Message')->class('form-check-label')->for('active_adjustment') }}
                </div>
            </div> <!-- form-group-->
            <div class="form-group">
                {{html()->textarea('adjustment', get_setting('adjustment'))
                            ->class('form-control')
                            ->rows(4)
                            ->placeholder('Message')
                            ->attributes(['max', 600, 'aria-describedby' => 'adjustment_help'])
                            ->autofocus(true)}}
                <small id="refunded_help" class="form-text text-muted">Use dynamic value for <span
                        class="text-danger">[orderNumber]</span> and <span
                        class="text-danger">[amount]</span></small>
            </div> <!-- form-group-->
        </fieldset>
        <fieldset>
            <legend>Canceled by Seller</legend>
            <div class="form-group">
                <div class="form-check">
                    @php
                        $active = get_setting('active_canceled_by_seller');
                        $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
                    @endphp
                    {{html()->checkbox('active_canceled_by_seller', $active, $date)->class('form-check-input')}}
                    {{ html()->label('Active Message')->class('form-check-label')->for('active_canceled_by_seller') }}
                </div>
            </div> <!-- form-group-->
            <div class="form-group">
                {{html()->textarea('canceled_by_seller', get_setting('canceled_by_seller'))
                            ->class('form-control')
                            ->rows(4)
                            ->placeholder('Message')
                            ->attributes(['max', 600, 'aria-describedby' => 'canceled_by_seller_help'])
                            ->autofocus(true)}}
                <small id="canceled_by_seller_help" class="form-text text-muted">Place of Order Number use <span
                        class="text-danger">[orderNumber]</span></small>
            </div> <!-- form-group-->
        </fieldset>
        <fieldset>
            <legend>Out of Stock</legend>
            <div class="form-group">
                <div class="form-check">
                    @php
                        $active = get_setting('active_out_of_stock');
                        $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
                    @endphp
                    {{html()->checkbox('active_out_of_stock', $active, $date)->class('form-check-input')}}
                    {{ html()->label('Active Message')->class('form-check-label')->for('active_out_of_stock') }}
                </div>
            </div> <!-- form-group-->
            <div class="form-group">
                {{html()->textarea('out_of_stock', get_setting('out_of_stock'))
                            ->class('form-control')
                            ->rows(4)
                            ->placeholder('Message')
                            ->attributes(['max', 600, 'aria-describedby' => 'out_of_stock_help'])
                            ->autofocus(true)}}
                <small id="refunded_help" class="form-text text-muted">Use dynamic value for <span
                        class="text-danger">[orderNumber]</span> and <span
                        class="text-danger">[amount]</span></small>
            </div> <!-- form-group-->
        </fieldset>
        <fieldset>
            <legend>Refunded</legend>
            <div class="form-group">
                <div class="form-check">
                    @php
                        $active = get_setting('active_refunded');
                        $date = $active ? date('Y-m-d H:i:s', strtotime($active)) : date('Y-m-d H:i:s');
                    @endphp
                    {{html()->checkbox('active_refunded', $active, $date)->class('form-check-input')}}
                    {{ html()->label('Active Message')->class('form-check-label')->for('active_refunded') }}
                </div>
            </div> <!-- form-group-->
            <div class="form-group">
                {{html()->textarea('refunded', get_setting('refunded'))
                            ->class('form-control')
                            ->rows(4)
                            ->placeholder('Message')
                            ->attributes(['max', 600, 'aria-describedby' => 'refunded_help'])
                            ->autofocus(true)}}
                <small id="refunded_help" class="form-text text-muted">Use dynamic value for <span
                        class="text-danger">[orderNumber]</span> and <span
                        class="text-danger">[amount]</span></small>
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
