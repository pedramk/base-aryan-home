import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'selector',
    content: [
        // './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        // './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        screens: {
            'sm': '640px',
            'md': '768px',
            'lg': '768px',
            'xl': '768px',
            '2xl': '768px',
        },
        extend: {
            fontFamily: {
                sans: ['IRANYekan', 'Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
