<?php

declare(strict_types=1);

namespace JustSteveKing\FluentValidation\Fluency;

use JustSteveKing\FluentValidation\Contracts\FluencyContract;
use JustSteveKing\FluentValidation\Rules\Max;
use JustSteveKing\FluentValidation\Rules\Min;
use JustSteveKing\FluentValidation\Rules\Required;

final class StringRule implements FluencyContract
{
    public static function rules(): array
    {
        return [
            Required::rule(),
            Min::rule(2),
            Max::rule(255),
        ];
    }
}
