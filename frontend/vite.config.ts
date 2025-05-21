import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';

export default defineConfig({
  plugins: [react()],
  base: '/', // Change this to the subdirectory where your app is hosted
  build: {
    target: 'esnext', // Or 'es2015'
  },
})
