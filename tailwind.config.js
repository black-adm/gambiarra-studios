/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ], theme: {
    extend: {
      colors: {
        'primary-orange': '#ff8700',
        'light-orange': '#ff9e01',
        'primary-blue': '#000d3c',
        'light-blue': '#007bff',
        'primary-black': '#161616',
        'primary-gray': '#6a6c72',
        'gray-white': '#f2f4f7',
        'primary-red': '#c00',
      }
    },
  },
  plugins: [],
}

