<?php

declare(strict_types=1);

namespace JustSteveKing\FluentValidation\Rules;

use JustSteveKing\FluentValidation\Contracts\RuleContract;

final class Text implements RuleContract
{
    public static function rule(int|string|null $input = null): string
    {
        return null !== $input ? strval($input) : 'string';
    }
}
