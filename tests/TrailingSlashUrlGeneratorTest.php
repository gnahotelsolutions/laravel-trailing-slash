<?php

namespace GnaHotelSolutions\LaravelTrailingSlash\Tests;

class TrailingSlashUrlGeneratorTest extends TestCase
{
    /** @test */
    public function url_ends_with_trailing_slash()
    {
        $this->assertTrue(substr(url('profile'), -1) === '/');
        $this->assertStringEndsWith('/', url('profile'));
    }

    /** @test */
    public function url_does_not_end_with_trailing_slash_when_disabled()
    {
        config()->set('laravel-trailing-slash.active', false);
        $this->assertStringEndsNotWith('/', url('profile'));
    }
}
