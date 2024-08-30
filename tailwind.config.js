import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],
    darkMode: "class",
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // Color main
                "color-main": "#EAE9E5",
                "color-home": "#008689",
                "color-text": "#2f4858",
                "color-box": "#F3F4F6",
                "color-btn": "#008689",

                "color-dark": "#2f4858",
                "color-home-dark": "#2f4858",
                "color-text-dark": "#f1f1e6",
                "color-box-dark": "#374151",
                "color-btn-dark": "#EAE9E5",
            },
            spacing: {
                // Padding main
                "size-desk": "112px",
                "size-tablet": "30px",
                "size-mobile": "18px",
            },
        },
    },

    plugins: [forms],
};
