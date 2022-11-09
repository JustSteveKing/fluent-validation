<?php

declare(strict_types=1);

namespace JustSteveKing\FluentValidation\Contracts;

interface RuleContract
{
    public static function rule(string|int|null $input = null): string;
}
