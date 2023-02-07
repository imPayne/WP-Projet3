/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
        colors: {
            "pink-light": "#EF6480",
            "pink-strong": "#F03B5E",
            "title-color": "#535B7C"
        },
        fontFamily: {
            "nunito": ['"Nunito Sans"']
        }
    },
  },
  plugins: [],
}
