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
        'fade' : 'fade 1s ease',
        'toast' : 'toast 0.5s ease',
      },
      keyframes: {
        fade: {
          '0%' :{opacity: 0},
          '100%' :{opacity: 100},
        },
        toast: {
          '0%' :{opacity: 0, scale: 0, transform: 'translateX(300%)'},
          '100%' :{opacity: 100, scale: 1, transform: 'translateX(0%)'},
        }
      },
    },
  },
  plugins: [],
}
