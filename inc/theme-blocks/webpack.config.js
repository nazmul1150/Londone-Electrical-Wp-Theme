const defaultConfig = require('@wordpress/scripts/config/webpack.config');
const path = require('path');

module.exports = {
	...defaultConfig,
	mode: 'development', // optional, but useful
	entry: {
		accordion: path.resolve(__dirname, 'accordion/index.js'),
	},
	output: {
		path: path.resolve(__dirname, 'build'),
		filename: '[name].js',
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				use: {
					loader: 'babel-loader',
					options: {
						presets: ['@babel/preset-env', '@babel/preset-react'],
					},
				},
			},
			{
				test: /\.css$/i,
				use: ['style-loader', 'css-loader'],
			},
		],
	},
	// externals: {
	// 	'@wordpress/blocks': ['wp', 'blocks'],
	// 	'@wordpress/block-editor': ['wp', 'blockEditor'],
	// 	'@wordpress/element': ['wp', 'element'],
	// 	'@wordpress/components': ['wp', 'components'],
	// },
};
