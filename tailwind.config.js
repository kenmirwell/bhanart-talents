/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.php",                     // WordPress theme files
    "./src/**/*.{js,jsx,ts,tsx}",     // React/Vite components
    "./src/**/*.{css}",               // Any custom CSS
    "./*.{html,js,php}",              // Root files
  ],
  theme: {
    extend: {
      fontFamily: {
        corben: ['corben', 'sans-serif'],
        fraunces: ['fraunces', 'sans-serif'],
        poppins: ['Poppins', 'sans-serif'],
        ibmFlexsans: ['IBM Plex Sans', 'sans-serif'],
        raleway: ['raleway', 'sans-serif'],
        inter: ['inter', 'sans-serif'],
      },
    },
  },
  plugins: [
    ({ addComponents }) => {
      addComponents({
        '.custom-container': {
          marginLeft: 'auto',
          marginRight: 'auto',
          width: '90%',
          '@screen md': {
            width: '768px',
          },
          '@screen lg': {
            width: '1024px',
          },
          '@screen xl': {
            width: '1280px',
          },
        },
      })
    },
  ],
};
