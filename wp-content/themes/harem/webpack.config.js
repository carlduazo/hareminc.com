const path    = require('path');
      // Get the project data from package.json
const project = require('./package.json');
const webpack = require('webpack');

const WebpackBar = require('webpackbar');

/**
 * Plugins
 * -------------------------------- */
const ExtractCSSPlugin   = require('mini-css-extract-plugin');
const BrowserSyncPlugin  = require('browser-sync-webpack-plugin');
const SpriteLoaderPlugin = require('svg-sprite-loader/plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const CopyPlugin         = require('copy-webpack-plugin');
const StyleLintPlugin    = require('stylelint-webpack-plugin');
const NotifierPlugin     = require('webpack-notifier');
// const ESLintWebpackPlugin = require('eslint-webpack-plugin');

/**
 * Base config
 * -------------------------------- */
module.exports = (env = {}) => {
  // Check if current build is a production build
  const isDist = env.production || false;

  const config = {
    // This config is in the scope of the assets folder
    context: path.resolve(__dirname, 'assets'),
    entry: {
      // Vendor entry point vendor/index.js
      vendor: './vendor',
      // Main entry point is dev/index.js
      app: './dev'
    },
    output: {
      // Entry points are outputted to dist/js folder
      filename: '[name].js',
      path: path.resolve(__dirname, 'assets/dist')
    },
    // Rules are added below
    module: { rules: [] },
    plugins: [
      // Clean the dist folder on every new build, but not on a filechange
      // during watch.
      new CleanWebpackPlugin({
          cleanOnceBeforeBuildPatterns: ['assets/dist'],
          // verbose: false
      }),
      // Copy the complete public folder in to dist
      new CopyPlugin({
        patterns:[
          { from: './public', to: '../' }
        ]
      }),
      // Init ESLint plugin
      // new ESLintWebpackPlugin({
      //   extensions: [`js`, `jsx`, `ts`],
      //   exclude: [`./node_modules`],
      // }),
      new WebpackBar(),
      new webpack.ProvidePlugin({
        $: 'jquery',
        jQuery: 'jquery',
        'window.jQuery': 'jquery'
      })
    ],
    // Set source map type
    devtool: isDist ? false : 'source-map',
    // This config assumes jQuery is loaded seperately
    externals: { jquery: 'jQuery' },
    // Set logging to be simple
    stats: { children: false },
    // Mode based on env.prod
    mode: isDist ? 'production' : 'development'
  };


  /**
   * JavaScript
   * -------------------------------- */
  config.module.rules.push({
    test: /\.js$/,
    exclude: [
      path.resolve(__dirname, 'node_modules')
    ],
    use: [
      // Babel for compiling JavaScript. Config located in .babelrc
      { loader: 'babel-loader' }
    ]
  });

  // Plugins
  // config.plugins.push();

  /**
   * CSS
   * -------------------------------- */

  // Loaders
  config.module.rules.push({
    test: /\.s?css$/,
    use: [
      ExtractCSSPlugin.loader,
      {
        loader: 'css-loader',
        options: { sourceMap: true }
      }, {
        // PostCSS modifications. Config located in postcss.config.js.
        loader: 'postcss-loader',
        options: { sourceMap: true }
      }, {
        // Compile SCSS to CSS
        loader: 'sass-loader',
        options: { sourceMap: true }
      }
    ]
  });

  // Plugins
  config.plugins.push(
    // Extract CSS in to seperate file and output to dist/css folder
    new ExtractCSSPlugin({ filename: '[name].css' }),
    new StyleLintPlugin({
      extensions: 'scss',
      files: ['assets/scss']
    })
  );


  /**
   * PHP
   * -------------------------------- */
  config.module.rules.push({
    test: /\.php$/,
    // PHP files should be outputted to dist/lib folder
    loader: 'file-loader',
    options: {
      name: '[name].[ext]'
    }
  });


  /**
   * Bootstrap Native loader
   * -------------------------------- */
  config.module.rules.push({
    test: /bootstrap\.native/,
    use: {
      loader: 'bootstrap.native-loader',
      options: {
        ignore: ['alert', 'button', 'carousel', 'modal', 'popover', 'scrollspy', 'tab', 'tooltip']
      }
    }
  });


  /**
   * Icons
   * -------------------------------- */

  // Loaders
  config.module.rules.push({
    test: /\.svg$/,
    // Build icon sprite from dev/icons/index.js
    include: path.resolve(__dirname, 'assets/dev/icons'),
    use: [
      {
        // Build the sprite
        loader: 'svg-sprite-loader',
        options: {
          extract: true,
          spriteFilename: 'icons-sprite.svg'
        }
      }, {
        // Optimize images
        loader: 'image-webpack-loader',
        options: { bypassOnDebug: true }
      }
    ]
  });

  // Plugins
  config.plugins.push(
    // Create icon sprite
    new SpriteLoaderPlugin({ plainSprite: true })
  );


  /**
   * Image
   * -------------------------------- */

  // Loaders
  config.module.rules.push({
    test: /\.(png|jpe?g|gif|svg)$/,
    // Exclude the icons folder, because it has a seperate loader
    exclude: path.resolve(__dirname, 'assets/dev/icons'),
    use: [
      {
        // Inline if file is smaller than 8Kb,
        // else output to dist/images folder
        loader: 'url-loader',
        options: {
          limit: 8192,
          name: '[name].[ext]'
        }
      }, {
        // Optimize images
        loader: 'image-webpack-loader',
        options: { bypassOnDebug: true }
      }
    ]
  });


  /**
   * Fonts
   * -------------------------------- */
  config.module.rules.push({
    test: /\.(eot|ttf||woff|woff2)$/,
    // Inline if file is smaller than 8Kb,
    // else output to dist/fonts folder
    loader: 'url-loader',
    options: {
      limit: 8192,
      name: '[name].[ext]'
    }
  });


  /**
   * Development only config
   * -------------------------------- */
  if (!isDist) {
    config.plugins.push(
      new NotifierPlugin({
        title: 'BillieBot says:',
        contentImage: 'https://assets.egm-media.com/billiepress/billiepress-logo-webpack-notifier.png'
      }),
      // BrowserSync config
      new BrowserSyncPlugin({
        // Also watches all PHP files
        files: ['./**/*.php'],
        // Proxy localhost url
        proxy: 'http://localhost:8888/',
        port: 3000,
        // Do not open a new browser window on start
        open: false
      })
    );
  }

  // Return config object
  return config;
};
