let mix = require('laravel-mix');


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

const VueLoaderPlugin = require('vue-loader/lib/plugin')



//mix.js('resources\\js\\app.js', 'public/js').vue();
mix.js('resources/js/app.js', 'public/js')
    .vue();
mix.postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
]);
mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'], // more than one
    moment: 'moment' // only one
});
mix.webpackConfig(webpack => {
    return {
        plugins: [
            new webpack.ProvidePlugin({
                $: 'jquery',
                jQuery: 'jquery',
                'window.jQuery': 'jquery',
            }),
            new VueLoaderPlugin()
        ]
    };
});