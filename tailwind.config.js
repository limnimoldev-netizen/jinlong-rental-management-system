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
                primary: ''#9b8384,
                secondary: '#f6f4f0',
            },
            fontFamily: {
                sans: ['Roboto', 'sans-serif'],
            },
        },
    },

    plugins: [],
};