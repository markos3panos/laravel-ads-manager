import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';
const __dirname = path.dirname(new URL(import.meta.url).pathname);

export default defineConfig({
    //  server: {
    //      host: '192.168.1.184',
    //      port: 5173,
    //     strictPort: true,
    //  },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/filament/admin/theme.css',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources'),
        },
    },
    optimizeDeps: {
        esbuildOptions: {
            platform: 'node',
            target: 'esnext',
        },
    },
});
