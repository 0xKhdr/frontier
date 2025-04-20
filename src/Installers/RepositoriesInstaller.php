<?php

namespace Frontier\Installers;

use Illuminate\Console\Command;
use Modules\Edge\Traits\InteractsWithInstaller;
use Symfony\Component\Process\Process;
use function Laravel\Prompts\{info, multiselect, select, spin, confirm, note, text};

class RepositoriesInstaller extends AbstractInstaller
{
    public function install(): void
    {
        info('🚀 Installing Edge Starter Kit');

        $commands = [
            'composer require edge/actions',
        ];

        $this->runCommands($commands);
        info('Actions installed successfully.');
    }
}
