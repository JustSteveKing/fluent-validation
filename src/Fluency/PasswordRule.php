<?php

declare(strict_types=1);

namespace JustSteveKing\FluentValidation\Fluency;

use Illuminate\Validation\Rules\Password;
use JustSteveKing\FluentValidation\Contracts\FluencyContract;
use JustSteveKing\FluentValidation\Rules\Required;

final class PasswordRule implements FluencyContract
{
    public static function rules(): array
    {
        return [
            Required::rule(),
            Password::default(),
        ];
    }
}
