const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const dev = process.env.NODE_ENV === "dev"

module.exports = {
    entry: './src/index.js',
    watch: dev,
    output: {
        path: path.resolve('./dist'),
            filename: 'main.js'
    },
    module: {
        rules:[
            {
                test:/\.js$/,
                exclude: /(node_modules|bower_components)/,
                use:{
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            },            
            {
                test: /\.scss$/,
                use: [
                  // fallback to style-loader in development
                  process.env.NODE_ENV === dev
                    ? 'style-loader'
                    : MiniCssExtractPlugin.loader,
                  'css-loader',
                  'sass-loader'
                ],
            },  
        ],
        
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: '../css/style.css',           
        }),
    ],
};