import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    resolve: {
        alias: {
            '@scripts': '/resources/scripts',
        },
    },
    build: {
        rollupOptions: {
            output: {
                manualChunks: {
                    vendor: ['react', 'axios', 'datatables.net-react', 'datatables.net-bs5'],
                },
            },
        },
    },
    plugins: [
        laravel({
            input: [
                // 'resources/sass/app.scss',
                // 'resources/js/app.js',
                'resources/scripts/landing.jsx',
                'resources/scripts/admin.jsx',
                // 'resources/scripts/admin/**'
            ],
            refresh: [
                // 'resources/routes/**',
                // 'routes/**',
                'resources/views/**',
            ],
        }),
        react(),
    ],
});
