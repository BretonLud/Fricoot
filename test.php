{
                test:/\.scss$/,
                use:[
                    'style-loader',
                    {   loader: 'css-loader', options: { importLoaders: 1 } },
                    {
                        loader: "postcss-loader",
                        options: {                    
                            plugins: (loader) =>[
                                require('autoprefixer')({
                                    browers: ['last 2 versions', 'ie > 8']
                                }),  
                            ]
                  
                        }
                    },
                    'sass-loader'