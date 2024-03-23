import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            screens: {
                xs: "400px",
            },
            fontFamily: {
                heading: ["Mouse Memoirs", "sans-serif"],
                text: ["Archivo Narrow", "sans-serif"],
                textArch: ["Archivo Narrow", "sans-serif"],
            },
            colors: {
                ownPurple: {
                    400: "#7852BF",
                    600: "#83688e",
                },
                ownPink: {
                    200: "#f7adc5",
                    400: "#d46892",
                    600: "#e872bf",
                },
                ownYellow: {
                    400: "#E9E159",
                    600: "#f7c90f",
                },
                ownTurquise: {
                    400: "#05bbd4",
                    600: "#62c5c6",
                },
                ownBlue: {
                    400: "#71c3e6",
                    800: "4a47b8",
                },
                ownOrange: {
                    600: "#fc9b7a",
                },

                fontDark: "#0f181f",
                fontLight: "#faf7f3",

                bgLight: {
                    200: "#faf7f3",
                    400: "#e9e7e4",
                },
                bgDark: {
                    200: "#333",
                    400: "#0f181f",
                    600:"#161926"
                },
                vue: "#3eb780",
            },
            animation: {
                shake: " shake 0.5s infinite",
            },
            keyframes: {
                shake: {
                    "0%": { transform: "translate(1px, 1px) rotate(0deg)" },
                    "10%": { transform: "translate(-1px, -2px) rotate(-1deg)" },
                    " 20%": { transform: "translate(-3px, 0px) rotate(1deg)" },
                    "30%": { transform: " translate(3px, 2px) rotate(0deg)" },
                    "40%": { transform: "translate(1px, -1px) rotate(1deg)" },
                    " 50%": {
                        transform: " translate(-1px, 2px) rotate(-1deg)",
                    },
                    "60%": { transform: " translate(-3px, 1px) rotate(0deg)" },
                    "70%": { transform: " translate(3px, 1px) rotate(-1deg)" },
                    "80%": { transform: "translate(-1px, -1px) rotate(1deg)" },
                    "90%": { transform: "translate(1px, 2px) rotate(0deg)" },
                    "100%": { transform: "translate(1px, -2px) rotate(-1deg)" },
                },
            },
        },
    },

    plugins: [forms],
};
