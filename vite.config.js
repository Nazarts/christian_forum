import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/main.css',
                'resources/js/main.js',
                'resources/js/profile.js',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
