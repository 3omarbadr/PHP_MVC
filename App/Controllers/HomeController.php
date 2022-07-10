<?php
namespace App\Controllers;

use PhpMvc\View\View;

class HomeController extends Controller
{
    public function index()
    {
        return View::make('home');
    }
}