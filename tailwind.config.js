import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
<<<<<<< HEAD
module.exports = {
  content: [
    // "./src/**/*.{html,js}",
    // "./*.html",  
    // "./**/*.js",
    "./**/*.blade.php",
    // "./**/*.php",
   "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        primary: "#0C4B6E",
        secondary: "#D9D9D9",
        third:"#3E00FF"
      },
      fontFamily: {
      'poppins': ['Poppins',  'sans-serif'],
      'roboto': ['Roboto'],
      }
=======
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
>>>>>>> 39d8e070d9be545c57cbdcab4c72afc20d9e69f6

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
