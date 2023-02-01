/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      animation: {
        'fade' : 'fade 1s ease'
      },
      keyframes: {
        fade: {
          '0%' :{opacity: 0},
          '100%' :{opacity: 100},
        }
      },
    },
  },
  plugins: [],
}
