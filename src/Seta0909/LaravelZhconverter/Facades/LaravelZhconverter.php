<?php

namespace Seta0909\LaravelZhconverter\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelZhconverter extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ZhConvert';
    }
}
