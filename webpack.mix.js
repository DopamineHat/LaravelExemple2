const mix = require('laravel-mix');
var fs = require('fs');

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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

mix.copy('resources/assets/js/', 'public/js/');
mix.copy('resources/assets/fonts/', 'public/fonts/');
mix.copy('resources/assets/images/', 'public/images/');
mix.copy('resources/assets/css/', 'public/css/');

mix.scripts(
     [ 
     'resources/assets/js/sweetalert2.js',
     ],      'public/js/app.js'
    );