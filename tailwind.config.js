const colors = require('tailwindcss/colors');

module.exports = {
    purge: {
        content: [
            './resources/**/*.blade.php',
            './resources/**/*.js',
            './resources/**/*.vue'
        ],
        options: {
            keyframes: true,
        }
    },
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {
        colors: {
            rose: colors.rose,
        },
    },
  },
    variants: {
        extend: {
            backgroundColor: ["checked"],
            borderColor: ["checked"],
            inset: ["checked"],
            opacity: ['disabled'],
            zIndex: ["hover", "active"],
            fill: ['hover', 'focus', 'group-hover'],
            display: ['group-hover'],
            typography: ['dark'],
            fontWeight: ["hover", "focus"]
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/typography'),
        require('tailwindcss-elevation')(['responsive']),
    ],
}
