const tailwind = {
  defaultTheme: require('tailwindcss/defaultTheme'),
}

module.exports = {
  content: [
    './source/_components/**/*.blade.php',
    './source/_layouts/**/*.blade.php',
    ...require('fast-glob').sync([
        './source/*.blade.php'
    ]),
  ],
  theme: {
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
    },
    extend: {
      colors: {
        orange: '#FF6D00',
      },
      fontFamily: {
        'sans': ['Century Gothic', ...tailwind.defaultTheme.fontFamily.sans],
      },
      fontSize: {
        '7xl': ['4rem', '.8'],
      }
    },
  },
  plugins: [],
};
