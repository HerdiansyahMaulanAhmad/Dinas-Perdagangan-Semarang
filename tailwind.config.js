import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                navy: {
                    50: '#f0f4f8',
                    100: '#d9e2ec',
                    200: '#bcccdc',
                    300: '#9fb3c8',
                    400: '#829ab1',
                    500: '#627d98',
                    600: '#486581',
                    700: '#334e68',
                    800: '#243b53',
                    900: '#102a43',
                },
                gold: {
                    50: '#fff9e6',
                    100: '#fff2cc',
                    200: '#ffe699',
                    300: '#ffd966',
                    400: '#ffcc33',
                    500: '#e5b82e',
                    600: '#cca329',
                    700: '#b38f24',
                    800: '#997a1f',
                    900: '#80661a',
                },
            },
        },
    },

    plugins: [forms],
};
