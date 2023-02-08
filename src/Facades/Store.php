<?php

namespace AstroStore\Store\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AstroStore\Store\Store
 */
class Store extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AstroStore\Store\Store::class;
    }
}
