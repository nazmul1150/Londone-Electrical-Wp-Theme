const defaultConfig = require('@wordpress/scripts/config/webpack.config');
const path = require('path');

module.exports = {
    ...defaultConfig,
    entry: {
        'block-one': path.resolve(__dirname, 'block-one/index.js'),
        // 'block-two': path.resolve(__dirname, 'blocks/block-two/index.js'),
    },
    output: {
        path: path.resolve(__dirname, 'build'),
        filename: '[name].js'
    }
};
