import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/bootstrap/bootstrap.min.css",
                "resources/js/bootstrap/bootstrap.bundle.min.js",
                "resources/css/style.css",
            ],
            refresh: true,
        }),
    ],
});
