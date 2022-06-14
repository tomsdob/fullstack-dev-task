/** @type {import('tailwindcss').Config} */

const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                brand: {
                    "light-gray": "#F6F6F6",
                    "light-normal-gray": "#E8E8E8",
                    gray: "#2D2D2D",
                    "medium-gray": "#4E4E4E",
                    "dark-gray": "#727272",
                    red: "#C8102E",
                    "bright-red": "#EA1336",
                },
            },
            fontFamily: {
                "geometria-narrow": [
                    "Geometria Narrow",
                    ...defaultTheme.fontFamily.sans,
                ],
            },
        },
    },
    plugins: [],
};
