<?php

namespace Frontier\Installers;

use Illuminate\Console\Command;
use Modules\Edge\Traits\InteractsWithInstaller;

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
