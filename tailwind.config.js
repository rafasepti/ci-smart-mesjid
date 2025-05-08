/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      './app/Views/**/*.php',
      './node_modules/flowbite/**/*.js'
    ],
    theme: {
      extend: {
        colors: {
          primary: {
            blue: '#4976a6',
            "blue-200": '#3f5291',
            yellow: '#ffb155',
          }
        }
      },
    },
    plugins: [
      require('flowbite/plugin')
    ],
  }
  