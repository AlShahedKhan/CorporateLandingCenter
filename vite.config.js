import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
  build: {
    outDir: 'dist', // You can change this to 'dist' if you prefer
    emptyOutDir: true, // Ensures the build output directory is cleared before building
  },
});
