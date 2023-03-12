<?php

namespace FlourishLabs\LaravelSlackBolt\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \FlourishLabs\LaravelSlackBolt\LaravelSlackBolt
 */
class LaravelSlackBolt extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \FlourishLabs\LaravelSlackBolt\LaravelSlackBolt::class;
    }
}
