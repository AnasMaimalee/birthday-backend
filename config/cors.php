<?php

return [
    'paths' => [
        'api/*',
        'broadcasting/auth',
    ],

    'allowed_methods' => ['*'],

    'allowed_origins' => [
        'http://localhost:5173',
        'https://area-desire-sponsor-accordingly.trycloudflare.com',
        'https://sadiya-vs-anas-birthday.vercel.app/'
    ],

    'allowed_origins_patterns' => [
        '/^https:\/\/.*\.trycloudflare\.com$/',
    ],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,
];