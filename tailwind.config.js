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
    function ({ addComponents, theme }) {
      addComponents({
        '.custom-container': {
          marginLeft: 'auto',
          marginRight: 'auto',
          width: '90%',
          [`@media (min-width: ${theme('screens.md')})`]: {
            width: '768px',
          },
          [`@media (min-width: ${theme('screens.lg')})`]: {
            width: '1024px',
          },
          [`@media (min-width: ${theme('screens.xl')})`]: {
            width: '1200px',
          },
        },
      });
    },
  ],
};
