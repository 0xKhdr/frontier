<?php

declare(strict_types=1);

namespace Frontier\Contracts;

/**
 * Contract for installer classes.
 *
 * Installers are responsible for setting up components of the Frontier starter kit.
 */
interface Installer
{
    /**
     * Execute the installation process.
     */
    public function install(): void;
}
