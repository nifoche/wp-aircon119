/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		'./*.php',
		'./template-parts/**/*.php',
		'./inc/**/*.php',
		'./assets/js/**/*.js',
	],
	safelist: [ 'h-40', 'h-24', 'overflow-y-auto', 'bg-gray-200', 'bg-white', 'border-gray-300', 'bg-gray-100', 'p-3', 'text-red-500', 'space-y-4', 'rounded-sm' ],
	theme: {
		extend: {
			colors: {
				brand: {
					navy: '#16374F',
					orange: '#FF681F',
					sky: '#1A4E7A',
					skydeep: '#16374F',
					fire: '#FF681F',
					firedeep: '#D8480A',
					ink: '#16374F',
					blue: '#1A4E7A',
					cream: '#FFF7F3',
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
