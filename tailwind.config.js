const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors:{
                'gary-background': '#f7f8fc',
                inherit: colors.inherit,
                current: colors.current,
                transparent: colors.transparent,
                black: colors.black,
                white: colors.white,
                slate: colors.slate,
                gray: colors.trueGray,
                zinc: colors.zinc,

            },
            maxWidth:{
                custom: '62.5rem',

            },
            spacing:{
                22: '5.5rem',
                70: '17.5rem',
                175: '43.75rem'
            },
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
            fontSize:{
                xxs: ['0.625rem', {lineHeight: '1rem'}]
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp')

    ],
};
