// tailwind.config.js
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php", // Isso é crucial para templates Blade
    "./resources/**/*.js",
    "./resources/**/*.vue", // Se você usa Vue.js
    // Adicione qualquer outro caminho onde você usa classes Tailwind
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};