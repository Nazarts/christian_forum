const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
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
            keyframes: {
                textTranslate: {
                    '0%': {left: '100%'},
                    '100%': {left: '-400%'}
                },
                underlineText: {

                }
            },
            animation: {
                textTranslate: 'textTranslate 14s linear infinite running',
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
