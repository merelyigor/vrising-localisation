const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const TerserPlugin = require('terser-webpack-plugin');

module.exports = {
    mode: 'development',
    entry: './src/js/main.js',
    output: {
        filename: 'main.min.js',
        path: path.resolve(__dirname, 'assets'),
    },

    module: {
        rules: [
            {
                test: /\.css$/,
                include: path.resolve(__dirname, 'src/css'),
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                ],
            },
        ],
    },

    plugins: [
        new MiniCssExtractPlugin({
            filename: 'style.min.css',
        }),
    ],

    optimization: {
        minimizer: [
            new CssMinimizerPlugin(), // Оптимізатор мініфікації CSS
            new TerserPlugin(), // Оптимізатор мініфікації JS
        ],
    },

    watch: true
};
