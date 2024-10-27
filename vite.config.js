import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
              "resources/css/app.css", 
              "resources/js/app.js",
              "resources/summernote/summernote-lite.min.css",
            ],
            refresh: true,
        }),
    ],
    build: {
      sourcemap: true,
    },
    server: {
        host: true,
    },
});
