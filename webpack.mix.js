const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */


mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copy('node_modules/sweetalert2/dist/sweetalert2.min.js', 'public/js/sweetalert2.min.js')
    .copy('node_modules/sweetalert2/dist/sweetalert2.min.css', 'public/css/sweetalert2.min.css');
