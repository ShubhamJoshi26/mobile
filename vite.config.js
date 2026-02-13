import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { nativephpMobile, nativephpHotFile } from './vendor/nativephp/mobile/resources/js/vite-plugin.js'; 
 
// import { createIcons, icons } from 'lucide';


export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            hotFile: nativephpHotFile(), 
        }),
        // tailwindcss(),
        //  createIcons({ icons }),
        nativephpMobile(), 
    ],
    server: {
        host: true,        // IMPORTANT
        port: 5173,
        strictPort: true,
    },
});
