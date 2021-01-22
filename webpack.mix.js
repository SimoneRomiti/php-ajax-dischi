// webpack.mix.js

let mix = require('laravel-mix');

mix.sass('src/style.scss', 'css');
mix.options({
    processCssUrls: false
});
