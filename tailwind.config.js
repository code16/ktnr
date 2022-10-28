const tailwind = {
  defaultTheme: require('tailwindcss/defaultTheme'),
  plugin: require('tailwindcss/plugin'),
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
        orange: 'var(--primary)',
      },
      fontFamily: {
        'sans': ['Century Gothic', ...tailwind.defaultTheme.fontFamily.sans],
      },
      fontSize: {
        '5xl': ['3rem', { lineHeight: '1.2'}],
        '7xl': ['4rem', { lineHeight: '.8' }],
      }
    },
  },
  plugins: [],
};
