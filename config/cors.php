<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => [
        'http://localhost:5173',                              // Vite dev
        'http://localhost:3000',                              // Next.js dev if any
        'https://sadiya-vs-anas-birthday.vercel.app',         // ← your real Vercel domain (NO trailing slash!)
    ],

    'allowed_origins_patterns' => [
        '/^https:\/\/.*\.vercel\.app$/',                      // catches all Vercel preview / branch domains
        '/^https:\/\/.*\.trycloudflare\.com$/',               // your tunnel
    ],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,
];