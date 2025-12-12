<?php

declare(strict_types=1);

use Frontier\Contracts\Installer;

describe('Installer Contract', function (): void {
    it('requires install method', function (): void {
        expect(method_exists(Installer::class, 'install'))->toBeTrue();
    });
});
