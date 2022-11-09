<?php

declare(strict_types=1);

namespace JustSteveKing\FluentValidation\Tests;

use JustSteveKing\FluentValidation\Providers\PackageServiceProvider;
use Orchestra\Testbench\TestCase;

class PackageTestCase extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            PackageServiceProvider::class,
        ];
    }
}
