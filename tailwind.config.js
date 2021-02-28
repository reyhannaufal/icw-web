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
      boxShadow: {
        'neu': ' -4px -4px 7px #1D1D1D, 4px 4px 7px rgba(0, 0, 0, .288)',
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
        competable2: ['#feb8b4'],
        shadow1: ['#1D1D1D'],
        shadow2: ['#040404'],
        captionprize: ['#CBCBCB']
      }
    },
  },
  variants: {
    extend: {
      opacity: ['disabled'],

    },
  },
  plugins: [[
    require('@tailwindcss/forms'), require('@tailwindcss/typography')
  ],],
}


