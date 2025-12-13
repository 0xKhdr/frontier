<?php

declare(strict_types=1);

namespace Frontier;

use function Laravel\Prompts\info;

/**
 * Installer for the Frontier Repositories component.
 */
class RepositoryInstaller extends BaseInstaller
{
    /** @var array<int, string> Commands to execute */
    protected array $commands = [
        'composer require frontier/repository',
    ];

    /**
     * Install the Repositories component.
     */
    public function install(): void
    {
        info('🚀 Installing Frontier Repositories');
        $this->runCommands($this->commands);
        info('Repositories installed successfully.');
    }
}
