# Fluent Validation

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

## Available Fluency Rules

This is a list of the currently available Fluency Rules:

- `EmailRule` - Will return `required` and `email` rules.
- `PasswordRule` - Will return `required` and `Password::default()` rules from Laravel.
- `StringRule` - Will return `required`, `min:2`, and `max:255` rules.

## Available Rules

This is a list of the currently available Rules:

- `Email` - Will return `email:` and whatever override input you pass.
- `Max` - Will return `max:` and whatever override input you pass.
- `Min` - Will return `min:` and whatever override input you pass.
- `Required` - Will return `required` or whatever override input you pass.
