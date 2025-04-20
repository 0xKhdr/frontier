<?php

namespace Frontier\Installers;

use Illuminate\Console\Command;
use Modules\Edge\Traits\InteractsWithInstaller;
use Symfony\Component\Process\Process;
use function Laravel\Prompts\{info, multiselect, select, spin, confirm, note, text};

class RepositoriesInstaller extends AbstractInstaller
{
    protected array $commands = [
        'composer require frontier/repository',
    ];

    public function install(): void
    {
        info('🚀 Installing Frontier Repositories');
        $this->runCommands($this->commands);
        info('Repositories installed successfully.');
    }
}
