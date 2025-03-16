import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  server: {
    host: '0.0.0.0',
    port: 5173,
    https: false,  // Jika kamu tidak menggunakan HTTPS untuk Vite di localhost
  },
  base: '/css/',  // Sesuaikan path asset CSS dan JS dengan ngrok
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
});
