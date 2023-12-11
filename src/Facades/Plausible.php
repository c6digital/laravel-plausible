<?php

namespace C6Digital\Plausible\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \C6Digital\Plausible\Plausible
 */
class Plausible extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \C6Digital\Plausible\Plausible::class;
    }
}
