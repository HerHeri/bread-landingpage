<?php

return [
    'paths' => ['api/*', 'livewire/*', 'filament/*'],

    'allowed_methods' => ['*'],
    'allowed_origins' => ['https://bread.imheri.my.id'], // Jangan pakai '*'
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true,
];
