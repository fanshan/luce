const path = require("path");
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const webpack = require('webpack');

const extractSass = new ExtractTextPlugin("main.css");
const extractCss = new ExtractTextPlugin("style.css");

module.exports = {
    entry: "./front/app.js",
    output: {
        path: path.resolve(__dirname, "./public/dist"),
        filename: "build.js"
    },
    module: {
        rules: [
            {
                test: /\.(css)$/,
                use: extractCss.extract(['css-loader'])
            },
            {
                test: /\.(scss)$/,
                use: extractSass.extract({
                    fallback: 'style-loader',
                    use: [
                        'css-loader',
                        {
                            loader: 'postcss-loader',
                            options: {
                                plugins: function () {
                                    return [
                                        require('precss'),
                                        require('autoprefixer')
                                    ];
                                }
                            }
                        },
                        'sass-loader'
                    ]
                })
            }
        ]
    },
    plugins: [
        /*new webpack.ProvidePlugin({
            jQuery: 'jquery',
            $: 'jquery'
        })*/
        extractCss,
        extractSass
    ]
};
