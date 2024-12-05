/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./public/**/*.js",
    "./public/**/**/*.js"
  ],
  theme: {
    extend: {
        colors: {
            "primary-main" : "#E62E2D",
            "primary-50" : "#fcede8",
            "primary-100" : "#FCE8E8",
            "primary-200" : "#fad1d1",
            "primary-300" : "#f7bbbb",
            "primary-400" : "#f4a4a4",
            "primary-500" : "#f28d8d",
            "primary-600" : "#ef7676",
            "primary-700" : "#ec5f5f",
            "primary-800" : "#ea4848",
            "primary-900" : "#e73232",
            "secondary-main" : "#393A3C",
        },
        fontFamily: {
            "montserrat-alternates" : ["Montserrat Alternates", "sans-serif"],
            "montserrat" : ["Montserrat", "sans-serif"],
        },
    },
  },
  plugins: [],
}
