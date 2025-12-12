<?php

declare(strict_types=1);

namespace Frontier\Providers;

use Frontier\Console\Commands\InstallCommand;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

/**
 * Frontier package service provider.
 */
class ServiceProvider extends IlluminateServiceProvider
{
    /** @var array<int, class-string> */
    protected array $commands = [
        InstallCommand::class,
    ];

    public function register(): void {}

    public function boot(): void
    {
        $this->commands($this->commands);
    }
}
