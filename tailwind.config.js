/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		'./*.php',
		'./template-parts/**/*.php',
		'./inc/**/*.php',
		'./assets/js/**/*.js',
	],
	safelist: [ 'h-40', 'overflow-y-auto' ],
	theme: {
		extend: {
			colors: {
				brand: {
					navy: '#00598a',
					orange: '#fe9a00',
					sky: '#0084d1',
					skydeep: '#0069a8',
				},
			},
			boxShadow: {
				header: '0 25px 50px -12px rgba(0, 0, 0, 0.25)',
			},
			fontFamily: {
				sans: [
					'"Noto Sans JP"',
					'ui-sans-serif',
					'system-ui',
					'sans-serif',
				],
			},
		},
	},
	plugins: [ require( '@tailwindcss/typography' ) ],
};
