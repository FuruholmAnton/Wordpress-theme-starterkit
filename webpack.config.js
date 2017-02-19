const path = require('path');
// const webpack = require('webpack');
module.exports = {
  context: path.resolve(__dirname, './assets'),
  entry: {
    main: './js/main.js',
  },
  output: {
    path: path.resolve(__dirname, './assets/js/dist'),
    filename: '[name].bundle.js',
  },

  module: {
    loaders: [
      {
        test: /\.js$/,
        exclude: /(node_modules|bower_components)/,
        loader: 'babel-loader',
        query: {
          presets: ['es2015']
        }
      }
    ]
  },
};
