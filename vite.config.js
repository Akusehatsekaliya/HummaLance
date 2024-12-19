import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    resolve: {
        alias: {
            '@scripts': '/resources/scripts',
            '@auth': '/resources/scripts/auth',
            '@authCss': '/resources/css/auth',
            '@context': '/resources/scripts/context',
            '@components': '/resources/scripts/components',
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
                // 'resources/scripts/*',
                'resources/scripts/admin.jsx',
                'resources/scripts/auth.jsx'
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
