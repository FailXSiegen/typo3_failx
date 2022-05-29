// Webpack uses this to work with directories
const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const RemoveEmptyScriptsPlugin = require("webpack-remove-empty-scripts");
const CopyWebpackPlugin = require('copy-webpack-plugin');

// This is the main configuration object.
// Here, you write different options and tell Webpack what to do
module.exports = {
    module: {
        generator: {

        },
        rules: [
            {
                test: /\.js$/,
                exclude: /(node_modules)/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            },
            {
                // Apply rule for .sass, .scss or .css files
                test: /\.scss$/,

                // Set loaders to transform files.
                // Loaders are applying from right to left(!)
                // The first loader will be applied after others
                use: [
                    {
                        // After all CSS loaders, we use a plugin to do its work.
                        // It gets all transformed CSS and extracts it into separate
                        // single bundled file
                        loader: MiniCssExtractPlugin.loader,
                        options: {
                            publicPath: '../',
                        }
                    },
                    {
                        loader: "css-loader",
                        options: {
                            sourceMap: true
                        }
                    },
                    {
                        // First we transform SASS to standard CSS
                        loader: "sass-loader",
                        options: {
                            sourceMap: true
                        }
                    }
                ]
            },
            {
                test: /\.svg$/,
                type: "asset/inline",
                // Inline assets with the "inline" query parameter.
                resourceQuery: /inline/,
            },
            // {
            //     // Now we apply rule for images
            //     test: /\.(png|jpe?g|gif)$/,
            //     use: [
            //         {
            //             // Using file-loader for these files
            //             loader: "file-loader",

            //             // In options we can set different things like format
            //             // and directory to save
            //             options: {
            //                 name: 'Images/[name].[ext]'
            //             }
            //         }
            //     ]
            // },
            {
                // Apply rule for fonts files
                test: /\.(woff|woff2|ttf|otf|eot)$/,
                use: [
                    {
                        // Using file-loader too
                        loader: "file-loader",
                        options: {
                            name: '[name].[ext]',
                            outputPath: 'fonts/'
                        }
                    }
                ]
            }
        ],
    },
    plugins: [
        require('autoprefixer'),
        require('cssnano'),
        new RemoveEmptyScriptsPlugin(),
        new MiniCssExtractPlugin({
            filename: 'StyleSheet/[name].css'
        }),
        new CopyWebpackPlugin({
            patterns: [
                {
                    from: './../../Public/Vendor/bootstrap/dist/js/bootstrap.bundle.min.js',
                    to: 'JavaScript/'
                },
                {
                    from: './../../Public/Vendor/glightbox/dist/js/glightbox.min.js',
                    to: 'JavaScript/'
                }
            ]
        })
        // More postCSS modules here if needed
    ],
    // Path to your entry point. From this file Webpack will begin its work
    entry: {
        'javascript': './src/javascript/index.js',
        'abovethefold': './src/scss/above-the-fold.scss',
        'accordion': './src/scss/accordion.scss',
        'main': './src/scss/main.scss',
        'glightboxcss': './src/scss/glightbox.scss',
    },

    // Path and filename of your result bundle.
    // Webpack will bundle all JavaScript into this file
    output: {
        path: path.resolve(__dirname, '../../Public/'),
        publicPath: '',
        filename: 'JavaScript/[name].js'
    },

    // Default mode for Webpack is production.
    // Depending on mode Webpack will apply different things
    // on the final bundle. For now, we don't need production's JavaScript 
    // minifying and other things, so let's set mode to development
    mode: process.env.NODE_ENV === 'production' ? 'production' : 'development',
};