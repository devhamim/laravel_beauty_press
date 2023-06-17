import axios from "axios";
(function ($) {
    const body = $("body");

    $(body)
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
        .on("click", ".btn-edit-status", function (event) {
            event.preventDefault();
            let href = $(this).attr("href");
            let statusChangeFormModal = $("#statusChangeFormModal");
            let status = $(this).closest("div").find(".order-status").text();
            $("#editOrderStatus").attr("action", href);

            const exceptStatus = ["Waiting for Payment", "Partial Paid"];
            if (!exceptStatus.includes(status)) {
                statusChangeFormModal
                    .find(`option[value=${status}]`)
                    .attr("selected", "selected");
            }

            statusChangeFormModal.modal("show");
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
        .on("click", ".toggleForm", function (event) {
            event.preventDefault();
            $(this).closest("td").find(".editField").toggle();
        })
        .on("click", ".bkash_refund", function (event) {
            event.preventDefault();
            var action = $(this).attr("href");
            var option = $(this).attr("data-option");
            var bkashActionModal = $("#bkashActionModal");
            bkashActionModal.modal("show");
            loadingModal();
            axios
                .post(action, { option: option })
                .then((response) => {
                    let resData = response.data;
                    let option = resData.option;
                    if (option === "refund") {
                        bkashActionModal
                            .find(".modal-title")
                            .text("Bkash Refund Form");
                    } else if (option === "refund_status") {
                        bkashActionModal
                            .find(".modal-title")
                            .text("Bkash Refund Status");
                    } else if (option === "payment_status") {
                        bkashActionModal
                            .find(".modal-title")
                            .text("Bkash Payment Status");
                    }
                    bkashActionModal.find(".modal-body").html(resData.html);
                })
                .catch((error) => {
                    console.log("error", error);
                });
        })
        .on("submit", ".bkash_refund_form", function (event) {
            event.preventDefault();
            var action = $(this).attr("action");
            var data = $(this).serialize();
            Swal.fire({
                icon: "info",
                text: "Are you sure to refund this order ?",
                showCancelButton: true,
                confirmButtonText: "confirm",
                cancelButtonText: "cancel",
            }).then((result) => {
                if (result.value) {
                    loadingModal();
                    axios
                        .post(action, data)
                        .then((response) => {
                            let resData = response.data;
                            if (resData.status) {
                                $("#bkashActionModal")
                                    .find(".modal-body")
                                    .html(resData.html);
                                Swal.fire({
                                    icon: "success",
                                    text: "Refund success",
                                });
                            }
                        })
                        .catch((error) => {
                            console.log("error", error);
                        });
                }
            });
        });

    function loadingModal() {
        $("#bkashActionModal").find(".modal-body")
            .html(`<div class="text-center d-block my-5"><div class="spinner-border text-secondary" role="status">
        <span class="sr-only">Loading...</span>
      </div></div>`);
    }
})(jQuery);
