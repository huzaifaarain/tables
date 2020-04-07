<?php

namespace LaravelEnso\Tables\App\Exceptions;

use LaravelEnso\Helpers\App\Exceptions\EnsoException;
use LaravelEnso\Tables\App\Attributes\Filter as Attributes;

class Filter extends EnsoException
{
    public static function missingContract(string $class)
    {
        return new static(__(
            ':class must implement "LaravelEnso\Tables\App\Contracts\Filter"',
            ['class' => $class]
        ));
    }

    public static function wrongFormat()
    {
        return new static(__('The filters array may contain only objects'));
    }

    public static function missingAttributes()
    {
        return new static(__(
            'The following attributes are mandatory for filters: ":attrs"',
            ['attrs' => implode('", "', Attributes::Mandatory)],
        ));
    }

    public static function unknownAttributes()
    {
        return new static(__(
            'The following optional attributes are allowed for filters: ":attrs"',
            ['attrs' => implode('", "', Attributes::Optional)]
        ));
    }

    public static function missingRoute()
    {
        return new static(__(
            'When you set a select filter you need to provide the options controller route'
        ));
    }

    public static function routeNotFound(string $route)
    {
        return new static(__(
            'Filter route does not exist: ":route"',
            ['route' => $route]
        ));
    }
}
