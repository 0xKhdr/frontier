<?php

namespace Frontier\Traits;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

trait InteractsWithInstaller
{
    protected function runCommands(array $commands): void
    {
        foreach ($commands as $command) {
            $process = Process::fromShellCommandline($command, base_path(), null, null, null);
            $process->run(function ($type, $line) {
                $this->command->getOutput()->write($line);
            });
        }
    }
}
