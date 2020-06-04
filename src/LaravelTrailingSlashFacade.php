<?php

namespace GnaHotelSolutions\LaravelTrailingSlash;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GnaHotelSolutions\LaravelTrailingSlash\Skeleton\SkeletonClass
 */
class LaravelTrailingSlashFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-trailing-slash';
    }
}
