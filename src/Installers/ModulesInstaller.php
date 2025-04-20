<?php

namespace Frontier\Installers;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;
use function Laravel\Prompts\{info, multiselect, select, spin, confirm, note, text};

class ModulesInstaller extends AbstractInstaller
{
    protected array $commands = [
        'composer require frontier/modules',
    ];

    public function install(): void
    {
        info('🚀 Installing Frontier Modules');
        $this->runCommands($this->commands);
        info('Modules installed successfully.');
    }
}
