const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .copy('resources/sass/vendor/animate.css', 'public/css/animate.css')
    .sass('resources/sass/app.scss', 'public/css');

if (mix.inProduction()) {
    mix.version();
}
