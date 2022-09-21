<?php

namespace ottojoash\MtnMomo\Facades;

use Illuminate\Support\Facades\Facade;


class MtnRemittanceFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mtn-momo-remittance'; 
    }
}
