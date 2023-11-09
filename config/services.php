<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => "666042123673-okqoak5pj8g20tgkebdu8pnsi5tomqok.apps.googleusercontent.com",
        'client_secret' => "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",
        'redirect' => 'http://127.0.0.1:8001/login/google/callback',
    ],

    'facebook' => [
        'client_id' => "1583870772108142",
        'client_secret' => "13d78faed417797858352f21f534e43c",
        'redirect' => 'http://localhost:8001/login/facebook/callback',
    ],
];
