<?php

declare(strict_types=1);

namespace Frontier\Traits;

use Illuminate\Support\Facades\App;
use Symfony\Component\Process\Process;

/**
 * Provides command execution functionality for installers.
 */
trait InteractsWithInstaller
{
    /**
     * Run shell commands in sequence.
     *
     * @param  array<int, string>  $commands  Shell commands to execute
     */
    protected function runCommands(array $commands): void
    {
        foreach ($commands as $command) {
            $process = Process::fromShellCommandline($command, App::basePath(), null, null, null);
            $process->run(function ($type, $line): void {
                $this->command->getOutput()->write($line);
            });
        }
    }
}
