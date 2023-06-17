// Swal.fire({
//     title: "Are you sure you want to delete this item?",
//     showCancelButton: true,
//     confirmButtonText: "Confirm Delete",
//     cancelButtonText: "Cancel",
//     icon: "warning"
// }).then(result => {
//     if (result.value) {
//         this.submit();
//     } else {
//         enableSubmitButtons($(this));
//     }
// });
import axios from "axios";
const { message } = require("laravel-mix/src/Log");
const { parse } = require("postcss");

function enable_proceed_button() {
    $("#changeGroupStatusButton").removeAttr("disabled");
}

function disabled_proceed_button() {
    $("#changeGroupStatusButton").attr("disabled", "disabled");
}
$(function () {
    var i = 0;
    let itemNumber = 0;

    $("body")
        .on("change", "#allSelectCheckbox", function () {
            var tbodyCheckbox = $("tbody").find("input.checkboxItem");
            if ($(this).is(":checked")) {
                tbodyCheckbox.prop("checked", true);
            } else {
                tbodyCheckbox.prop("checked", false);
            }
        })
        .on("change", "input.checkboxItem", function () {
            var checked_item = $("input.checkboxItem:checked").length;
            var uncheck_item = $('input.checkboxItem:not(":checked")').length;

            if (uncheck_item == 0) {
                $("#allSelectCheckbox").prop("checked", true);
            } else {
                $("#allSelectCheckbox").prop("checked", false);
            }
        })

        // .on("click", "#changeGroupStatusButton", function () {
        //     var changeStatusModal = $("#changeStatusButton");
        //     var hiddenField = changeStatusModal.find(".hiddenField");
        //     var hiddenInput = "";
        //     $("input.checkboxItem:checked").each(function (index) {
        //         hiddenInput += `<input type="hidden" name="order_item_id[]" value="${$(
        //             this
        //         ).val()}">`;
        //     });
        //     console.log(hiddenInput);
        //     hiddenField.html(hiddenInput);
        //     changeStatusModal.modal("show");
        //     $("#statusChargeForm").trigger("reset");
        // })
        .on("click", "#add-btn", function (e) {
            e.preventDefault();
            ++i;

            var input_element = `<tr>
                                    <td>
                                    <div class="row">
                                    <div class="form-group col">
                                        <select class="form-control" name="service_type[]">
                                            <option value="d2d">D2D</option>
                                        </select>
                                    </div>
                                    <div class="form-group col">
                                            <input type="text" name="category[]" id="category"
                                                placeholder="category" class="form-control" />
                                        </div>
                                    <div class="form-group col">
                                        <select class="form-control" name="shipped_from[]">
                                        <option value=""></option>
                                        <option value="china">China</option>
                                        <option value="hongkong">HongKong</option>
                                        </select>
                                        </div>
                                        <div class="form-group col">
                                        <input type="text" name="rate[]" id="rate" placeholder="rate" class="form-control" />
                                        </div>
                                        </div>
                                        </td>
                                    <td class="text-right" style="width:1%;padding-bottom: 18px;">
                                      <button type="button" name="add" id="add-btn" class="btn btn-outline-success">+</button>
                                    </td>
                                    <td class="text-right" style="width:1%;padding-bottom: 18px;">
                                      <button type="button" class="btn btn-outline-danger remove-tr">-</button>
                                    </td>
                                 </tr>`;

            $("#dynamicAddRemove").append(input_element);
        })
        .on("click", "#carton-btn", function (e) {
            e.preventDefault();
            ++i;
            var carton = `<tr>
                                    <td><input type="text" name="carton_id[]" placeholder="carton id"
                                            class="form-control" /></td>
                                    <td class="text-right" style="width:1%">
                                      <button type="button" name="add" id="carton-btn" class="btn btn-outline-success">+</button>
                                    </td>
                                    <td class="text-right" style="width:1%">
                                      <button type="button" class="btn btn-outline-danger remove-tr">-</button>
                                    </td>
                                </tr>`;

            $("#add-carton").append(carton);
        })
        .on("click", "#weight-btn", function (e) {
            e.preventDefault();
            ++i;
            var weight = `<tr>
                                    <td><input type="text" name="chn_warehouse_weight[]"
                                            placeholder="china warehouse weight" class="form-control" /></td>
                                    <td class="text-right" style="width:1%">
                                      <button type="button" name="add" id="weight-btn" class="btn btn-outline-success">+</button>
                                    </td>
                                    <td class="text-right" style="width:1%">
                                      <button type="button" class="btn btn-outline-danger remove-tr">-</button>
                                    </td>
                                </tr>`;

            $("#add-weight").append(weight);
        })
        .on("click", "#tracking-btn", function (e) {
            e.preventDefault();
            ++i;
            var tracking = `<tr>
                                    <td><input type="text" name="tracking_number[]" placeholder="tracking id"
                                            class="form-control" /></td>
                                    <td class="text-right" style="width:1%">
                                      <button type="button" name="add" id="tracking-btn" class="btn btn-outline-success">+</button>
                                    </td>
                                    <td class="text-right" style="width:1%">
                                      <button type="button" class="btn btn-outline-danger remove-tr">-</button>
                                    </td>
                                </tr>`;

            $("#add-tracking-number").append(tracking);
        })
        .on("click", ".remove-tr", function (e) {
            e.preventDefault();
            $(this).parents("tr").remove();
        })
        .on("click", ".order-modal", function () {
            let itemValue = $(this).data("value");
            $("#updateItem").attr("action", `/admin/order/${itemValue.id}`);
            $("#order_item_id").val(itemValue.id);
            $("#order_item_rmb").val(itemValue.order_item_rmb);
            $("#purchase_rmb").val(itemValue.purchase_rmb);
            $("#china_local_delivery_rmb").val(
                itemValue.china_local_delivery_rmb
            );
            $("#shipping_from").val(itemValue.shipping_from);
            $("#shipping_mark").val(itemValue.shipping_mark);
            $("#chn_warehouse_qty").val(itemValue.chn_warehouse_qty);
            $("#chn_warehouse_weight").val(itemValue.chn_warehouse_weight);
            $("#cbm").val(itemValue.cbm);
            $("#carton_id").val(itemValue.carton_id);
            $("#tracking_number").val(itemValue.tracking_number);
            $("#shipped_by").val(itemValue.shipped_by);
            $("#status").val(itemValue.status);
            $("#product_value").val(itemValue.product_value);
            $("#product_bd_received_cost").val(
                itemValue.product_bd_received_cost
            );
            $("#chinaLocalDelivery").val(itemValue.chinaLocalDelivery);
            $("#purchase_cost_bd").val(itemValue.purchase_cost_bd);
            $("#updateButton").modal("show");
        })

        .on("click", ".order-item-modal", function () {
            let itemValue = $(this).data("value");
            $(".order_item_id").val(itemValue);
            $("#updateButton").modal("show");
        })

        .on("click", "#statusSubmitBtn", function (event) {
            event.preventDefault();
            var formData = $("#updateItem").serialize();
            let url = $("#updateItem").attr("action");
            $.ajax({
                type: "put",
                url: url,
                data: formData,
                beforeSend: function () {
                    $("#statusSubmitBtn").prop("disabled", true);
                },

                success: function (res) {
                    Swal.fire({
                        icon: "success",
                        text: "Update successful",
                    }).then((result) => {
                        window.location.reload();
                    });
                },
                error: function () {
                    Swal.fire({
                        icon: "warning",
                        text: "Unsuccessful",
                    });
                },
            });
        })

        .on("click", ".status-modal", function () {
            let orderValue = $(this).data("value");
            $("#order_id").val(orderValue);
            $("#statusModal").modal("show");
        })
        .on("click", ".toggleForm", function (event) {
            event.preventDefault();
            $(this).closest("td").find(".editField").toggle();
        })
        .on("click", ".edit-item", function (event) {
            event.preventDefault();
            let href = $(this).attr("href");
            let editItemForm = $("#editItemForm");
            axios
                .get(href)
                .then((response) => {
                    let resData = response.data;
                    if (resData.status) {
                        editItemForm.find(".modal-title").text(resData.title);
                        editItemForm.find(".modal-body").html(resData.editForm);
                        editItemForm.modal("show");
                    }
                })
                .catch((error) => {
                    console.log("error", error);
                });
        })
        .on(
            "change blur keyup paste",
            "#shipping_rate, #actual_weight",
            function () {
                const rate = $("#shipping_rate").val();
                const weight = $("#actual_weight").val();
                const total = Number(rate) * Number(weight);
                $("#shipping_charge").val(Math.round(total));
            }
        )

        // .on("click", "#editBtn", function (event) {
        //     event.preventDefault();
        //     var formData = $("#editItemForm").serialize();
        //     let url = $("#editItemForm").attr("action");
        //     console.log(url);
        //     $.ajax({
        //         type: "put",
        //         url: url,
        //         data: formData,
        //         beforeSend: function () {
        //             $("#editBtn").prop("disabled", true);
        //             console.log(formData);
        //         },
        //         success: function (res) {
        //             Swal.fire({
        //                 icon: "success",
        //                 text: "Update successful",
        //             }).then((result) => {
        //                 window.location.reload();
        //             });
        //         },
        //         error: function () {
        //             Swal.fire({
        //                 icon: "warning",
        //                 text: "Unsuccessful",
        //             });
        //         },
        //     });
        // })

        .on("keyup", "#purchase_rmb", function () {
            let prmb = $(this).val();
            let conRate = $("#actualrmb_rate").val();
            $("#purchase_cost_bd").val(prmb * conRate);

            let ormb = $("#order_item_rmb").val();

            if (parseInt(prmb) > parseInt(ormb)) {
                $("#statusSubmitBtn").prop("disabled", true);
                Swal.fire({
                    icon: "warning",
                    text: "Actual Rmb Cannot be Bigger Than Order Rmb",
                });
            } else {
                $("#statusSubmitBtn").prop("disabled", false);
            }
        })

        .on("keyup", "#china_local_delivery_rmb", function () {
            let local = $(this).val();
            let localRate = $("#local_rate").val();
            $("#chinaLocalDelivery").val(local * localRate);
            let conv = $("#chinaLocalDelivery").val();
            let prcost = $("#product_value").val();

            $("#product_bd_received_cost").val(
                parseInt(conv) + parseInt(prcost)
            );
        });
});
