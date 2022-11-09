<?php

declare(strict_types=1);

use JustSteveKing\FluentValidation\Rules\Email;
use JustSteveKing\FluentValidation\Rules\Max;
use JustSteveKing\FluentValidation\Rules\Min;
use JustSteveKing\FluentValidation\Rules\Required;

it('can get the basic email rule', function (): void {
    expect(
        Email::rule(),
    )->toEqual('email:');
});

it('can provide an option to extend the email rule', function (string $rule): void {
    expect(
        Email::rule($rule),
    )->toEqual("email:{$rule}");
})->with('emails');

it('can get the basic max rule', function (): void {
    expect(
        Max::rule(),
    )->toEqual('max:');
});

it('can provide an option to extend the max rule', function (string $rule): void {
    expect(
        Max::rule($rule),
    )->toEqual("max:{$rule}");
})->with('max');

it('can get the basic min rule', function (): void {
    expect(
        Min::rule(),
    )->toEqual('min:');
});

it('can provide an option to extend the min rule', function (string $rule): void {
    expect(
        Min::rule($rule),
    )->toEqual("min:{$rule}");
})->with('min');

it('can get the basic required rule', function (): void {
    expect(
        Required::rule(),
    )->toEqual('required');
});

it('can override the required rule', function (string $rule): void {
    expect(
        Required::rule($rule),
    )->toEqual($rule);
})->with('required');
