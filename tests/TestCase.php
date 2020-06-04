<?php

namespace GnaHotelSolutions\LaravelTrailingSlash\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use GnaHotelSolutions\LaravelTrailingSlash\LaravelTrailingSlashServiceProvider;

class TestCase extends BaseTestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelTrailingSlashServiceProvider::class];
    }

}
