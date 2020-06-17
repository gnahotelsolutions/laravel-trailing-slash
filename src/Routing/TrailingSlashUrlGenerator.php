<?php

namespace GNAHotelSolutions\LaravelTrailingSlash\Routing;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Str;

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
        if ($this->pathIsFile($path) || $this->packageIsDisabled()) {
            return parent::format($root, $path, $route);
        }

        return parent::format($root, $path, $route) . '/';
    }

    private function pathIsFile($path): bool
    {
        return Str::contains(Str::afterLast($path, '/'), '.');
    }

    private function packageIsDisabled(): bool
    {
        return ! config('laravel-trailing-slash.active', false);
    }
}
