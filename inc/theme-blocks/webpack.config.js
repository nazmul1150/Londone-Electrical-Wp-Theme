const path = require('path');

module.exports = {
	entry: {
		accordion: path.resolve(__dirname, 'block-accordion/index.js'),
        //'block-two': path.resolve(__dirname, 'block-two/index.js'),
        // আরও ব্লক থাকলে এখানে অ্যাড করো
	},
	output: {
		path: path.resolve(__dirname, 'build'),
		filename: '[name].js'
	},
	module: {
		rules: [
			{
				test: /\.css$/i,
				use: ['style-loader', 'css-loader'],
			}
		]
	}
};


