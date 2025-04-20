<?php

namespace Frontier\Console\Commands;

use Frontier\Installers\StarterInstaller;
use Illuminate\Console\Command;

use function Laravel\Prompts\info;

class InstallCommand extends Command
{
    protected $signature = 'frontier:install';

    protected $description = "Let's take it to the edge";

    public function handle(): void
    {
        StarterInstaller::make($this)->install();
    }
}
