/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
      keyframes:{
        showcase:{
          '0%':{
            opacity:0,
          },
          '100%':{
            opacity:1,
          }
        }
      },
      animation:{
        showcase:'showcase 1s ease-in-out',
      }
    },
  },
  plugins: [],
}

