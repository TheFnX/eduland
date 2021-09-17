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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => '830739097575893',
        'client_secret' => '41c324fd21d1d71e3e9ba42e5a593e2c',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
    'google' => [
        'client_id' => '159458977544-1vo6ojeu11f9hdi3it1bckpjt3aqmehe.apps.googleusercontent.com',
        'client_secret' => 'xcpRJmvEE6Uk1j8_nqATMGPA',
        'redirect' => 'http://localhost:8000/auth/google/callback',
],

];
