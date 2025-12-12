<?php

declare(strict_types=1);

use Frontier\Enums\Component;

describe('Component Enum', function (): void {
    it('has Actions case', function (): void {
        expect(Component::Actions->value)->toBe('Actions');
    });

    it('has Repositories case', function (): void {
        expect(Component::Repositories->value)->toBe('Repositories');
    });

    it('has Modules case', function (): void {
        expect(Component::Modules->value)->toBe('Modules');
    });

    it('has exactly 3 cases', function (): void {
        expect(Component::cases())->toHaveCount(3);
    });
});
