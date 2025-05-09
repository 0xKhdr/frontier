<?php

namespace Frontier\Console\Commands;

use Frontier\FrontierInstaller;
use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'frontier:install';

    protected $description = "Let's take it to the edge";

    public function handle(): void
    {
        FrontierInstaller::make($this)->install();
    }
}
