/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
                'dark-gray': '#171717',
                'light-gray': '#BBBBBB',
                'superLight-blue': '#DDE6ED',
            }
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}

