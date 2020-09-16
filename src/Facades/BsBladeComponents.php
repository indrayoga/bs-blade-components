<?php

namespace indrayoga\BsBladeComponents\Facades;

use Illuminate\Support\Facades\Facade;

class BsBladeComponents extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bsbladecomponents';
    }
}
