/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
        colors: {
            "pink-light": "#EF6480",
            "pink-strong": "#F03B5E"
        },
        fontFamily: {
            "nunito": ['"Nunito Sans"']
        }
    },
  },
  plugins: [],
}
