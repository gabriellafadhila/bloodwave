/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/*/.blade.php",
    "./resources/*/.js",
    "./resources/*/.vue",
    './pages/**/*.{html,js}',
    './components/**/*.{html,js}',
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'cream': {
          dark: '#DAD4B5',
          medium: '#F2E8C6',
        },
        'red': {
          dark: '#952323',
          medium: '#A73121',
        },
        },
        fontFamily: {
          'poppins': ['Poppins', 'sans-serif']
        }
  
  },
  plugins: [],
    },
  }