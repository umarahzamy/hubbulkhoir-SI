/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                // sans: ["Poppins", "Arial", "sans-serif"],
                // display: ["Bebas Neue", "cursive"],
            },
        },
    },
    plugins: [],
};
