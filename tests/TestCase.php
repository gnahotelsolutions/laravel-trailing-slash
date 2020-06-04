<?php

namespace GNAHotelSolutions\LaravelTrailingSlash\Tests;

use GNAHotelSolutions\LaravelTrailingSlash\Providers\LaravelTrailingSlashServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelTrailingSlashServiceProvider::class];
    }

}
