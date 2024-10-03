/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      borderRadius: {
        'button': '8px',
      },
      backgroundImage: {
        'hero-pattern': "url('/public/images/2.png')",
      },
    },

  },
  plugins: [],
}

