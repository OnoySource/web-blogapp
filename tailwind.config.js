/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      screens: {
        xs: '480px',
      },
      brightness: {
        25: '.25', // 25% brightness
        75: '.75', // 75% brightness
        125: '1.25', // 125% brightness
      },
      colors: {
        background: "#f6f9fc", // Warna latar belakang
        container: "#ffffff",  // Warna untuk container atau elemen utama
      },
      fontFamily:{
        'primary': ['Playfair Display, serif'],
        'secondary': ['Inter, sans-serif']
      },
    },
  },
  plugins: [],
}
