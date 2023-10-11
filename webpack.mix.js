const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

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
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps()
    .sass('resources/scss/app.scss', 'public/css', [
        //
    ])
    .options({
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .browserSync({
    proxy: "laravel.test",
    port: 3000,
    open: false,
});
