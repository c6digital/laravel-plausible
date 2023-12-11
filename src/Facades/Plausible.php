<?php

namespace C6Digital\Plausible\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static bool event(string $name, array $props = [])
 *
 * @see \C6Digital\Plausible\Plausible
 */
class Plausible extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \C6Digital\Plausible\Plausible::class;
    }
}
