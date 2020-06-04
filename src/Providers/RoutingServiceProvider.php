<?php

namespace GnaHotelSolutions\LaravelTrailingSlash\Providers;

use GnaHotelSolutions\LaravelTrailingSlash\Library\TrailingSlashUrlGenerator;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;

class RoutingServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('url', function ($app) {
            $routes = $app['router']->getRoutes();

            $app->instance('routes', $routes);

            return new TrailingSlashUrlGenerator(
                $routes, $app->rebinding(
                'request',
                function ($app, $request) {
                    $app['url']->setRequest($request);
                }
            ), $app['config']['app.asset_url']
            );
        });

        $this->app->extend('url', function (UrlGenerator $url, $app) {

            $url->setSessionResolver(function () {
                return $this->app['session'] ?? null;
            });

            $url->setKeyResolver(function () {
                return $this->app->make('config')->get('app.key');
            });

            $app->rebinding('routes', function ($app, $routes) {
                $app['url']->setRoutes($routes);
            });

            return $url;
        });

    }
}
