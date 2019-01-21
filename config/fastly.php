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
     | This array will be passed to the Fastly.
     |
     */
    'api_key' => env('FASTLY_API_KEY'),

];
