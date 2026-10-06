/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		'./*.php',
		'./template-parts/**/*.php',
		'./inc/**/*.php',
		'./assets/js/**/*.js',
	],
	safelist: [ 'h-40', 'h-24', 'overflow-y-auto', 'bg-gray-200', 'bg-white', 'border-gray-300', 'bg-gray-100', 'p-3', 'text-red-500', 'space-y-4', 'rounded-sm', 'bg-[#fe9a00]', 'hover:bg-[#e78d00]', 'bg-[#0084d1]', 'hover:bg-[#0076bc]' ],
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
