module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        backgroundImage: {
            'fondox' : "url('/images/aaaaa.jpg')",
        },
    },
  },
  plugins: [require("daisyui")],
}
