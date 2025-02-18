<?php

namespace GNAHotelSolutions\LaravelTrailingSlash\Tests;

class TrailingSlashUrlGeneratorTest extends TestCase
{
    public function test_url_ends_with_trailing_slash(): void
    {
        $this->assertStringEndsWith('/', url('profile'));
    }

    public function test_url_does_not_end_with_trailing_slash_when_disabled(): void
    {
        config()->set('laravel-trailing-slash.active', false);
        $this->assertStringEndsNotWith('/', url('profile'));
    }
}
