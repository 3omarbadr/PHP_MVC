<?php

namespace PhpMvc\Validation\Rules;

use PhpMvc\Validation\Rules\Contracts\Rule;

class UniqueRule implements Rule
{

    public function __construct(protected $table, protected $column){}

    public function apply($field, $value, $data =[])
    {
        return !(app()->db->raw("SELECT * FROM {$this->table} WHERE {$this->column} = ?", [$value]));
    }

    public function __toString()
    {
        return 'This %s is already taken';
    }
}