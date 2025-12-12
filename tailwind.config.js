export default {
  content: [
    "./**/*.php", // scans all PHP files
    "./src/**/*.{js,css}", // if you have JS or CSS in a src folder
  ],
  theme: {
    extend: {
      fontFamily: {
        corben: ['corben', 'sans-serif'], // use as font-shrikhand
        fraunces: ['fraunces', 'sans-serif'],
        poppins: ['Poppins', 'sans-serif'],
        ibmFlexsans: ['IBM Plex Sans', 'sans-serif'],
        raleway: ['raleway', 'sans-serif'],
        inter: ['inter', 'sans-serif'] 
      },
    },
  },
  plugins: [
    function ({ addBase, theme }) {
      addBase({
        '.custom-container': {
          marginLeft: 'auto',
          marginRight: 'auto',
          width: '90%',
        },
        [`@media (min-width: ${theme('screens.md')})`]: {
          '.custom-container': {
            width: '768px',
          },
        },
        [`@media (min-width: ${theme('screens.lg')})`]: {
          '.custom-container': {
            width: '1024px',
          },
        },
        [`@media (min-width: ${theme('screens.xl')})`]: {
          '.custom-container': {
            width: '1200px',
          },
        },
      });
    },
  ],
};
