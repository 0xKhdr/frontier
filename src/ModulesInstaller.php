<?php

namespace Frontier;

use function Laravel\Prompts\info;

class ModulesInstaller extends AbstractInstaller
{
    protected array $commands = [
        'composer require frontier/module',
    ];

    public function install(): void
    {
        info('🚀 Installing Frontier Modules');
        $this->runCommands($this->commands);
        info('Modules installed successfully.');
    }
}
