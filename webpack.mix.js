const mix = require('laravel-mix');

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

mix.setResourceRoot("/public")
    .setPublicPath("public")
    .js("resources/js/chartjs-saham.js", "script")
    // .js("resources/js/temp-chart.js", "script")
    .js("resources/js/idr-currency.js", "script")
    .js("resources/js/step-form.js", "script")
    .sass("resources/sass/app.scss", "css")
    .options({
        processCssUrls: false,
    })
    .sass("resources/sass/styles.scss", "css")
    .options({
        processCssUrls: false,
    })
    // karir scss
    .sass("resources/sass/karir.scss", "css")
    .options({
        processCssUrls: false,
    })
    .sass("resources/sass/saham.scss", "css")
    .options({
        processCssUrls: false,
    })
    .sass("resources/sass/company.scss", "css")
    .options({
        processCssUrls: false,
    })
    .sass("resources/sass/login.scss", "css")
    .options({
        processCssUrls: false,
    });


mix.styles(
    [
        "public/css/app.css",
        "public/css/styles.css",
        "public/css/karir.css",
        "public/css/saham.css",
        "public/css/company.css"
    ], "public/css/main.css"
).version();

mix.scripts(
    [
        "public/script/chartjs-saham.js",
        // "public/script/temp-chart.js",
        "public/script/idr-currency.js",
        "public/script/step-form.js",
    ], "public/script/app.js"
).version();


// Auto Reload Browser
mix.browserSync("127.0.0.1:8080");

// disable notification laravel mix
mix.disableNotifications();

// Enable file versioning for cache invalidation
mix.version();