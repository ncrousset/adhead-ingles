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
        'login-img': "url('/img/login.jpg')",
       })
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
