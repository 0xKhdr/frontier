<?php

namespace Frontier\Installers;

use Frontier\Traits\InteractsWithInstaller;
use Illuminate\Console\Command;

abstract class AbstractInstaller implements Contracts\Installer
{
    use InteractsWithInstaller;

    public function __construct(
        protected Command $command
    ) {}

    public static function make(Command $command): static
    {
        return new static($command);
    }
}
