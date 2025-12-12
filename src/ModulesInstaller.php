<?php

declare(strict_types=1);

namespace Frontier;

use function Laravel\Prompts\info;

/**
 * Installer for the Frontier Modules component.
 */
class ModulesInstaller extends BaseInstaller
{
    /** @var array<int, string> Commands to execute */
    protected array $commands = [
        'composer require frontier/module',
    ];

    /**
     * Install the Modules component.
     */
    public function install(): void
    {
        info('🚀 Installing Frontier Modules');
        $this->runCommands($this->commands);
        info('Modules installed successfully.');
    }
}
