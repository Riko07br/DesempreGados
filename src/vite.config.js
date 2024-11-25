import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    server: {
        host: "vite",
        port: 5173,
        hmr: {
            port: 5173,
            clientPort: 5173,
            host: "localhost",
        },
    },
});
