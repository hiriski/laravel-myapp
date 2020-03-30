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


/** Back css */
mix.sass('resources/sass/back/app.scss', 'public/css/back');

/** Front css */
mix.sass('resources/sass/front/app.scss', 'public/css');

/** Front Js */
mix.js('resources/js/app.js', 'public/js');

/** Admin Js */
mix.js('resources/js/admin.js', 'public/js/admin.js');

/** App Vue js (for vue version) */
mix.js('resources/js/app-vue.js', 'public/js/app-vue.js');