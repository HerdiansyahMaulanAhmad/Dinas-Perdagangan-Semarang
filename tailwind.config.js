import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                primary: '#1e3a8a', // Navy Blue
                secondary: '#b45309', // Gold/Dark Amber
                navy: {
                    50: '#f0f4f8',
                    100: '#d9e2ec',
                    500: '#334e68',
                    800: '#102a43',
                    900: '#0b1d30',
                },
                gold: {
                    400: '#ffdb58',
                    500: '#daa520',
                    600: '#b8860b',
                },
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
