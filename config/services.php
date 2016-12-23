<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    
    'facebook' => [
    'client_id' => '113320419166559',
    'client_secret' => '5fd755d58e9e6cfaf51857c226bb9617',
    'redirect' => 'http://localhost:8000/callback',
    ],
    
    'twitter' => [
    'client_id' => '9RsvyAEm1dpLm9bc03pbeB43T',
    'client_secret' => 'vCfGgtfXANYqoQe9U6ZcTIjcxdiC8Y1CZXpSC1g8yExSbyUJW7',
    'redirect' => 'http://localhost:8000/callback',
    ],
];
