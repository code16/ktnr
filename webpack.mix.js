const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw({ open: false })
    .js('source/_assets/js/main.js', 'js')
    .css('source/_assets/css/main.css', 'css', [
        require('postcss-import'),
        require('tailwindcss/nesting'),
        require('tailwindcss'),
    ])
    .browserSync({
        open: false,
        notify: false,
        server: 'build_local',
        files: ['build_*/**'],
    })
    .options({
        processCssUrls: false,
    })
    .version();
