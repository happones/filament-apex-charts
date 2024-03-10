<?php

namespace Happones\FilamentApexCharts\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Happones\FilamentApexCharts\FilamentApexCharts
 */
class FilamentApexCharts extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Happones\FilamentApexCharts\FilamentApexCharts::class;
    }
}
