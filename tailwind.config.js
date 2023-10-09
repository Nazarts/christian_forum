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
                    '0%': {transform: 'translateX(120%)'},
                    '10%': {transform: 'translateX(100%)'},
                    '100%': {transform: 'translateX(-150%)'}
                },
                underlineText: {
                    
                }
            },
            animation: {
                textTranslate: 'textTranslate 16s linear infinite',
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
