<?php

return [
    'token' => env('CONSOLE_OVER_HTTP_TOKEN', null),
    'insecure' => env('CONSOLE_OVER_HTTP_INSECURE', false),
    'debug_logs' => env('CONSOLE_OVER_HTTP_DEBUG_LOGS', true),
    'process' => [
        'timeout' => 3600,
    ],
];
