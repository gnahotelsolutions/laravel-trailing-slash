<?php

namespace GnaHotelSolutions\LaravelTrailingSlash\Tests;

class TrailingSlashUrlGeneratorTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function if_configuration_activator_is_enabled_url_ends_with_trailing_slash()
    {
        $this->assertTrue(substr(url('profile'), -1) === '/');
    }

    /** @test */
    public function if_configuration_activator_is_disabled_url_ends_with_no_trailing_slash()
    {
        config()->set('laravel-trailing-slash.active', false);
        $this->assertFalse(substr(url('profile'), -1) === '/');
    }
}
