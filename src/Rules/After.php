<?php

declare(strict_types=1);

namespace JustSteveKing\FluentValidation\Rules;

use JustSteveKing\FluentValidation\Contracts\RuleContract;

final class After implements RuleContract
{
    public static function rule(int|string|null $input = null): string
    {
        return "after:{$input}";
    }
}
