/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './resources/css/style.css',
        './public/css/style.css',
        "./src/**/*.{html,js}",
        "./node_modules/tw-elements/js/**/*.js",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php'


    ],
    theme: {
        extend: {

            fontFamily: {
            jersey : ["jersey", "sans-serif"] ,
            nunito : ["nunito", "sans-serif"] ,
            cabin  : ["cabin", "sans-serif"],
            lexend  : ["lexend", "sans-serif"],
            signikaNegative  : ["signika-negative", "sans-serif"],
            acmeRegular : ["acme-regular", "sans-serif"],

        }},
    },
    plugins: [require("tw-elements/plugin.cjs")],
}
