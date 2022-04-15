module.exports = {
  content: [
    "**/*.html"
  ],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    container: {
      center: true
    },
    extend: {
      fontFamily: {
        'body': "'Inter', sans-serif"
      },
      spacing: {
        '75': '18.75rem'
      },
      colors: {
        purple: '#8C30F5'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}