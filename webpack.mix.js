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


mix.styles([
    'resources/assets/plantilla/css/adminlte.css',


], 'public/css/plantilla.css')
mix.scripts([

    'resources/assets/plantilla/plugins/jquery/jquery.min.js',
    'resources/assets/plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/plugins/fastclick/fastclick.js',

    'resources/assets/plantilla/js/adminlte.min.js',
    'resources/assets/plantilla/js/demo.js',

    'resources/assets/plantilla/js/sweetalert2.all.min.js',




], 'public/js/plantilla.js')
    .js(['resources/assets/js/app.js'], 'public/js/app.js');