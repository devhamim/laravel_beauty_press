import "alpinejs";

window._ = require("lodash");
window.Swal = require("sweetalert2");

try {
    window.Popper = require("popper.js").default;
    window.$ = window.jQuery = require("jquery");

    require("bootstrap");
} catch (e) {}

// adminLte
require("./adminLte/js/adminlte");
require("./adminLte/js/demo");

// Boilerplate
require("../plugins");
require("./product_manage");

