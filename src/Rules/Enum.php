<?php

declare(strict_types=1);

namespace JustSteveKing\FluentValidation\Rules;

use BackedEnum;
use Illuminate\Validation\Rules\Enum as IlluminateEnum;
use JustSteveKing\FluentValidation\Contracts\EnumContract;

final class Enum implements EnumContract
{
    /**
     * @param class-string<BackedEnum> $enum
     * @return IlluminateEnum
     */
    public static function rule(string $enum): IlluminateEnum
    {
        return new IlluminateEnum(
            type: $enum,
        );
    }
}
