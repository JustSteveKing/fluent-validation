<?php

declare(strict_types=1);

namespace JustSteveKing\FluentValidation\Contracts;

use Illuminate\Validation\Rules\Enum as IlluminateEnum;

interface EnumContract
{
    public static function rule(string $enum): IlluminateEnum;
}
