let mix = require('laravel-mix');
let build = require('./tasks/build.js');
require('laravel-mix-purgecss');

// mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss', '!source/**/_tmp/*']),
    ]
});

mix.js('source/_assets/js/app.js', 'js/app.js')
    .sass('source/_assets/sass/app.scss', 'css/app.css')
    .options({
        processCssUrls: false,
        postCss: [ require('tailwindcss')('./tailwind.js') ],
    })
    .purgeCss({
        folders: ['source'],
    })
    .version();
