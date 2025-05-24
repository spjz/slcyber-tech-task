/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/js/**/*.{js,vue}',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                'orange': '#E94520',
                'blue': '#1f2937',
                'grey': '#d1d5db',
                'white': '#ffffff',
                'black': '#000000',
            }
        },
    },
    plugins: [],
};

