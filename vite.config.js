import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
    plugins: [vue()],
    root: process.cwd() + '/resources/js',
    build: {
        manifest: true,
        outDir: '../../public/dist',
        emptyOutDir: true,
    },
})
