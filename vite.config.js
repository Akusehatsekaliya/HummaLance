import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // 'resources/sass/app.scss',
                // 'resources/js/app.js',
                'resources/scripts/landing.jsx',
                'resources/scripts/admin.jsx',
                // 'resources/scripts/admin/**'
            ],
            refresh: true,
        }),
        react(),
    ],
});
