<?php

declare(strict_types=1);

use Illuminate\Validation\Rules\Password;
use JustSteveKing\FluentValidation\Fluency\EmailRule;
use JustSteveKing\FluentValidation\Fluency\PasswordRule;
use JustSteveKing\FluentValidation\Fluency\StringRule;

it('can use the basic email rule', function (): void {
    expect(
        EmailRule::rules(),
    )->toBeArray()->toEqual(['required', 'email:rfc']);
});

it('can use the basic password rule', function (): void {
    expect(
        PasswordRule::rules(),
    )->toBeArray()->toEqual(['required', Password::default()]);
});

it('can use the basic string rule', function (): void {
    expect(
        StringRule::rules(),
    )->toBeArray()->toEqual(['required', 'min:2', 'max:255']);
});
