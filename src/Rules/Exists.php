<?php

declare(strict_types=1);

namespace JustSteveKing\FluentValidation\Rules;

final class Exists
{
    public static function rule(string $table, null|string $column = null): string
    {
        if ($column) {
            $table = "{$table},{$column}";
        }

        return "exists:{$table}";
    }
}
