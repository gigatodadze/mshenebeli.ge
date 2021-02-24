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


//mix.autoload({ 'jquery': ['window.$', 'window.jQuery'] })
mix.js('resources/js/bootstrap.min.js', 'public/js')
mix.js('resources/js/fancybox.min.js', 'public/js')
mix.js('resources/js/isotope.min.js', 'public/js')
mix.js('resources/js/odometer.min.js', 'public/js')
mix.js('resources/js/scripts.js', 'public/js')
mix.js('resources/js/swiper.min.js', 'public/js')
mix.js('resources/js/app.js', 'public/js')
mix.js('resources/js/jquery.min.js', 'public/js')
    .css('resources/css/app.css', 'public/css')
    .css('resources/css/odometer.min.css', 'public/css')
    .css('resources/css/lineicons.css', 'public/css')
    .css('resources/css/style.css', 'public/css')
    .css('resources/css/swiper.min.css', 'public/css')
    .css('resources/css/fancybox.min.css', 'public/css')
    .css('resources/css/bootstrap.min.css', 'public/css')
    .version()
