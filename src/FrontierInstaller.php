<?php

declare(strict_types=1);

namespace Frontier;

use Frontier\Enums\Component;

use function Laravel\Prompts\confirm;
use function Laravel\Prompts\info;
use function Laravel\Prompts\multiselect;
use function Laravel\Prompts\note;
use function Laravel\Prompts\spin;

/**
 * Main Frontier installer that orchestrates component installation.
 */
class FrontierInstaller extends BaseInstaller
{
    /** @var array<string, string> Available components and their descriptions */
    protected array $components = [
        Component::Actions->value => 'Action classes for business logic',
        Component::Repositories->value => 'Database abstraction layer using repositories',
        Component::Modules->value => 'Structure for using modules',
    ];

    /** @var array<int, string> User-selected components */
    protected array $selectedComponents = [];

    /**
     * Execute the Frontier installation.
     */
    public function install(): void
    {
        info('🚀 Installing Frontier Starter Kit');

        $this->selectComponents();
        $this->confirmInstallation();
        $this->executeInstallation();

        note('Frontier installation completed!');
    }

    /**
     * Prompt user to select components.
     */
    protected function selectComponents(): void
    {
        $this->selectedComponents = multiselect(
            label: 'Which components would you like to install?',
            options: $this->components,
            scroll: 10,
            required: true
        );
    }

    /**
     * Confirm the installation with the user.
     */
    protected function confirmInstallation(): void
    {
        $confirmed = confirm(
            label: sprintf(
                'Ready to install selected components %s?',
                implode(', ', $this->selectedComponents)
            ),
        );

        if (! $confirmed) {
            $this->command->info('Installation cancelled.');
            exit;
        }
    }

    /**
     * Execute installation for each selected component.
     */
    protected function executeInstallation(): void
    {
        spin(
            callback: function (): void {
                foreach ($this->selectedComponents as $component) {
                    match ($component) {
                        Component::Actions->value => ActionsInstaller::make($this->command)->install(),
                        Component::Repositories->value => RepositoriesInstaller::make($this->command)->install(),
                        Component::Modules->value => ModulesInstaller::make($this->command)->install(),
                    };
                }
            },
            message: 'Installing components...'
        );
    }
}
