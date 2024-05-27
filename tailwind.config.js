const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['"Nunito"', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                pallette: {
                    black: "#010101",
                    gray: {
                        100: "#f8f8f8",
                        200: "#e6e6e6",
                        300: "#9d9d9d",
                        500: "#787878",
                        700: "#666666",
                    },
                    blue: {
                        500: "#1461d2",
                        600: "#1666d9",
                    },
                },
            },
        },
    },
    plugins: [],
};
