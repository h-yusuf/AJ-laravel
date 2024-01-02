import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    // "./src/**/*.{html,js}",
    // "./*.html",  
    // "./**/*.js",
    "./**/*.blade.php",
    // "./**/*.php",
   "./node_modules/flowbite/**/*.js",
   './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
   './storage/framework/views/*.php',
   './resources/views/**/*.blade.php',
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
    },
    },

    plugins: [
      require('flowbite/plugin')
  ],
};
