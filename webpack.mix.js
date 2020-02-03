const mix = require('laravel-mix')

mix
    .setPublicPath('dist')
    .js('resources/js/nova-slider.js', 'js')
