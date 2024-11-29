/* eslint-disable @typescript-eslint/no-var-requires */
const { fontFamily } = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["**/*.html"],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: "#4E738A",
          50: "#EBF1F4",
          100: "#D8E2E9",
          200: "#B4C8D5",
          300: "#8DACBF",
          400: "#6991AA",
          500: "#4E738A",
          600: "#3F5C6F",
          700: "#2E4451",
          800: "#1F2E37",
          900: "#0F161A",
          950: "#070B0D",
        },
        secondary: {
          DEFAULT: "#F8A200",
          50: "#FFF8EB",
          100: "#FFF1D6",
          200: "#FFE1A8",
          300: "#FFCF75",
          400: "#FFBB3D",
          500: "#F8A200",
          600: "#E09200",
          700: "#C27E00",
          800: "#A36A00",
          900: "#754C00",
          950: "#573800",
        },
        light: {
          DEFAULT: "#F6F6F6",
        },
        blue: {
          DEFAULT: "#4B30FC",
        },
      },

      spacing: {
        4.5: "18px",
        5.5: "22px",
        7.5: "30px",
        15: "60px",
        25: "100px",
      },
      boxShadow: {
        5: "0px 1px 3px rgba(0, 0, 0, 0.1), 0px 1px 2px -1px rgba(0, 0, 0, 0.1)",
      },
    },
  },
  plugins: [],
};
