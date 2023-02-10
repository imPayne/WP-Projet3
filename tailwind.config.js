/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
        colors: {
            "pink-light": "#EF6480",
            "pink-strong": "#F03B5E",
            "contact": "#535B7C",
            "title-color": "#535B7C"
        },
        fontFamily: {
            "nunito": ['"Nunito Sans"']
        },
        maxWidth: {
            "half": "130px"
        },
        listStyleType: {
            "check": "'✓'"
        }

    },
  },
  plugins: [],
}


