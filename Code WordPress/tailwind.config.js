/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,jsx,ts,tsx}"],
  theme: {
    fontFamily: {
      'retrogaming': ['Retro-Gaming', 'sans-serif'],
      'nunito': ['Nunito', 'sans-serif'],
    },
    extend: {
      colors: {
         clrnav: "hsl(37, 100%, 64%)",
         clrtextnav: "hsl(252, 11%, 91%)",
         clrtextsection: "hsl(20, 76%, 44%)",
         clrtransitone: "hsl(94, 50%, 51%)",
         clrbgcardthree:"hsl(101, 39%, 44%)",
         clrcardtwo: "hsl(191, 72%, 62%)",
         clrbgcards: "hsl(216, 48%, 45%)",
        },
        backgroundImage:{
          'bgfooter': "url('/src/assets/bgfooter.svg')",
          'bgtransit-one':"url('/src/assets/transition-one.svg')",
          'bgcard-one':"url('/src/assets/bgcard-one.svg')",
          'bgcard-two':"url('/src/assets/bgcard-two.svg')",
        },
      },
    },
    plugins: [],
  }

