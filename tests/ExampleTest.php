<?php

namespace GnaHotelSolutions\LaravelTrailingSlash\Tests;

use Orchestra\Testbench\TestCase;
use GnaHotelSolutions\LaravelTrailingSlash\LaravelTrailingSlashServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelTrailingSlashServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
