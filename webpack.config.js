const path = require('path');
var webpack = require('webpack');

const { VueLoaderPlugin } = require('vue-loader')
module.exports = {
    entry: './src/index.js',
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: 'bundle.js'
    },
    resolve: {
        alias: {},
    },
    module: {
        rules: [
            // any other rules
            {
                // Exposes jQuery for use outside Webpack build
                test: require.resolve('jquery'),
                use: [{
                    loader: 'expose-loader',
                    options: 'jQuery'
                }, {
                    loader: 'expose-loader',
                    options: '$'
                }],

            },
            {
                test: /\.vue$/,
                loader: 'vue-loader'
            },
            {
                test: /\.js$/,
                loader: 'babel-loader'
            },
            // this will apply to both plain .css files
            // AND <style> blocks in vue files
            {
                test: /\.css$/,
                use: [
                    'vue-style-loader',
                    'css-loader'
                ]
            },
        ]
    },
    plugins: [
        // Provides jQuery for other JS bundled with Webpack
        new webpack.ProvidePlugin({
            'window.jQuery': 'jquery',
            'window.$': 'jquery',
            jQuery: 'jquery',
            $: 'jquery',
        }),
        new VueLoaderPlugin()

    ]

};