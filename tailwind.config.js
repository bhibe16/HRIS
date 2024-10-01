module.exports = {
  darkMode: 'class',
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
 
 theme: {
    extend: {
      colors: {
        midnightBlueStart: '#161925',
        midnightBlueEnd: '#235789',
        sidebar: '#0F0F0F',
        navbar: '#161925',
      },
      backgroundImage: {
        'midnight-gradient': 'linear-gradient(to right, #161925, #235789)',
      },
      opacity: {
        '65': '0.65',
      },
      fontFamily: {
        roboto: ['Roboto Slab', 'serif'],
      },
    },
  },
  plugins: [
    function({ addComponents }) {
      addComponents({
        '.custom-button': {
          '@apply flex items-center p-2 text-gray-200 rounded-lg dark:text-black hover:bg-gray-600 dark:hover:bg-gray-700': {},
        },
        '.custom-button.group:hover': {
          // Apply hover styles here if needed
        },
        'input:focus': {
          color: '#000000', // Set text color on focus
        },
      });
    },
  ],
};
