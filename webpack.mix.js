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


mix.scripts([
    'resources/assets/jquery/jquery.min.js',
    'resources/assets/js/multiform.min.js',
    'resources/assets/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/js/sb-admin-2.min.js',
    'resources/assets/jquery-easing/jquery.easing.min.js',
    'resources/assets/datatables/jquery.dataTables.min.js',
    'resources/assets/datatables/dataTables.bootstrap4.min.js',
    'resources/assets/js/tools.js',
    'resources/assets/js/datatables-demo.js',


], 'public/js/app.js');

mix.styles([
    'resources/assets/css/sb-admin-2.min.css',
    'resources/assets/datatables/dataTables.bootstrap4.min.css',
], 'public/css/app.css');