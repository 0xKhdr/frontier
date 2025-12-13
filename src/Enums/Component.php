<?php

declare(strict_types=1);

namespace Frontier\Enums;

/**
 * Available components for Frontier installation.
 */
enum Component: string
{
    case Action = 'Action';
    case Repository = 'Repository';
    case Modular = 'Modular';
}
