const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.setPublicPath("public")
    .setResourceRoot("../") // Turns assets paths in css relative to css file
    .vue()
    .sass("resources/sass/frontend/app.scss", "css/frontend.css")
    .sass("resources/sass/backend/app.scss", "css/backend.css")
    .js("resources/js/frontend/app.js", "js/frontend.js")
    .js("resources/js/backend/app.js", "js/backend.js")
    .extract([
        "alpinejs",
        "jquery",
        "bootstrap",
        "popper.js",
        "axios",
        "sweetalert2",
        "lodash",
    ])
    .sourceMaps();

if (mix.inProduction()) {
    // mix.combine(
    //     [
    //         "resources/assets/icons/fontAwesome/css/all.css",
    //         "resources/assets/icons/ionicons.min.css",
    //         "resources/assets/icons/themify-icons.css",
    //         "resources/assets/icons/linearicons.css",
    //         "resources/assets/icons/flaticon.css",
    //         "resources/assets/icons/simple-line-icons.css"
    //     ],
    //     "public/css/icons.css"
    // )
    //     .copyDirectory("resources/assets/fonts", "public/fonts/")
    //     .copyDirectory(
    //         "resources/assets/icons/fontAwesome/webfonts",
    //         "public/webfonts/"
    //     )
    //     .version();
    mix.version();
} else {
    // Uses inline source-maps on development
    mix.webpackConfig({
        devtool: "inline-source-map",
    });
}
