<?php

namespace PhpMvc\Validation;

use PhpMvc\Validation\Rules\MaxRule;
use PhpMvc\Validation\Rules\MinRule;
use PhpMvc\Validation\Rules\EmailRule;
use PhpMvc\Validation\Rules\UniqueRule;
use PhpMvc\Validation\Rules\BetweenRule;
use PhpMvc\Validation\Rules\AlphaNumRule;
use PhpMvc\Validation\Rules\RequiredRule;
use PhpMvc\Validation\Rules\ConfirmedRule;

trait RulesMapper
{
    protected static array $map = [
        'required' => RequiredRule::class,
        'alnum' => AlphaNumRule::class,
        'max' => MaxRule::class,
        'min' => MinRule::class,
        'between' => BetweenRule::class,
        'email' => EmailRule::class,
        'confirmed' => ConfirmedRule::class,
        'unique' => UniqueRule::class,
    ];

    public static function resolve(string $rule, $options)
    {
        return new static::$map[$rule](...$options);
    }
}