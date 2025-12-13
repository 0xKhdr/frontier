<?php

declare(strict_types=1);

namespace Frontier;

use function Laravel\Prompts\info;

/**
 * Installer for the Frontier Actions component.
 */
class ActionInstaller extends BaseInstaller
{
    /** @var array<int, string> Commands to execute */
    protected array $commands = [
        'composer require frontier/action',
    ];

    /**
     * Install the Actions component.
     */
    public function install(): void
    {
        info('🚀 Installing Frontier Actions');
        $this->runCommands($this->commands);
        info('Actions installed successfully.');
    }
}
