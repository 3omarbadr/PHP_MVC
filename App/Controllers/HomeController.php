<?php
namespace App\Controllers;

use PhpMvc\View\View;

class HomeController
{
    public function index()
    {
        return View::make('home');
    }
}