// vite.config.js
import { defineConfig } from "vite";

export default defineConfig({
    css: {
        postcss: "postcss.config.js",
    },
    build: {
        rollupOptions: {
            input: "frontend/js/app.js",
        },
    },
});
