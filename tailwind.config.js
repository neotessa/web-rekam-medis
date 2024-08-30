import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        './node_modules/flowbite/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary': {
                '50': '#f5f7fa',
                '100': '#eaeef4',
                '200': '#d0d9e7',
                '300': '#a7b9d2',
                '400': '#7895b8',
                '500': '#5678a1',
                '600': '#435f86',
                '700': '#374d6d',
                '800': '#30415a',
                '900': '#2c394e',
                '950': '#1e2633',
                },
                'secondary' : {
                    '100' : '#F4F9F6',
                    '200' : '#F3F4F6',
                    '300' : '#B8B8B8'
                }
            }
        },
    },

    darkMode: 'class',

    plugins: [
        forms,
        require('flowbite/plugin')({
            charts: true,
        }),
    ],
};
