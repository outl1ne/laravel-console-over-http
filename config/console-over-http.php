<?php

return [
    'token' => env('CONSOLE_OVER_HTTP_TOKEN', null),
    'insecure' => env('CONSOLE_OVER_HTTP_INSECURE', false),
    'process' => [
        'timeout' => 3600,
    ],
];
