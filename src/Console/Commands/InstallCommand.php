<?php

declare(strict_types=1);

namespace Frontier\Console\Commands;

use Frontier\FrontierInstaller;
use Illuminate\Console\Command;

/**
 * Artisan command to install Frontier starter kit components.
 */
class InstallCommand extends Command
{
    protected $signature = 'frontier:install';

    protected $description = "Let's take it to the edge";

    /**
     * Execute the command.
     */
    public function handle(): int
    {
        FrontierInstaller::make($this)->install();

        return self::SUCCESS;
    }
}
