/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        primary: "#E50914",
      },
    },
  },
  plugins: ["prettier-plugin-tailwindcss"],
};
