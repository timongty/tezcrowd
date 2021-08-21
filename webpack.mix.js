const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-tailwind');
require('laravel-mix-purgecss');


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

// Fonts Files
mix.copyDirectory('resources/assets/fonts', 'public/assets/fonts');

mix.js('resources/assets/js/app.js', 'public/assets/js');
// Default JS Files
mix.js('resources/assets/js/default.js', 'public/assets/js');
mix.js('resources/assets/js/tezos.js', 'public/assets/js');

mix.sass('resources/assets/sass/app.scss', 'public/assets/css', {}, [
    tailwindcss('tailwind.config.js'),
]).options({
    processCssUrls: false,
});
