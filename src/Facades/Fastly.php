<?php

namespace Erashdan\LaravelFastly\Facades;

use Erashdan\LaravelFastly\Test\FastlyFake;
use Illuminate\Support\Facades\Facade;

class Fastly extends Facade
{
    /**
     * Replace the bound instance with a fake.
     *
     * @return void
     */
    public static function fake()
    {
        static::swap(new FastlyFake());
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Fastly';
    }
}