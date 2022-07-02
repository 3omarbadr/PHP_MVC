<?php

use Dotenv\Dotenv;
use PhpMvc\Validation\Rules\RequiredRule;
use PhpMvc\Validation\Validator;

require_once __DIR__ . '/../src/Support/helpers.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'routes/web.php';


$env = Dotenv::createImmutable(base_path());

$env->load();

app()->run();

$validator = new Validator();

$validator->setRules([
    'username' => [new RequiredRule],
    'email' => 'required|email'
]);

$validator->make([
    'username' => "Omar",
    'email' => 'omar@omar.com'
]);


var_dump($validator->errors());