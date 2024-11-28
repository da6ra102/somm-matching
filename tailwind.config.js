/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["frontend/**/*.{php,js}"],
    theme: {
        extend: {
            colors: {
                primary: "#5A6451",
                "primary-dark": "#505A47",
            },
            fontFamily: {
                primary: "'Orpheus Pro', sans-serif",
                secondary: "'Proxima Nova Light', sans-serif",
            },
        },
    },
    plugins: [],
};
