<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Mojito Extended.
 *
 * (c) Konceiver Oy <info@konceiver.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Konceiver\MojitoExtended\Tests;

use Konceiver\MojitoExtended\Providers\MojitoExtendedServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [MojitoExtendedServiceProvider::class];
    }
}
