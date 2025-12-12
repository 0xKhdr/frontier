<?php

declare(strict_types=1);

use Frontier\BaseInstaller;
use Frontier\Contracts\Installer;
use Illuminate\Console\Command;

describe('BaseInstaller', function (): void {
    it('implements Installer contract', function (): void {
        $command = Mockery::mock(Command::class);
        $installer = new class($command) extends BaseInstaller
        {
            public function install(): void {}
        };

        expect($installer)->toBeInstanceOf(Installer::class);
    });

    it('can be created with make method', function (): void {
        $command = Mockery::mock(Command::class);
        $installer = ConcreteInstaller::make($command);

        expect($installer)->toBeInstanceOf(BaseInstaller::class);
    });
});

class ConcreteInstaller extends BaseInstaller
{
    public function install(): void {}
}
