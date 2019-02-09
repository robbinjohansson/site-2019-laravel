let mix = require('laravel-mix');
let build = require('./tasks/build.js');
require('laravel-mix-purgecss');

// mix.disableSuccessNotifications();
mix.setPublicPath('source/assets');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss', '!source/**/_tmp/*']),
    ]
});

mix.js('source/_assets/js/app.js', 'js/app.js')
    .postCss('source/_assets/css/app.css', 'css/app.css')
    .options({
        postCss: [
            require('postcss-import')(),
            require('tailwindcss')('./tailwind.js'),
            require('postcss-nesting')(),
        ],
    })
    .purgeCss({
        folders: ['source'],
    })
    .version();
