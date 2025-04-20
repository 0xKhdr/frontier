<?php

namespace Frontier\Installers;

use Illuminate\Console\Command;
use Modules\Edge\Traits\InteractsWithInstaller;
use Symfony\Component\Process\Process;
use function Laravel\Prompts\{info, multiselect, select, spin, confirm, note, text};

class ActionsInstaller extends AbstractInstaller
{
    protected array $commands = [
        'composer require frontier/actions',
    ];

    public function install(): void
    {
        info('🚀 Installing Frontier Actions');
        $this->runCommands($this->commands);
        info('Actions installed successfully.');
    }
}
