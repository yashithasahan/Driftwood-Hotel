/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.html",
    "./pages/**/*.html",
    "./pages/**/*.php",
    "./assets/js/**/*.js",
    "./includes/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          50: "#fef7ee",
          100: "#fdedd3",
          200: "#fad7a5",
          300: "#f7b96d",
          400: "#f39333",
          500: "#f07c0a",
          600: "#e15f05",
          700: "#ba4708",
          800: "#94380e",
          900: "#772f0f",
        },
        secondary: {
          50: "#f0f9ff",
          100: "#e0f2fe",
          200: "#bae6fd",
          300: "#7dd3fc",
          400: "#38bdf8",
          500: "#0ea5e9",
          600: "#0284c7",
          700: "#0369a1",
          800: "#075985",
          900: "#0c4a6e",
        },
      },
      fontFamily: {
        sans: [
          "Poppins",
          "Source Sans Pro",
          "Inter",
          "system-ui",
          "sans-serif",
        ],
        serif: ["Playfair Display", "Georgia", "serif"],
        display: ["Playfair Display", "Georgia", "serif"],
        script: ["SnellRoundhand", "cursive"],
        handwriting: ["SnellRoundhand", "cursive"],
      },
      spacing: {
        18: "4.5rem",
        88: "22rem",
      },
    },
  },
  plugins: [],
};
