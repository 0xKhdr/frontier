<?php

declare(strict_types=1);

namespace Frontier\Enums;

/**
 * Available components for Frontier installation.
 */
enum Component: string
{
    case Actions = 'Actions';
    case Repositories = 'Repositories';
    case Modules = 'Modules';
}
