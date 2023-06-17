$(document).on("click", "tbody>tr", function() {
    if (event.detail === 2) {
        var changeStatusButton = $("#changeStatusButton");
        var hiddenField = changeStatusButton.find(".hiddenField");
        changeStatusButton.modal("show");
        var data_id = $(this).attr("id");
        var hiddenInput = `<input type="hidden" name="item_id" id="item_id" value="${data_id}">`;
        hiddenField.html(hiddenInput);
    }
});

$(document).on("change", 'select[name="out_of_stock_type"]', function(event) {
    var item_id = $(document)
        .find("#item_id")
        .val();
    var value = $(this).val();
    var itemRow = $(document).find("#" + item_id);
    var out_of_stock = $(document).find('input[name="out_of_stock"]');
    if (value == "full") {
        var dueValue = 2 * Number(itemRow.find(".first_payment").text());
        out_of_stock.val(dueValue);
    } else {
        out_of_stock.val("");
    }
});

$(document).on("change", "#status", function(event) {
    event.preventDefault();
    var item_id = $(document)
        .find("#item_id")
        .val();
    var status = $(this).val();
    var additionStatus = $("#additionInputStatusForm");
    var itemRow = $(document).find("#" + item_id);
    var inputData = "";

    if (status === "purchased") {
        var order_number = itemRow.find(".1688_order_number").text();
        inputData = `<input type="text" name="order_number" value="${order_number}" placeholder="Order Number" class="form-control" required="true">`;
    } else if (status === "shipped-from-suppliers") {
        var tracking_number = itemRow.find(".tracking_number").text();
        inputData = `<input type="text" name="tracking_number" value="${tracking_number}" placeholder="Tracking Number" class="form-control" required="true">`;
    } else if (status === "received-in-BD-warehouse") {
        var actual_weight = itemRow.find(".actual_weight").text();
        inputData = `<input type="text" name="actual_weight" value="${actual_weight}" placeholder="Actual Weight" class="form-control" required="true">`;
    } else if (status === "out-of-stock") {
        var out_of_stock = itemRow.find(".out_of_stock").text();
        inputData = `<select name="out_of_stock_type" class="form-control mb-3" required="true">
                        <option value="partial">Partial</option>
                        <option value="full">Full</option>
                    </select>
                    <input type="text" name="out_of_stock" value="${out_of_stock}" placeholder="Amount" class="form-control" required="true">`;
    } else if (status === "adjustment") {
        var adjustment = itemRow.find(".adjustment").text();
        inputData = `<input type="text" name="adjustment" value="${adjustment}" placeholder="Adjustment Amount" class="form-control" required="true">`;
    } else if (status === "refunded") {
        var refunded = itemRow.find(".refunded").text();
        inputData = `<input type="text" name="refunded" value="${refunded}" placeholder="Adjustment Amount" class="form-control" required="true">`;
    }

    additionStatus.html(inputData);
});

$("#changeStatusButton").on("shown.bs.modal", function(event) {
    $(this)
        .find("#status")
        .trigger("change");
});

$(document).on("submit", "#statusChargeForm", function(event) {
    event.preventDefault();
    var csrf = $('meta[name="csrf-token"]');
    $.ajax({
        type: "POST",
        url: $(this).attr("action"),
        data: $(this).serialize(),
        headers: {
            "X-CSRF-TOKEN": csrf.attr("content")
        },
        beforeSend: function() {
            // before loading...
        },
        success: function(response) {
            if (response.status) {
                var orderItem = response.orderItem;
                if (response.is_array) {
                    orderItem.map((item, key) => {
                        updateColumnValue(item);
                    });
                } else {
                    updateColumnValue(orderItem);
                }
            }
            csrf.attr("content", response.csrf);
        },
        error: function(xhr) {
            // if error occured
            // console.log('error', xhr);
        },
        complete: function() {
            $("#changeStatusButton").modal("hide");
            $(document)
                .find("#statusSubmitBtn")
                .removeAttr("disabled");
            window.location.reload();
        }
    });
});

function updateColumnValue(itemData) {
    var itemRow = $(document).find("#" + itemData.id);
    if (itemData.order_number) {
        itemRow.find(".1688_order_number").text(itemData.order_number);
    }
    if (itemData.tracking_number) {
        itemRow.find(".tracking_number").text(itemData.tracking_number);
    }
    if (itemData.actual_weight) {
        itemRow.find(".actual_weight").text(itemData.actual_weight);
    }
    if (itemData.quantity) {
        itemRow.find(".quantity").text(itemData.quantity);
    }
    if (itemData.product_value) {
        itemRow.find(".product_value").text(itemData.product_value);
    }
    if (itemData.first_payment) {
        itemRow.find(".first_payment").text(itemData.first_payment);
    }
    if (itemData.shipping_charge) {
        itemRow.find(".shipping_charge").text(itemData.shipping_charge);
    }
    if (itemData.courier_bill) {
        itemRow.find(".courier_bill").text(itemData.courier_bill);
    }
    if (itemData.out_of_stock) {
        itemRow.find(".out_of_stock").text(itemData.out_of_stock);
    }
    if (itemData.missing) {
        itemRow.find(".missing").text(itemData.missing);
    }
    if (itemData.adjustment) {
        itemRow.find(".adjustment").text(itemData.adjustment);
    }
    if (itemData.refunded) {
        itemRow.find(".refunded").text(itemData.refunded);
    }
    if (itemData.last_payment) {
        itemRow.find(".last_payment").text(itemData.last_payment);
    }
    if (itemData.due_payment) {
        itemRow.find(".due_payment").text(itemData.due_payment);
    }
    if (itemData.status) {
        itemRow.find(".status").text(itemData.status);
        itemRow.find(".checkboxItem").attr("data-status", itemData.status);
    }
}

$(document).on("click", ".findResultButton", function(event) {
    event.preventDefault();
    $(document)
        .find("#filterWalletForm")
        .submit();
});

$(document).on("submit", "#filterWalletForm", function(event) {
    event.preventDefault();
    var customer = $(this)
        .find("#customer")
        .val();
    var status = $(this)
        .find("#findStatus")
        .val();
    window.location.href =
        "/admin/order/wallet?status=" + status + "&customer=" + customer;
});

function enable_proceed_button() {
    $("#changeGroupStatusButton").removeAttr("disabled");
    $("#generateInvoiceButton").removeAttr("disabled");
}

function disabled_proceed_button() {
    $("#changeGroupStatusButton").attr("disabled", "disabled");
    $("#generateInvoiceButton").attr("disabled", "disabled");
}

$(function() {
    const body = $(document);

    body.on("change", "#allSelectCheckbox", function() {
        var tbodyCheckbox = $("tbody").find("input.checkboxItem");
        if ($(this).is(":checked")) {
            tbodyCheckbox.prop("checked", true);
            enable_proceed_button();
        } else {
            tbodyCheckbox.prop("checked", false);
            disabled_proceed_button();
        }
    });
    body.on("change", "input.checkboxItem", function() {
        var checked_item = $("input.checkboxItem:checked").length;
        var uncheck_item = $('input.checkboxItem:not(":checked")').length;
        console.log("asdf", checked_item);
        if (uncheck_item == 0) {
            $("#allSelectCheckbox").prop("checked", true);
        } else {
            $("#allSelectCheckbox").prop("checked", false);
        }
        if (checked_item > 0) {
            enable_proceed_button();
        } else {
            disabled_proceed_button();
        }
    });
    body.on("click", "#changeGroupStatusButton", function() {
        var changeStatusModal = $("#changeStatusButton");
        var hiddenField = changeStatusModal.find(".hiddenField");
        var hiddenInput = "";
        $("input.checkboxItem:checked").each(function(index) {
            hiddenInput += `<input type="hidden" name="item_id[]" value="${$(
                this
            ).val()}">`;
        });
        hiddenField.html(hiddenInput);
        changeStatusModal.modal("show");
        $("#statusChargeForm").trigger("reset");
    });

    body.on("click", "#generateInvoiceButton", function() {
        var generateInvoiceModal = $("#generateInvoiceModal");
        var hiddenInput = "";
        var is_generate = true;
        var duePayment = "";
        var serial = 1;
        var userTrack = 0;
        var total_due = 0;
        var total_weight = 0;
        var invoices = [];

        $("input.checkboxItem:checked").each(function(index) {
            var item_id = $(this).val();
            var status = $(this).attr("data-status");
            var user_id = $(this).attr("data-user");
            var invoice_item = {};
            if (userTrack === 0) {
                userTrack = user_id;
            }
            if (userTrack !== 0 && userTrack !== user_id) {
                is_generate = false;
            }
            var status_allow = [
                "received-in-BD-warehouse",
                "out-of-stock",
                "adjustment",
                "refunded"
            ];
            // received-in-BD-warehouse
            // alert(status);
            if (!status_allow.includes(status)) {
                is_generate = false;
            }
            if (is_generate) {
                var itemRow = $(document).find("#" + item_id);
                var product_name = itemRow
                    .find(".productInfo")
                    .attr("data-product-name");
                var product_id = itemRow
                    .find(".productInfo")
                    .attr("data-product-id");
                var order_item_number = itemRow
                    .find(".order_item_number")
                    .text();
                var actual_weight = itemRow.find(".actual_weight").text();
                var due_payment = itemRow.find(".due_payment").text();

                total_due += Number(due_payment);
                total_weight += Number(actual_weight);
                duePayment += `<tr>
                          <td class=" align-middle">${serial}</td>
                          <td class=" align-middle">${order_item_number}</td>
                          <td class="text-left align-middle">${product_name}</td>
                          <td class=" align-middle">${status}</td>
                          <td class="text-right align-middle">${Number(
                              actual_weight
                          ).toFixed(3)}</td>
                          <td class="text-right align-middle">${Number(
                              due_payment
                          ).toFixed(2)}</td>
                        </tr>`;
                invoice_item.id = item_id;
                invoice_item.order_item_number = order_item_number;
                invoice_item.product_id = product_id;
                invoice_item.product_name = product_name;
                invoice_item.actual_weight = actual_weight;
                invoice_item.due_payment = due_payment;
                invoice_item.status = status;
            }
            serial += 1;
            invoices.push(invoice_item);
        });

        if (is_generate) {
            var invoiceFooter = $("#invoiceFooter");
            invoiceFooter
                .find(".total_weight")
                .text(Number(total_weight).toFixed(3));
            invoiceFooter.find(".total_due").text(Number(total_due).toFixed(2));
            // invoiceFooter.find('.courier_bill').text(Number(0.00).toFixed(2));
            invoiceFooter
                .find(".total_payable")
                .text(Number(total_due).toFixed(2));
            invoiceFooter.find(".total_payable").attr("data-user", userTrack);
            invoiceFooter
                .find(".total_payable")
                .attr(
                    "data-invoices",
                    encodeURIComponent(JSON.stringify(invoices))
                );
            $("#invoiceItem").html(duePayment);
            generateInvoiceModal.modal("show");
        } else {
            Swal.fire({
                icon: "warning",
                text: "Selected items are not ready for generate invoice"
            });
        }
        //console.log('invoices', invoices);
        // hiddenField.html(hiddenInput);
        // changeStatusModal.modal('show');
    });

    function generate_process_related_data() {
        var invoiceFooter = $("#invoiceFooter");
        var courier_bill = invoiceFooter.find(".courier_bill").text();
        var payment_method = invoiceFooter.find("#payment_method").val();
        var delivery_method = invoiceFooter.find("#delivery_method").val();
        var total_payable = invoiceFooter.find(".total_payable").text();
        var total_due = invoiceFooter.find(".total_due").text();
        var customer_id = invoiceFooter
            .find(".total_payable")
            .attr("data-user");
        var isNotify = $("#notifyUser").is(":checked") ? 1 : 0;
        var related_data = {};
        related_data.courier_bill = courier_bill;
        related_data.payment_method = payment_method;
        related_data.delivery_method = delivery_method;
        related_data.total_due = total_due;
        related_data.total_payable = total_payable;
        related_data.user_id = customer_id;
        related_data.isNotify = isNotify;
        return related_data;
    }

    $(document).on("click", ".applyCourierBtn", function() {
        var courier_bill = $(this)
            .closest(".input-group")
            .find(".form-control")
            .val();
        var total_due = $("#invoiceFooter")
            .find(".total_due")
            .text();
        var total_payable = Number(courier_bill) + Number(total_due);
        $("#invoiceFooter")
            .find(".courier_bill")
            .text(Number(courier_bill).toFixed(2));
        $("#invoiceFooter")
            .find(".total_payable")
            .text(Number(total_payable).toFixed(2));

        $(".courier_bill_text").show();
        $(".courierSubmitForm").hide();
    });

    $(document).on("click", ".removeCourierBtn", function() {
        $(this)
            .closest("div")
            .find(".form-control")
            .val("");
        var total_due = $("#invoiceFooter")
            .find(".total_due")
            .text();
        $("#invoiceFooter")
            .find(".courier_bill")
            .text(0.0);
        $("#invoiceFooter")
            .find(".total_payable")
            .text(Number(total_due).toFixed(2));
        $(".courier_bill_text").hide();
        $(".courierSubmitForm").show();
    });

    $(document).on("click", "#generateSubmitBtn", function() {
        var invoices = $("#invoiceFooter")
            .find(".total_payable")
            .attr("data-invoices");
        if (invoices) {
            invoices = decodeURIComponent(invoices);
        }
        var related = generate_process_related_data();
        var csrf = $('meta[name="csrf-token"]');
        $.ajax({
            type: "POST",
            url: $(this).attr("data-action"),
            data: {
                invoices: invoices,
                related: JSON.stringify(related)
            },
            headers: {
                "X-CSRF-TOKEN": csrf.attr("content")
            },
            beforeSend: function() {
                // before loading...
            },
            success: function(response) {
                if (response.status) {
                    window.location.href = "/admin/invoice";
                } else {
                    Swal.fire({
                        icon: "warning",
                        text: "Invoice Generate Fail"
                    });
                }
            },
            error: function(xhr) {
                // if error occurred
                Swal.fire({
                    icon: "warning",
                    text: "Invoice Generate Error"
                });
            },
            complete: function() {
                $("#generateInvoiceModal").modal("hide");
            }
        });
    });
});

$(function() {
    $(".select2").select2();
});
