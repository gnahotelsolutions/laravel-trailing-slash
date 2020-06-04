<?php

namespace GnaHotelSolutions\LaravelTrailingSlash\Tests;

use GnaHotelSolutions\LaravelTrailingSlash\Providers\LaravelTrailingSlashServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelTrailingSlashServiceProvider::class];
    }

}
