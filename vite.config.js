import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    resolve: {
        alias: {
            '@scripts': '/resources/scripts',
            '@auth': '/resources/scripts/auth',
            '@authCss': '/resources/css/auth',
            '@contexts': '/resources/scripts/contexts',
            '@components': '/resources/scripts/components',
            '@landing': '/resources/scripts/landing',
            '@landingCss': '/resources/css/landing',
        },
    },
    plugins: [
        laravel({
            input: [
                // 'resources/sass/app.scss',
                // 'resources/js/app.js',
                // 'resources/scripts/*',
                'resources/scripts/admin.jsx',
                'resources/scripts/auth.jsx',
                'resources/scripts/landing.jsx'
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
