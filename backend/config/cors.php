<?php

return [
    'paths' => ['api/*'],

    'allowed_methods' => ['*'],

    // Comma-separated list in CORS_ALLOWED_ORIGINS. If empty, the SmileBook Vercel URL below is used.
    'allowed_origins' => array_values(array_filter(array_map('trim', explode(',', (string) env(
        'CORS_ALLOWED_ORIGINS',
        'https://smile-book-dental.vercel.app'
    ))))),

    // Vercel preview URLs of this project, plus localhost when APP_ENV=local.
    'allowed_origins_patterns' => array_merge(
        ['#^https://smile-book-dental(-[a-z0-9-]+)?\.vercel\.app$#'],
        env('APP_ENV') === 'local' ? ['#^http://(localhost|127\.0\.0\.1)(:\d+)?$#'] : []
    ),

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    // The frontend authenticates with a Bearer token, not cookies.
    'supports_credentials' => false,
];