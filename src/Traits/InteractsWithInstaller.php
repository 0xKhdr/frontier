<?php

namespace Frontier\Traits;

use Illuminate\Support\Facades\App;
use Symfony\Component\Process\Process;

trait InteractsWithInstaller
{
    protected function runCommands(array $commands): void
    {
        foreach ($commands as $command) {
            $process = Process::fromShellCommandline($command, App::basePath(), null, null, null);
            $process->run(function ($type, $line) {
                $this->command->getOutput()->write($line);
            });
        }
    }
}
