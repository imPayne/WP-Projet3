/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
        colors: {
            "pink-light": "#EF6480",
            "pink-strong": "#F03B5E",
            "block-color" : "#F7FBFE",
            "contact": "#535B7C",
            "title-color": "#535B7C",
            "line-gray": "#646F93"
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


