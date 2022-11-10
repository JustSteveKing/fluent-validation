<?php

declare(strict_types=1);

use JustSteveKing\FluentValidation\Rules\Accepted;
use JustSteveKing\FluentValidation\Rules\After;
use JustSteveKing\FluentValidation\Rules\AfterOrEqual;
use JustSteveKing\FluentValidation\Rules\Boolean;
use JustSteveKing\FluentValidation\Rules\Email;
use JustSteveKing\FluentValidation\Rules\Enum;
use JustSteveKing\FluentValidation\Rules\Max;
use JustSteveKing\FluentValidation\Rules\Min;
use JustSteveKing\FluentValidation\Rules\Required;
use JustSteveKing\FluentValidation\Rules\Text;
use JustSteveKing\FluentValidation\Tests\Fixtures\Method;

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

it('can get the basic text rule', function (): void {
    expect(
        Text::rule(),
    )->toEqual('string');
});

it('can override the text rule', function (string $rule): void {
    expect(
        Text::rule($rule),
    )->toEqual($rule);
})->with('text');

it('can get the basic accepted rule', function (): void {
    expect(
        Accepted::rule(),
    )->toEqual('accepted');
});

it('can override the accepted rule', function (string $rule): void {
    expect(
        Text::rule($rule),
    )->toEqual($rule);
})->with('random');

it('can get the basic after rule', function (): void {
    expect(
        After::rule(),
    )->toEqual('after:');
});

it('can override the after rule', function (string $rule): void {
    expect(
        After::rule($rule),
    )->toEqual("after:{$rule}");
})->with('random');

it('can get the basic after or equal rule', function (): void {
    expect(
        AfterOrEqual::rule(),
    )->toEqual('after_or_equal:');
});

it('can override the after or equal rule', function (string $rule): void {
    expect(
        AfterOrEqual::rule($rule),
    )->toEqual("after_or_equal:{$rule}");
})->with('random');

it('can get the basic enum rule', function (): void {
    expect(
        Enum::rule(Method::class),
    )->toBeInstanceOf(\Illuminate\Validation\Rules\Enum::class);
});

it('can override the boolean rule', function (string $rule): void {
    expect(
        Boolean::rule($rule),
    )->toEqual($rule);
})->with('random');

it('can get the basic boolean rule', function (): void {
    expect(
        Boolean::rule(),
    )->toEqual('boolean');
});
