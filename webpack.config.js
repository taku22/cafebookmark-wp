const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');


module.exports = {
  mode:'development',
  entry: './src/javascripts/index.js',
  output:{
    path:path.resolve(__dirname, './dist'),
    filename: 'javascripts/bundle.js',
  },

  module:{
    rules:[
      {
        test:/\.js/,
        exclude:/node_modules\/(?!(dom7|ssr-window|swiper)\/).*/,
        loader:'babel-loader',
      },
      {
        test:/\.(scss|css)$/,
        use: [
          {
            loader:MiniCssExtractPlugin.loader,
          },
          {
            loader:'css-loader',
          },
          {
            loader:'sass-loader',
          },
        ],
      },
      {
        test: /\.png|\.jpg|\.jpeg/,
        use: [
          {
            loader: 'file-loader',
            options: {
              esModule: false,
              name: 'images/[name].[ext]',
            },
          },
        ],
      },
    ],
  },
  plugins:[
    new MiniCssExtractPlugin({
      filename: './stylesheets/main.css',
    }),
  ],
}
