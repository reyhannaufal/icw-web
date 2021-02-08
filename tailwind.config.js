module.exports = {
  important: true,
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily:{
        body: ['Poppins']
      },
      screens: {
        'mdl': '809px',
        'vsm': '300px',
        'largemin': '955px'
      },

      colors: {
        bgnav:['#F5FAFF'],
        bgsection:['#121212'],
        table: ['#171848']
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
