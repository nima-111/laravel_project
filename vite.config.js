import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/my.js'],
=======
            input: ['resources/css/app.css', 'resources/js/app.js'],
>>>>>>> 538171d31a2abcefb97a2a68dc6f9744aa14f19b
            refresh: true,
        }),
        tailwindcss(),
    ],
});
