module.exports = {
    prefix: "tw-",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            poppins: ["Poppins", "Poppins"],
        },
        extend: {
            rounded: {
                "4xl": "40px",
            },
        },
    },
    plugins: [require("daisyui")],
};
