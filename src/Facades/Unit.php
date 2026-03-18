<?php

namespace Teqnogen\Units\Facades;

use Illuminate\Support\Facades\Facade;
use Teqnogen\Units\UnitConverter;

class Unit extends Facade
{
    protected static function getFacadeAccessor()
    {
        return UnitConverter::class;
    }
}