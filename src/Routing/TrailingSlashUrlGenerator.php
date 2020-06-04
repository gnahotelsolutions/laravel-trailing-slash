<?php

namespace GnaHotelSolutions\LaravelTrailingSlash\Routing;

use Illuminate\Routing\UrlGenerator;

class TrailingSlashUrlGenerator extends UrlGenerator
{
    /**
     * Format the given URL segments into a single URL.
     *
     * @param string $root
     * @param string $path
     * @param string $route
     *
     * @return string
     */
    public function format($root, $path, $route = '')
    {
        return parent::format($root, $path, $route) . (config('laravel-trailing-slash.active') ? '/' : '');
    }
}
