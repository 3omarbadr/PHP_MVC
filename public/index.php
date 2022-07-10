<?php

use Dotenv\Dotenv;
use App\Models\User;
use PhpMvc\Validation\Validator;

require_once __DIR__ . '/../src/Support/helpers.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'routes/web.php';


$env = Dotenv::createImmutable(base_path());

$env->load();

app()->run();

$validator = new Validator();

$validator->setRules([
    'email' => ['required','email','min:3']
]);


$validator->make([
    'email' => 'omar'
]);


User::update(1,[
    'username' => 'omar',
    'email' => 'omar@omar.com',
]);