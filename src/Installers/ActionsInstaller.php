<?php

namespace Frontier\Installers;

use function Laravel\Prompts\info;

class ActionsInstaller extends AbstractInstaller
{
    protected array $commands = [
        'composer require frontier/action',
    ];

    public function install(): void
    {
        info('🚀 Installing Frontier Actions');
        $this->runCommands($this->commands);
        info('Actions installed successfully.');
    }
}
