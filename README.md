# Fluent Validation

[![Latest Version on Packagist](https://img.shields.io/packagist/v/juststeveking/fluent-validation.svg?style=flat-square)](https://packagist.org/packages/juststeveking/fluent-validation)
[![Test Suite](https://github.com/juststeveking/fluent-validation/actions/workflows/tests.yml/badge.svg)](https://github.com/juststeveking/fluent-validation/actions/workflows/tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/juststeveking/fluent-validation.svg?style=flat-square)](https://packagist.org/packages/juststeveking/fluent-validation)

Fluent Validation is a helper package, that allows you to use sensible defaults for your Laravel validation rules.

## Installation

```bash
composer require juststeveking/fluent-validation
```

## Why??

Why did I create this package? Well to be honest, I was feeling lazy - but a productive kind of lazy. I was writing some validation for quite a large API request and looked at all the string input I was about to have to validate, and thought there must be an easier way. So I created this to save me time by taking time building a package. I got the last laugh though, as now I never have to write the same string validation again!

## Usage

To use this package all you need to do is include the rules you may wish to use:

### Validating emails

```php
return [
    'email' => \JustSteveKing\FluentValidation\Fluency\EmailRule::rules()
];
```

Or to build them up yourself and/or override them:

```php
return [
    'email' => [
        \JustSteveKing\FluentValidation\Rules\Required::rule(),
        \JustSteveKing\FluentValidation\Rules\Email::rule('rfc,dns'),
    ]
];
```

### Validating Passwords

```php
return [
    'password' => \JustSteveKing\FluentValidation\Fluency\PasswordRule::rules()
];
```

Or to build them up yourself and/or override them:

```php
return [
    'password' => [
        \JustSteveKing\FluentValidation\Rules\Required::rule(),
        \Illuminate\Validation\Rules\Password::default(),
    ]
];
```

### Validating Strings

```php
return [
    'title' => \JustSteveKing\FluentValidation\Fluency\StringRule::rules()
];
```

Or to build them up yourself and/or override them:

```php
return [
    'title' => [
        \JustSteveKing\FluentValidation\Rules\Required::rule(),
        \JustSteveKing\FluentValidation\Rules\Text::rule(),
        \JustSteveKing\FluentValidation\Rules\Min::rule(2),
        \JustSteveKing\FluentValidation\Rules\Max::rule(255),
    ]
];
```

## Available Fluency Rules

This is a list of the currently available Fluency Rules:

- `EmailRule` - Will return `required` and `email` rules.
- `PasswordRule` - Will return `required` and `Password::default()` rules from Laravel.
- `StringRule` - Will return `required`, `min:2`, and `max:255` rules.

## Available Rules

This is a list of the currently available Rules:

- `Accepted` - Will return `accepted` or whatever override input you pass.
- `After` - Will return `after:` and whatever override input you pass.
- `AfterOrEqual` - Will return `after_or_equal:` and whatever override input you pass.
- `Alpha` - Will return `alpha` or whatever override input you pass.
- `Boolean` - Will return `boolean` or whatever override input you pass.
- `Date` - Will return `date` or whatever override input you pass.
- `Email` - Will return `email:` and whatever override input you pass.
- `Enum` - Will return a new Laravel Enum validation rule, you _must_ pass a backed Enum to this instance using `YourEnum::class`.
- `Exists` - Will return `exists:` with whatever table and an optional column you pass to it.
- `Integer` - Will return `integer` or whatever override input you pass.
- `Max` - Will return `max:` and whatever override input you pass.
- `Min` - Will return `min:` and whatever override input you pass.
- `Required` - Will return `required` or whatever override input you pass.
- `Text` - Will return `string` or whatever override input you pass.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Steve McDougall](https://github.com/juststeveking)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
