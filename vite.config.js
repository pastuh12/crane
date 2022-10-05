import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/bootstrap/bootstrap.css",
                "resources/js/bootstrap/bootstrap.bundle.min.js",
                "resources/js/jquery.min.js"
            ],
            refresh: true,
        }),
    ],
});
