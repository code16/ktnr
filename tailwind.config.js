

module.exports = {
  content: [
    './source/_components/**/*.blade.php',
    './source/_layouts/**/*.blade.php',
    ...require('fast-glob').sync([
        './source/*.blade.php'
    ]),
  ],
  theme: {
    extend: {
      colors: {
        primary: 'var(--primary)',
      }
    },
  },
  plugins: [],
};
