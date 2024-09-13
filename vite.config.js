/** @format */

import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
	plugins: [
		laravel({
			input: ["resources/css/app.css", "resources/js/app.js"],
			refresh: true,
		}),
	],

	server: {
		host: "0.0.0.0", // Permite conexiones desde cualquier dirección IP
		hmr: {
			host: "192.168.1.5", // Tu dirección IP local
		},
	},
});
