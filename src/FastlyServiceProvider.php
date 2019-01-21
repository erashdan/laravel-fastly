<?php

namespace Erashdan\LaravelFastly;

use Fastly\Adapter\Guzzle\GuzzleAdapter;
use Illuminate\Support\ServiceProvider;

class FastlyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/fastly.php' => config_path('fastly.php'),
        ], 'config');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Fastly', function () {
            return new Fastly();
        });
    }
}
