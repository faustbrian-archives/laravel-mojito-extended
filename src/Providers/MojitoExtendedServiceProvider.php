<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Mojito Extended.
 *
 * (c) Konceiver <info@konceiver.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Konceiver\MojitoExtended\Providers;

use Illuminate\Support\ServiceProvider;
use NunoMaduro\LaravelMojito\ViewAssertion;
use PHPUnit\Framework\Assert;

class MojitoExtendedServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        ViewAssertion::macro('doesNotContain', function (string $text) {
            Assert::assertStringNotContainsString(
                (string) $text,
                $this->html,
                "Failed asserting that the text `{$text}` does not exist within `{$this->html}`."
            );

            return $this;
        });
    }
}
