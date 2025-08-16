const { color } = require("chart.js/helpers");

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                "custom-blue": "#2655A1",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
    darkMode: false,
};
