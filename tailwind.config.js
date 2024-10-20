/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        inter: ['Inter', 'sans-serif'],
        raleway: ['Raleway', 'sans-serif'],
      },
      borderRadius: {
        'button': '8px',
      },
      backgroundImage: {
        'hero-pattern': "url('/public/images/2.png')",
        'eagle': "url('/public/images/eagle_mugnanimao.png')",
      },
      gridTemplateColumns: {
        'custom-12': 'repeat(12, 80px)',
      },
      backgroundColor: {
        'barangay-main': "#4169E1",
      },
      textColor: {
        'barangay-main': "#4169E1",
      },
      borderColor: {
        'barangay-main': "#4169E1",
      },
    },
  },
}

