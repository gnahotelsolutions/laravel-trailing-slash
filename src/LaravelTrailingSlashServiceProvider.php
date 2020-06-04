<?php

namespace GnaHotelSolutions\LaravelTrailingSlash;

use GnaHotelSolutions\LaravelTrailingSlash\Providers\RoutingServiceProvider;
use Illuminate\Support\ServiceProvider;

class LaravelTrailingSlashServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('laravel-trailing-slash.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'laravel-trailing-slash');

        $this->app->register(RoutingServiceProvider::class);
    }
}
