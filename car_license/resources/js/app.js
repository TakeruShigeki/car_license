import './bootstrap';

import Alpine from 'alpinejs';
import './ajax';
import {ajax} from './ajax';
import './favorite';
import {favorite} from './favorite';
import './jquery'
import { defineConfig } from 'vite';

export default defineConfig({
    build: {
    outDir: 'public/build',  
    manifest: true,          
    rollupOptions: {
        input: 'resources/js/app.js',  
    },
    },
});

window.Alpine = Alpine;

Alpine.start();
ajax();
favorite();



