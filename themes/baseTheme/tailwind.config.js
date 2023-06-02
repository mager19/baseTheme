const plugin = require("tailwindcss/plugin");

module.exports = {
    content: ["./*.php", "./*/*.php", "./assets/**/*.js"],

    theme: {
        extend: {
            colors: {
                dark: {
                    1: "#031b4c",
                    2: "#2b426f",
                    3: "#4f658f",
                },
                light: {
                    1: "#f6f9fd",
                    2: "#e7ebf3",
                    3: "#92a8d1",
                },
                primary: {
                    DEFAULT: "#E86969",
                    hover: "#D65959",
                    lighter: "#F19898",
                },
                secondary: {
                    DEFAULT: "#111F4D",
                    hover: "#374678",
                    lighter: "#071133",
                },
                black: "#000",
                white: "#fff",
            },

            spacing: {
                13: "3.25rem",
                15: "3.75rem",
                128: "32rem",
                144: "36rem",
            },
            container: {
                center: true,
            },
        },
        fontFamily: {
            inter: "Inter",
        },
        fontSize: {
            display1: [
                "6rem",
                {
                    fontFamily: "inter",
                    fontWeight: "600",
                    lineHeight: "6.375rem",
                },
            ],
            h1: [
                "4rem",
                {
                    fontFamily: "inter",
                    fontWeight: "600",
                    lineHeight: "4.375rem",
                },
            ],
            h2: [
                "3rem",
                {
                    fontFamily: "inter",
                    fontWeight: "600",
                    lineHeight: "3.25rem",
                },
            ],
            h3: [
                "2.25rem",
                {
                    fontFamily: "inter",
                    fontWeight: "700",
                    lineHeight: "2.6875rem",
                },
            ],
            h4: [
                "2rem",
                {
                    fontFamily: "inter",
                    fontWeight: "700",
                    lineHeight: "2.625rem",
                },
            ],
            titleL: [
                "1.5rem",
                {
                    fontFamily: "inter",
                    fontWeight: "700",
                    lineHeight: "2rem",
                },
            ],
            titleM: [
                "1.125rem",
                {
                    fontFamily: "inter",
                    fontWeight: "700",
                    lineHeight: "1.25rem",
                },
            ],
            titleS: [
                "1rem",
                {
                    fontFamily: "inter",
                    fontWeight: "700",
                    lineHeight: "1.25rem",
                },
            ],
            bodyL: [
                "1.125rem",
                {
                    fontFamily: "inter",
                    fontWeight: "400",
                    letterSpacing: "-0.011em",
                    lineHeight: "1.5rem",
                },
            ],
            bodyM: [
                "1rem",
                {
                    fontFamily: "inter",
                    fontWeight: "400",
                    lineHeight: "1.625rem",
                },
            ],
            bodyM_bold: [
                "1rem",
                {
                    fontFamily: "inter",
                    fontWeight: "700",
                    lineHeight: "1.625rem",
                },
            ],
            bodyM_italic: [
                "1rem",
                {
                    fontStyle: "italic",
                    fontFamily: "inter",
                    fontWeight: "400",
                    lineHeight: "1.625rem",
                },
            ],
            bodyS: [
                "0.875rem",
                {
                    fontFamily: "inter",
                    fontWeight: "400",
                    lineHeight: "1.625rem",
                },
            ],
            bodyXs: [
                "0.75rem",
                {
                    fontFamily: "inter",
                    fontWeight: "400",
                    lineHeight: "1.25rem",
                },
            ],
            overline: [
                "1.5rem",
                {
                    fontFamily: "Karbon",
                    fontWeight: "700",
                    lineHeight: "1.5rem",
                },
            ],
            overlineS: [
                "0.875rem",
                {
                    fontFamily: "inter",
                    fontWeight: "700",
                    lineHeight: "1.3125rem",
                },
            ],
            navigation: [
                "1rem",
                {
                    fontFamily: "inter",
                    fontWeight: "700",
                    lineHeight: "1.625rem",
                },
            ],
            button: [
                "1rem",
                {
                    fontFamily: "inter",
                    fontWeight: "700",
                    lineHeight: "1.1875rem",
                },
            ],
        },
    },
    plugins: [
        require("@tailwindcss/typography"),
        function ({ addComponents }) {
            addComponents({
                ".container": {
                    maxWidth: "100%",
                    "@screen sm": {
                        maxWidth: "540px",
                    },
                    "@screen md": {
                        maxWidth: "720px",
                    },
                    "@screen lg": {
                        maxWidth: "960px",
                    },
                    "@screen xl": {
                        maxWidth: "1140px",
                    },
                },
            });
        },
    ],
};
