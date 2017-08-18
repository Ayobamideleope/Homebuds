let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
    .sourceMaps()
    .styles([
        'node_modules/swiper/dist/css/swiper.min.css',
        'node_modules/animate.css/animate.min.css'
    ], 'public/css/vendor.css')
    .sass('resources/assets/sass/app.scss', 'public/css');
// .browserSync('localhost:8000');
// .browserSync({
//     proxy: 'homebuds.dev',
//     online: false,files: [
//                'app/**/*',
// 'public/**/*',
//     'resources/views/**/*',
//     'routes/**/*'
// ]
// });

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
