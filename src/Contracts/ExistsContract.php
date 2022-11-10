<?php

declare(strict_types=1);

namespace JustSteveKing\FluentValidation\Contracts;

interface ExistsContract
{
    public static function rule(string $table, null|string $column = null): string;
}
