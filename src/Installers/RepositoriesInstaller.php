<?php

namespace Frontier\Installers;

use function Laravel\Prompts\info;

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
