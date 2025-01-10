import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],

  theme: {
    extend: {
      colors: {
        primary: '#519652',
        light: '#FBFCF8',
        dark: '#262424',
        red: '#8D2016',
        input: '#F6F6F6',
        yellow: '#F1B24A',
        'lime-green': '#9DC88D',
        'moss-green': '#A2B568',
        'light-gray': '#f1f1f1',
        'border-color': '#E0E0E0' ,
      },
      spacing: {
        'logo': '5rem', // Custom size for logo (width & height)
        'icon': '2rem', // Custom size for icons (width & height)
      },
      fontFamily: {
        sans: ['Poppins', ...defaultTheme.fontFamily.sans],
      },
      boxShadow: {
        'small': '0 3px 6px rgba(0, 0, 0, 0.20)',
        'big': '0 8px 8px rgba(0, 0, 0, 0.25)',
      },
    },
  },

  plugins: [
    forms,
    function ({ addComponents }) {
      addComponents({
        '.font-header': {
          fontWeight: '600',
          color: '#164A41',
          fontSize: '1.6rem',
        },
      });
    },
  ],
};
