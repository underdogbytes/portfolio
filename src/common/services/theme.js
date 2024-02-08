export default {
  getStoredTheme() {
    return localStorage.getItem('theme');
  },
  getUserPreferredTheme() {
    return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark';
  },
  getCurrentTheme() {
    return this.getStoredTheme() || this.getUserPreferredTheme();
  },
  toggleTheme(currentTheme) {
    return currentTheme === 'light' ? 'dark' : 'light';
  },
  setThemeVariable(theme) {
    document.documentElement.style.setProperty('--theme', theme);
  },
};
