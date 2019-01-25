<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Fastly State
    |--------------------------------------------------------------------------
    |
    | This is here to help with local development. It can be a little tough
    | working with faslty on a local machine.
    */
    'enabled' => env('FASTLY_ENABLED', true),


    /*
     |--------------------------------------------------------------------------
     | Fastly API Configuration
     |--------------------------------------------------------------------------
     |
     | The API key should be created using Fastly interface
     |
     */
    'api_key' => env('FASTLY_API_KEY'),

    /*
     |--------------------------------------------------------------------------
     | Fastly Services API
     |--------------------------------------------------------------------------
     |
     | This array for all your services IDs in fastly.
     |
     */

    'services' => []


];
