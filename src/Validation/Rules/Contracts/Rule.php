<?php
namespace PhpMvc\Validation\Rules\Contracts;

interface Rule
{
    public function apply($field, $value, $data);

    public function __toString();
}