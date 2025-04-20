<?php

namespace Frontier\Installers;

use Illuminate\Console\Command;
use Frontier\Enums\Component;
use Symfony\Component\Process\Process;
use function Laravel\Prompts\{info, multiselect, select, spin, confirm, note, text};

class StarterInstaller extends AbstractInstaller
{
    protected array $components = [
        Component::Actions->value => 'Action classes for business logic',
        Component::Repositories->value => 'Database abstraction layer using repositories',
        Component::Modules->value => 'Structure for using modules',
    ];

    protected array $selectedComponents = [];

    public function install(): void
    {
        info('🚀 Installing Frontier Starter Kit');

        $this->selectComponents();
        $this->confirmInstallation();
        $this->executeInstallation();

        note('Frontier installation completed!');
    }

    protected function selectComponents(): void
    {
        $this->selectedComponents = multiselect(
            label: 'Which components would you like to install?',
            options: $this->components,
            scroll: 10,
            required: true
        );
    }

    protected function confirmInstallation(): void
    {
        $confirmed = confirm(
            label: sprintf(
                'Ready to install selected components %s?',
                implode(', ', $this->selectedComponents)
            ),
        );

        if (!$confirmed) {
            $this->command->info('Installation cancelled.');
            exit;
        }
    }

    protected function executeInstallation(): void
    {
        spin(
            function () {
                foreach ($this->selectedComponents as $component) {
                    match ($component) {
                        Component::Actions->value
                            => ActionsInstaller::make($this->command)->install(),
                        Component::Repositories->value
                            => RepositoriesInstaller::make($this->command)->install(),
                        Component::Modules->value
                            => ModulesInstaller::make($this->command)->install(),
                    };
                }
            },
            'Installing components...'
        );
    }
}
