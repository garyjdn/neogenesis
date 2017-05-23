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
        'client_id' => '210482462792863',
        'client_secret' => '724278ec2ccd84520ac03e43c0765290',
        'redirect' => 'http://neogenesis.id/auth/facebook/callback',
    ],

    'google' => [
        'client_id' => '470010568886-ebbju38hh8e4cps9ioa1pokloqh1im4c.apps.googleusercontent.com',
        'client_secret' => 'b1LYYOacfEPC3v-a5rGzT9WV',
        'redirect' => 'http://neogenesis.id/auth/google/callback',
    ],

    'twitter' => [
        'client_id' => '2cp7FAtnOLc9A1TZUGszSphMv',
        'client_secret' => 'VbXnzW1HNJRkN5XzQjkdLayDSwVSgPGTNdUQNWwSrBME8B5hvx',
        'redirect' => 'http://neogenesis.id/auth/twitter/callback',
    ],

];
