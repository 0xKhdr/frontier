<?php

namespace Frontier\Providers;

use Frontier\Console\Commands\InstallCommand;
use Illuminate\Support\ServiceProvider;

class StarterServiceProvider extends ServiceProvider
{
    protected array $commands = [
        InstallCommand::class,
    ];

    public function register(): void {}

    public function boot(): void
    {
        $this->commands($this->commands);
    }
}
