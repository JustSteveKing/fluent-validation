<?php

declare(strict_types=1);

namespace JustSteveKing\FluentValidation\Rules;

use JustSteveKing\FluentValidation\Contracts\RuleContract;

final class Email implements RuleContract
{
    public static function rule(string|int|null $input = null): string
    {
        return "email:{$input}";
    }
}
