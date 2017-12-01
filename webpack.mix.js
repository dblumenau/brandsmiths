let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset <Management></Management>
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.browserSync('http://brandsmiths.laravel');
mix.sass('resources/assets/sass/app.scss', 'public/css');
mix.sass('resources/assets/sass/admin.scss', 'public/css');
mix.combine([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/foundation-sites/dist/js/foundation.min.js',
    'node_modules/dropzone/dist/dropzone.js',
    'node_modules/scrollreveal/dist/scrollreveal.js',
    'node_modules/slick-lightbox/dist/slick-lightbox.js',
    'node_modules/slick-carousel/slick/slick.js',
], 'public/js/vendor.js');
mix.js('resources/assets/js/app.js', 'public/js/app.js');
mix.sourceMaps();