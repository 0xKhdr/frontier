<?php

declare(strict_types=1);

namespace Frontier;

use Frontier\Contracts\Installer;
use Frontier\Traits\InteractsWithInstaller;
use Illuminate\Console\Command;

/**
 * Base installer class for Frontier components.
 *
 * Provides common functionality for component installers.
 */
abstract class BaseInstaller implements Installer
{
    use InteractsWithInstaller;

    /**
     * Create a new installer instance.
     */
    public function __construct(
        protected Command $command
    ) {}

    /**
     * Create a new installer instance via static factory.
     */
    public static function make(Command $command): static
    {
        return new static($command);
    }
}
