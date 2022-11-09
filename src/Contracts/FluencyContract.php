<?php

declare(strict_types=1);

namespace JustSteveKing\FluentValidation\Contracts;

interface FluencyContract
{
    public static function rules(): array;
}
