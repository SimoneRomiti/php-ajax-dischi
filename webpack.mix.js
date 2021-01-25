// webpack.mix.js

let mix = require('laravel-mix');

mix.js('src/app.js', 'js').vue({ version: 2 });
mix.sass('src/style.scss', 'css');
mix.options({
    processCssUrls: false
});
