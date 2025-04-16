const path = require('path')
const { VueLoaderPlugin } = require('vue-loader')

module.exports = (env, argv) => {
	const isProduction = argv.mode === 'production'

	return {
		entry: './src/main.js', // Entry point inside vueapp/src/

		output: {
			// Output to Twenty Twenty-Four's assets/js directory
			path: path.resolve(__dirname, '../assets/js'), // Correct path relative to vueapp
			filename: 'vueapp.bundle.js', // Specific name for your app bundle
			publicPath: `/wp-content/themes/twentytwentyfour/assets/js/`, // Public path for the theme
			clean: false,
		},

		module: {
			rules: [
				{
					test: /\.vue$/,
					loader: 'vue-loader',
				},
				{
					test: /\.js$/,
					exclude: /node_modules/,
					use: {
						loader: 'babel-loader',
					},
				},
				{
					// This handles CSS imported directly into JS or via <style> blocks WITHOUT lang="scss"
					test: /\.css$/,
					use: ['vue-style-loader', 'css-loader'],
				},
				{
					// **This handles SCSS/SASS** (imported or in <style lang="scss"> blocks)
					test: /\.s[ac]ss$/i, // Matches .scss or .sass
					use: [
						'vue-style-loader', // Injects styles into DOM
						'css-loader', // Translates CSS into CommonJS
						'sass-loader', // Compiles Sass to CSS
					],
				},
			],
		},

		plugins: [new VueLoaderPlugin()],

		resolve: {
			alias: {
				vue$: 'vue/dist/vue.esm-bundler.js',
			},
			extensions: ['.js', '.vue', '.json', '.scss'], // Added .scss
		},

		devtool: isProduction ? 'source-map' : 'eval-source-map',
		mode: argv.mode || 'development',
	}
}
