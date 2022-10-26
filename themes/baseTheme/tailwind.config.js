const plugin = require('tailwindcss/plugin')

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
                    lighter: "#F19898"
                },
                secondary: {
                    DEFAULT: "#111F4D",
                    hover: "#374678",
                    lighter: "#071133"
                },
                black: "#000",
                white: "#fff",
            },

            fontFamily: { 
                inter: "Inter"
            },
            spacing: {
                '13': '3.25rem',
                '15': '3.75rem',
                '128': '32rem',
                '144': '36rem',
            }, 
            container: {
                center: true,
            },           
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/line-clamp'),
        plugin(function ({ addUtilities }) {
          addUtilities(
            {
              '.title--display1': {
                fontWeight: 700,
                fontSize: '6rem',//96px
                lineHeight: '8.375rem',//134px
                letterSpacing: '0.03em',
                textTransform: 'uppercase'
              },
              '.title--display2': {
                fontWeight: 700,
                fontSize: '4.5rem',//72px
                lineHeight: '6.5rem',//104px
                letterSpacing: '0.03em',
                textTransform: 'uppercase'
              },
              '.title--1': {
                fontWeight: 700,
                fontSize: '4rem',//64px
                lineHeight: '5.75rem',//92px
                letterSpacing: '0.03em',
                textTransform: 'uppercase'
              },
              '.title--2': {
                fontWeight: 700,
                fontSize: '3rem',//48px
                lineHeight: '4.313rem',//69px
                letterSpacing: '0.03em',
                textTransform: 'uppercase'
              },
              '.title--3': {
                fontWeight: 700,
                fontSize: '2.25rem',//36px
                lineHeight: '3.25rem',//52px
                letterSpacing: '0.03em',
                textTransform: 'uppercase'
              },
              '.title--4': {
                fontWeight: 700,
                fontSize: '1.5rem',//24px
                lineHeight: '2.188rem',//35px
                letterSpacing: '0.05em',
                textTransform: 'uppercase'
              },
              '.title--5': {
                fontWeight: 700,
                fontSize: '1.125rem',//18px
                lineHeight: '1.625rem',//26px
                letterSpacing: '0.05em',
                textTransform: 'uppercase'
              },
              '.title--6': {
                fontWeight: 700,
                fontSize: '1rem',//16px
                lineHeight: '1.438rem',//23px
                letterSpacing: '0.01em',
                textTransform: 'uppercase'
              },
              '.title--lead': {
                fontWeight: 400,
                fontSize: '1.125rem',//18px
                lineHeight: '1.938rem'//31px
              },
              '.title--body': {
                fontWeight: 400,
                fontSize: '1rem',
                lineHeight: '1.688rem'//27px
              },
              '.title--button': {
                fontWeight: 400,
                fontSize: '0.75rem',//12px
                lineHeight: '1rem',
                letterSpacing: '0.01em',
                textTransform: 'uppercase'
              },
              '.title--overline': {
                fontWeight: 700,
                fontSize: '1.125rem',//18px
                lineHeight: '1.875rem',//30px
                letterSpacing: '0.01em',
                textTransform: 'uppercase'
              },
              '.title--caption': {
                fontWeight: 700,
                fontSize: '0.75rem',//12px
                lineHeight: '1.25rem',//20px
                letterSpacing: '0.4px',
              },
              // Extend in sass project WordPress
              '.backgroundSettings': {
                backgroundPosition: 'center center',
                backgroundSize: 'cover',
                backgroundRepeat: 'no-repeat'
              },
            }
          )
        }),
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
