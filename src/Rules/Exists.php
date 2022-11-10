<?php

declare(strict_types=1);

namespace JustSteveKing\FluentValidation\Rules;

use JustSteveKing\FluentValidation\Contracts\ExistsContract;

final class Exists implements ExistsContract
{
    public static function rule(string $table, null|string $column = null): string
    {
        if ($column) {
            $table = "{$table},{$column}";
        }

        return "exists:{$table}";
    }
}
