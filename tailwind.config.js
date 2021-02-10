module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        primary: '#37bfae',
        'primary-dark': '#39ad9f',
        secondary: '#e3cf41',
        third: '#e34155',
      },
      backgroundImage: theme => ({
        'login-img': "url('/svg/bglogin.svg')",
        'login-img-a': "url('/svg/bglogina.svg')",
        'svg-discos': "url('/svg/discos.svg')",
       }),
       backgroundSize: {
         'auto': 'auto',
         'cover': 'cover',
         'contain': 'contain',
         '200%': '200%',
         '16': '4rem',
       }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
