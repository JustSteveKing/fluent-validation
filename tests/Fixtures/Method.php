<?php

declare(strict_types=1);

namespace JustSteveKing\FluentValidation\Tests\Fixtures;

enum Method: string
{
    case GET = 'GET';
    case POST = 'POST';
    case PUT = 'PUT';
    case PATCH = 'PATCH';
    case DELETE = 'DELETE';
}
