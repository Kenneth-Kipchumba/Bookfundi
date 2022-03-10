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

mix.js('resources/js/app.js', 'public/assets/js/')
    .js('vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/assets/js/bootstrap')
    .sass('vendor/twbs/bootstrap/scss/bootstrap.scss', 'public/assets/styles/bootstrap')
    .sass('vendor/fortawesome/font-awesome/scss/fontawesome.scss', 'public/assets/styles/fontawesome');
