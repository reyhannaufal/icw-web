const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
  important: true,
  purge: [
    './vendor/laravel/jetstream/**/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily:{
        body: ['Poppins'],
        sans: ['Nunito', ...defaultTheme.fontFamily.sans],
      },
      screens: {
        'mdl': '809px',
        'vsm': '300px',
        'largemin': '955px',
        'xlplus': ['1282px']
      },

      colors: {
        bgnav:['#F5FAFF'],
        bgsection:['#121212'],
        table: ['#171848'],
        dashboard: ['#c5e7dd'],
        competable1: ['#ffdfaf'],
        competable2: ['#feb8b4']
      }
    },
  },
  variants: {
    extend: {
      opacity: ['disabled'],

    },
  },
  plugins: [[require('@tailwindcss/forms'), require('@tailwindcss/typography')],],
}


