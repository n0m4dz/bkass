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

mix
//POST module
    .sass('modules/post/assets/scss/app.scss', 'public/css/post.css')
    .js('modules/post/assets/js/app.js', 'public/js/post.js')

    //Application
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/pages/home.scss', 'public/css/home.css')

    //Scripts
    .js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/spa.js', 'public/js')
