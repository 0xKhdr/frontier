<?php

namespace Frontier\Console\Commands;

use Frontier\Installers\StarterInstaller;
use Illuminate\Console\Command;
use Symfony\Component\Process\Process;
use function Laravel\Prompts\info;

class InstallCommand extends Command
{
    protected $signature = 'frontier:install';

    protected $description = 'Lets take it to the edge';

    public function handle(): void
    {
        info("Let's take it to the edge!");

        StarterInstaller::make($this)->install();
    }
}
