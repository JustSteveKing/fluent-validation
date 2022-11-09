<?php

declare(strict_types=1);

namespace JustSteveKing\FluentValidation\Fluency;

use JustSteveKing\FluentValidation\Contracts\FluencyContract;
use JustSteveKing\FluentValidation\Rules\Email;
use JustSteveKing\FluentValidation\Rules\Required;

final class EmailRule implements FluencyContract
{
    public static function rules(): array
    {
        return [
            Required::rule(),
            Email::rule('rfc'),
        ];
    }
}
