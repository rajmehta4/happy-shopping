let mix = require('laravel-mix');

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

//mix.js('resources/assets/js/app.js', 'public/js')
// .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
  'resources/assets/css/bootstrap.css',
  'resources/assets/css/fontawesome.css',
  'resources/assets/css/pstyle.css',
  'resources/assets/css/skdslider.css'
], 'public/css/product.css');


mix.js([
  'resources/assets/js/product/bootstrap.min.js',
  'resources/assets/js/product/easing.js',
  'resources/assets/js/product/jquery-1.11.1.min.js',
  'resources/assets/js/product/minicart.min.js',
  'resources/assets/js/product/move-top.js',
  'resources/assets/js/product/responsiveslides.min.js',
  'resources/assets/js/product/skdslider.min.js'
], 'public/js/product.js');
