<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Artisan;

describe('InstallCommand', function (): void {
    it('is registered', function (): void {
        $commands = Artisan::all();

        expect($commands)->toHaveKey('frontier:install');
    });

    it('has correct description', function (): void {
        $command = Artisan::all()['frontier:install'];

        expect($command->getDescription())->toBe("Let's take it to the edge");
    });
});
