import * as webpack from 'webpack';
import ExtractTextPlugin from 'extract-text-webpack-plugin';

const extractScss = new ExtractTextPlugin({filename: 'baldr.min.css'});
const config = {
  entry: './src/js/baldr.js',
  output: {
    path: __dirname + '/dist',
    filename: 'baldr.min.js'
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: [
          {loader: 'babel-loader'}
        ]
      },
      {
        test: /\.scss$/,
        use: ExtractTextPlugin.extract({
          fallback: 'style-loader',
          use: ['css-loader', 'sass-loader']
        })
      }
    ]
  },
  plugins: [extractScss]
}

export default config;
