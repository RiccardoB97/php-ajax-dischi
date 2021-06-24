let mix = require('laravel-mix');

mix
    .sass('assets/css/app.scss', 'css')
    .copyDirectory('assets/img', 'dist/img')
    .setPublicPath('dist');