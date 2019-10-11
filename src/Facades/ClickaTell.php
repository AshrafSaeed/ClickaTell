<?php

namespace AshrafSaeed\ClickaTell\Facades;

use Illuminate\Support\Facades\Facade;

class ClickaTell extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ClickaTell'; 
    }
}