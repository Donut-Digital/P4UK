module.exports = {
  important: true,
  content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  theme: {
    extend: {
        colors:
        {
            'primary':'var(--theme-primary)',
            'secondary':'var(--theme-secondary)',
            'support':'var(--theme-support)',
            'background':'var(--theme-background)',
            'typo-primary':'var(--typo-primary)',
            'typo-secondary':'var(--typo-secondary)',
            'typo-support':'var(--typo-support)'
        },
        fontFamily: {
            'lato': ['Lato']
        }
    },
  },
  plugins: [],
}
