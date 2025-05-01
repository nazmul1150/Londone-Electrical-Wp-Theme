const defaultConfig = require('@wordpress/scripts/config/webpack.config');
const path = require('path');

module.exports = {
	...defaultConfig,
	mode: 'development', // optional, but useful
	entry: {
		accordion: path.resolve(__dirname, 'accordion/index.js'),
		heroslider: path.resolve(__dirname, 'hero-slider/index.js'),
		heroctabox: path.resolve(__dirname, 'hero-cta-box/index.js'),
		aboutus: path.resolve(__dirname, 'about-us/index.js'),
		ourservices: path.resolve(__dirname, 'our-services/index.js'),
		ourawards: path.resolve(__dirname, 'our-awards/index.js'),
		ourfeatures: path.resolve(__dirname, 'our-features/index.js'),
		ourgoals: path.resolve(__dirname, 'our-goals/index.js'),
		ourfacts: path.resolve(__dirname, 'our-facts/index.js'),
		ctabox: path.resolve(__dirname, 'cta-box/index.js'),
		ourtestimonial: path.resolve(__dirname, 'our-testimonial/index.js'),
		ourfaqs: path.resolve(__dirname, 'our-faqs/index.js'),
		ourblog: path.resolve(__dirname, 'our-blog/index.js'),
		ourpricing: path.resolve(__dirname, 'our-pricing/index.js'),
		breadcrumb: path.resolve(__dirname, 'breadcrumb/index.js'),
		ourapproach: path.resolve(__dirname, 'our-approach/index.js'),
		trustedexpert: path.resolve(__dirname, 'trusted-expert/index.js'),
		whychooseus: path.resolve(__dirname, 'why-choose-us/index.js'),
		ourteam: path.resolve(__dirname, 'our-team/index.js'),
		companyvalues: path.resolve(__dirname, 'company-values/index.js'),
		contactus: path.resolve(__dirname, 'contact-us/index.js'),
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
